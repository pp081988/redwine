<?php

require(APP_PATH."/model/unloginCheck.php");

class back extends spController
{

	protected $unloginCheck;

	function __construct(){
		parent::__construct();
		$this->unloginCheck = spClass("unloginCheck");
	}

	function loginIndex(){
		$this->display("back/login.html");
	}

	private function returnError($str){
		$this->error($str,spUrl("back","loginIndex"));
	}

	function login(){
		if(strtoupper(trim($_POST['verify'])) == ""){$this->returnError("");exit;}
		if(strtoupper(trim($_POST['verify'])) == $_SESSION['verify_code']){

			/********验证为空********/
			$dirtyUsername = trim($_POST['username']);
			if($dirtyUsername == ""){$this->returnError("請輸入賬戶名");exit;}
			if(strlen($dirtyUsername) < 5 || strlen($dirtyUsername) > 20 ){$this->returnError("賬戶名不合法");exit;}
			$dirtyPassword = trim($_POST['password']);
			if($dirtyPassword == ""){$this->returnError("請輸入密碼");exit;}
			if(strlen($dirtyPassword) < 8){$this->returnError("密碼不合法");exit;}

			/********非法字符串过滤********/
			$filter = spClass("filter");
			$username = $filter->filter($dirtyUsername);
			$password = $filter->filter($dirtyPassword);

			/********验证账户密码********/
			$gb = new db("admin_users","id");
			$result = $gb->find(Array('admin_username'=>$username));
			if(!$result){
				$this->returnError("賬戶名或密碼錯誤");exit;
			}
			if(!$gb->find(Array('admin_username'=>$username,"password"=>md5($password.$result['salt'])))){
				$this->returnError("賬戶名或密碼錯誤");exit;
			}

			/********验证通过********/
			$_SESSION['last_login_ip'] = $result['last_login_ip'];
			$_SESSION['last_login_time'] = $result['last_login_time'];
			$_SESSION['admin_username'] = $result['admin_username'];
			$conditions = Array("admin_username"=>$result['admin_username']);
			$gb->incrField($conditions, 'logins');		//-登录次数+1
			$gb->update($conditions,Array("last_login_ip"=>$_SERVER['REMOTE_ADDR'],"last_login_time"=>date("Y-m-d H:i:s")));	//记录最后一次登录IP和时间
			$this->jump(spUrl("back","backIndex"));

			/******验证码错误******/
		}else{
			$this->returnError("驗證碼錯誤");
			exit;
		}
	}

	function backIndex(){
		$this->unloginCheck->adminCheck();
		$this->username = $_SESSION['admin_username'];
		$this->display("back/index.html");
	}



	function welcome(){
		$this->unloginCheck->adminCheck();
		$gb = new db("admin_users","id");
		$result = $gb->find(Array("admin_username"=>$_SESSION['admin_username']));
		$this->logins = $result['logins'];
		$this->now_login_ip = $_SERVER['REMOTE_ADDR'];
		$this->last_login_ip = $_SESSION['last_login_ip'];
		$this->last_login_time = $_SESSION['last_login_time'];		
		$this->serverIp = GetHostByName($_SERVER['SERVER_NAME']);
		$this->serverSoftware = $_SERVER['SERVER_SOFTWARE'];
		$this->domainName = $_SERVER["HTTP_HOST"];
		$this->serverPort = $_SERVER['SERVER_PORT'];
		$this->sysInfo = php_uname();
		$this->phpVersion = PHP_VERSION;
		$this->year = date("Y");
		$this->filePath = __FILE__;
		$this->serverLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$this->phpPath = DEFAULT_INCLUDE_PATH;
		$this->display("back/welcome.html");
	}

	public function logout()
    {
    	unset($_SESSION['admin_username']);
    	unset($_SESSION['contact']);
    	unset($_SESSION['last_login_ip']);
    	unset($_SESSION['last_login_time']);
    	//$this->display("index.html");
    	$this->jump(spUrl('back', 'loginIndex'));
    }
}