<?php
/////////////////////////////////////////////////////////////////
// SpeedPHP中文PHP框架, Copyright (C) 2008 - 2010 SpeedPHP.com //
/////////////////////////////////////////////////////////////////

/**
 * spController 基础控制器程序父类 应用程序中的每个控制器程序都应继承于spController
 */
class spController { 

	/**
	 * 视图对象
	 */
	public $v;

	public $layout = null;
	/**
	 * 赋值到模板的变量
	 */
	private $__template_vals = array();
	
	/**
	 * 模板是否已输出
	 */
	public $displayed = FALSE;
	/**
	 * 构造函数
	 */
	public function __construct()
	{	

		if($GLOBALS['G_SP']['view']['enabled']){
			$this->v = spClass($GLOBALS['G_SP']['view']['engine_name'],null,$GLOBALS['G_SP']['view']['engine_path']);
			$engine_vars = get_class_vars(get_class($this->v));
			foreach( $GLOBALS['G_SP']['view']['config'] as $key => $value ){
				if( array_key_exists($key,$engine_vars) )$this->v->{$key} = $value;
			}

			if( !empty($GLOBALS['G_SP']['sp_app_id']) && isset($this->v->compile_id) )$this->v->compile_id = $GLOBALS['G_SP']['sp_app_id'];
			if( !is_writable($GLOBALS['G_SP']['view']['config']['compile_dir']) )spError('View Engine: complie_dir is not writable!');
			if( !is_writable($GLOBALS['G_SP']['view']['config']['cache_dir']) )spError('View Engine: cache_dir is not writable!');

			spAddViewFunction('T', array( 'spView', '__template_T'));
			spAddViewFunction('spUrl', array( 'spView', '__template_spUrl'));
		}

		// $this->index = spUrl("main","index");
		// $this->activicity = spUrl("main","activicity");
		// $this->forum = spUrl("main","forum");
		// // $this->video = APP_PATH."/index.php?c=main&a=video";
		// $this->video = spUrl("main","video");
		// $this->tellyou = spUrl("main","tellyou");
		// $this->introduction = spUrl("main","introduction");
		$this->loginInfo = '<ul class="socials1"><li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"><a href="'.spUrl('login','loginIndex').'"><img src="images/login.png" alt=""/></a> | <a href="'.spUrl("login","registerIndex").'">註冊</a></li></ul>';
		if(isset($_SESSION['username'])){
			$this->loginInfo = '<div class="userandlogout"><span class="userName">'.$_SESSION['username'].'</span> | <a href="'.spUrl("login","logout").'">登出</a>
				<div class="userPanel">
            	<ul>
            	<li><a href="'.spUrl("login","cpIndex").'">修改密碼</a></li>
            	</ul>
        		</div>
			</div>
			<script>
			$(".userName").bind("click",function(){
				$(".userPanel").css({"display":"block"});
				setTimeout(function(){
                	$(".userPanel").css({"opacity":"1","top":"25px"});
                },100)
			})
			$("body").click(function(){
                $(".userPanel").css({"opacity":"0","top":"20px"});
                setTimeout(function(){
                	$(".userPanel").css({"display":"none"});
                },300)
            })

            $(".userPanel,.userName").on("click", function(e){
                e.stopPropagation();
            });
			</script>
			';
		}
	}

    /**
     *
     * 跳转程序
     *
     * 应用程序的控制器类可以覆盖该函数以使用自定义的跳转程序
     *
     * @param $url  需要前往的地址
     * @param $delay   延迟时间
     */
    public function jump($url, $delay = 0){
		echo "<html><head><meta http-equiv='refresh' content='{$delay};url={$url}'></head><body></body></html>";
		exit;
    }

    /**
     *
     * 错误提示程序
     *
     * 应用程序的控制器类可以覆盖该函数以使用自定义的错误提示
     *
     * @param $msg   错误提示需要的相关信息
     * @param $url   跳转地址
     */
    public function error($msg, $url = ''){
		$url = empty($url) ? "window.history.back();" : "location.href=\"{$url}\";";
		echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><script>function sptips(){alert(\"{$msg}\");{$url}}</script></head><body onload=\"sptips()\"></body></html>";
		exit;
    }

    /**
     *
     * 成功提示程序
     *
     * 应用程序的控制器类可以覆盖该函数以使用自定义的成功提示
	 *
     * @param $msg   成功提示需要的相关信息
     * @param $url   跳转地址
     */
    public function success($msg, $url = ''){
		$url = empty($url) ? "window.history.back();" : "location.href=\"{$url}\";";
		echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><script>function sptips(){alert(\"{$msg}\");{$url}}</script></head><body onload=\"sptips()\"></body></html>";
		exit;
    }

	/**
	 * 魔术函数，获取赋值作为模板内变量
	 */
	public function __set($name, $value)
	{
		if(TRUE == $GLOBALS['G_SP']['view']['enabled']){
			$this->v->assign(array($name=>$value));
		}
		$this->__template_vals[$name] = $value;
	}
	

	/**
	 * 魔术函数，返回已赋值的变量值
	 */
	public function __get($name)
	{
		return $this->__template_vals[$name];
	}
	
	/**
	 * 输出模板
	 *
     * @param $tplname   模板路径及名称
     * @param $output   是否直接显示模板，设置成FALSE将返回HTML而不输出
	 */
	public function display($tplname, $output = true, $check_exists = true)
	{
		$tplname = $GLOBALS['G_SP']['view']['config']['template_dir'].'/'.ltrim($tplname, '/');
		if( !is_readable($tplname) ){
			if( $check_exists ){
				spError("View Engine: Unable to load template file '{$tplname}'");
			}else{
				return false;
			}
		}
		if($GLOBALS['G_SP']['view']['enabled']){
			if( $this->layout ){
				$this->__template_file = $tplname;
				$tplname = $this->layout;
			}
			$this->v->assign($this->__template_vals);
			if($GLOBALS['G_SP']['view']['debugging'] && SP_DEBUG)$this->v->debugging = true;
			try {
				$this->addfuncs();
				$this->displayed = TRUE;
				$this->v->display($tplname);
			} catch (Exception $e) {
				spError( 'View Engine: '.$e->getMessage() );
			}
		}else{
			extract($this->__template_vals);
			include $tplname;
		}
        @ob_start();
		if( !$output )return ob_get_clean();
	}
	
	/**
	 * 自动输出页面
	 * @param tplname 模板文件路径
	 */
	public function auto_display($tplname)
	{
		if( TRUE != $this->v->displayed && FALSE != $GLOBALS['G_SP']['view']['auto_display']){
			if( method_exists($this->v, 'templateExists') && TRUE == $this->v->templateExists($tplname))$this->display($tplname);
		}
	}

	/**
	 * 魔术函数，实现对控制器扩展类的自动加载
	 */
	public function __call($name, $args)
	{
		if(in_array($name, $GLOBALS['G_SP']["auto_load_controller"])){
			return spClass($name)->__input($args);
		}elseif(!method_exists( $this, $name )){
			spError("方法 {$name}未定义！<br />请检查是否控制器类(".get_class($this).")与数据模型类重名？");
		}
	}

	/**
	 * 获取模板引擎实例
	 */
	public function getView()
	{
		$this->addfuncs();
		return $this->v;
	}
	/**
	 * 设置当前用户的语言
     * @param $lang   语言标识
	 */
	public function setLang($lang)
	{
		if( array_key_exists($lang, $GLOBALS['G_SP']["lang"]) ){
			@ob_start();
			$domain = ('www.' == substr($_SERVER["HTTP_HOST"],0,4)) ? substr($_SERVER["HTTP_HOST"],4) : $_SERVER["HTTP_HOST"];
			setcookie($GLOBALS['G_SP']['sp_app_id']."_SpLangCookies", $lang, time()+31536000, '/', $domain ); // 一年过期
			$_SESSION[$GLOBALS['G_SP']['sp_app_id']."_SpLangSession"] = $lang;
			return TRUE;
		}
		return FALSE;
	}
	/**
	 * 获取当前用户的语言
	 */
	public function getLang()
	{
		if( !isset($_COOKIE[$GLOBALS['G_SP']['sp_app_id']."_SpLangCookies"]) )return $_SESSION[$GLOBALS['G_SP']['sp_app_id']."_SpLangSession"];
		return $_COOKIE[$GLOBALS['G_SP']['sp_app_id']."_SpLangCookies"];
	}
	
	/**
	 * 注册视图函数
	 */
	private function addfuncs()
	{
		if( is_array($GLOBALS['G_SP']["view_registered_functions"]) ){
			foreach( $GLOBALS['G_SP']["view_registered_functions"] as $alias => $func ){
				if( is_array($func) && !is_object($func[0]) )$func = array(spClass($func[0]),$func[1]);
				$this->v->registerPlugin("function", $alias, $func);
				unset($GLOBALS['G_SP']["view_registered_functions"][$alias]);
			}
		}
	}
}

/**
 * spArgs 
 * 应用程序变量类
 * spArgs是封装了$_GET/$_POST、$_COOKIE等，提供一些简便的访问和使用这些
 * 全局变量的方法。
 */

class spArgs {
	/**
	 * 在内存中保存的变量
	 */
	private $args = null;

	/**
	 * 构造函数
	 *
	 */
	public function __construct(){
		$this->args = $_REQUEST;
	}
	
	/**
	 * 获取应用程序请求变量值，同时也可以指定获取的变量所属。
	 * 
	 * @param name    获取的变量名称，如果为空，则返回全部的请求变量
	 * @param default    当前获取的变量不存在的时候，将返回的默认值
	 * @param method    获取位置，取值GET，POST，COOKIE
	 */
	public function get($name = null, $default = FALSE, $method = null)
	{
		if(null != $name){
			if( $this->has($name) ){
				if( null != $method ){
					switch (strtolower($method)) {
						case 'get':
							return $_GET[$name];
						case 'post':
							return $_POST[$name];
						case 'cookie':
							return $_COOKIE[$name];
					}
				}
				return $this->args[$name];
			}else{
				return (FALSE === $default) ? FALSE : $default;
			}
		}else{
			return $this->args;
		}
	}

	/**
	 * 设置（增加）环境变量值，该名称将覆盖原来的环境变量名称
	 * 
	 * @param name    环境变量名称
	 * @param value    环境变量值
	 */
	public function set($name, $value)
	{
		$this->args[$name] = $value;
	}

	/**
	 * 检测是否存在某值
	 * 
	 * @param name    待检测的环境变量名称
	 */
	public function has($name)
	{
		return isset($this->args[$name]);
	}

	/**
	 * 构造输入函数，标准用法
	 * @param args    环境变量名称的参数
	 */
	public function __input($args = -1)
	{
		if( -1 == $args )return $this;
		@list( $name, $default, $method ) = $args;
		return $this->get($name, $default, $method);
	}
	
	/**
	 * 获取请求字符
	 */
	public function request(){
		return $_SERVER["QUERY_STRING"];
	}
}

