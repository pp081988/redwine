<?php
/* Smarty version 3.1.30, created on 2017-08-11 16:47:58
  from "D:\xampp\htdocs\redwine\tpl\back\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598d6f3e6adf66_68376450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24fc8755e5539707f54fa8295ab9a6bd85771aa6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\index.html',
      1 => 1502441277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598d6f3e6adf66_68376450 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>DD_belatedPNG.fix('*');<?php echo '</script'; ?>
>
<![endif]-->
<title>Redwine後台系統</title>
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="#"><img src="images/logo.png"></a> 
			<span class="logo navbar-slogan f-l mr-10 hidden-xs"></span> 
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
			<ul class="cl">
				<li></li>
				<li class="dropDown dropDown_hover">
					<a href="#" class="dropDown_A"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<i class="Hui-iconfont">&#xe6d5;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
						<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'back','a'=>'logout'),$_smarty_tpl);?>
">退出</a></li>
				</ul>
			</li>
				<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
				<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" data-val="green" title="綠色(默認)">綠色(默認)</a></li>
						<li><a href="javascript:;" data-val="default" title="黑色">黑色</a></li>
						<li><a href="javascript:;" data-val="blue" title="藍色">藍色</a></li>
						<li><a href="javascript:;" data-val="red" title="紅色">紅色</a></li>
						<li><a href="javascript:;" data-val="yellow" title="黃色">黃色</a></li>
						<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
</header>
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 資訊管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'articleList','title'=>'達人搞乜鬼','id'=>'0'),$_smarty_tpl);?>
" data-title="達人搞乜鬼" href="javascript:void(0)">達人搞乜鬼</a></li>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'articleList','title'=>'達人好介紹','id'=>'1'),$_smarty_tpl);?>
" data-title="達人好介紹" href="javascript:void(0)">達人好介紹</a></li>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'articleList','title'=>'達人講你知','id'=>'2'),$_smarty_tpl);?>
" data-title="達人講你知" href="javascript:void(0)">達人講你知</a></li>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'articleList','title'=>'影院','id'=>'3'),$_smarty_tpl);?>
" data-title="影院" href="javascript:void(0)">影院</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">图片管理</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 產品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<!-- <li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'product-brand'),$_smarty_tpl);?>
" data-title="品牌管理" href="javascript:void(0)">品牌管理</a></li> -->
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'product-category'),$_smarty_tpl);?>
" data-title="分類管理" href="javascript:void(0)">分類管理</a></li>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'product-list'),$_smarty_tpl);?>
" data-title="產品管理" href="javascript:void(0)">產品管理</a></li>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'product-matching'),$_smarty_tpl);?>
" data-title="配對管理" href="javascript:void(0)">配對管理</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe62b;</i> 吹水園地<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'forum-matching-list'),$_smarty_tpl);?>
" data-title="配對主題" href="javascript:void(0)">配對主題</a></li>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'forum-chat-list'),$_smarty_tpl);?>
" data-title="吹水主題" href="javascript:void(0)">吹水主題</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="http://h-ui.duoshuo.com/admin/" data-title="评论列表" href="javascript:;">评论列表</a></li>
					<li><a data-href="feedback-list.html" data-title="意见反馈" href="javascript:void(0)">意见反馈</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 會員管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'member-list'),$_smarty_tpl);?>
" data-title="會員管理" href="javascript:;">會員列表</a></li>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'member-del'),$_smarty_tpl);?>
" data-title="已刪除會員" href="javascript:;">已刪除會員</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="admin-role.html" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
					<li><a data-href="admin-permission.html" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
					<li><a data-href="admin-list.html" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 網站信息<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'banner-list'),$_smarty_tpl);?>
" data-title="首頁Banner" href="javascript:void(0)">首頁Banner</a></li>
					<li><a data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'tou'),$_smarty_tpl);?>
" data-title="使用條款" href="javascript:void(0)">使用條款</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="system-base.html" data-title="系统设置" href="javascript:void(0)">系统设置</a></li>
					<li><a data-href="system-category.html" data-title="栏目管理" href="javascript:void(0)">栏目管理</a></li>
					<li><a data-href="system-data.html" data-title="数据字典" href="javascript:void(0)">数据字典</a></li>
					<li><a data-href="system-shielding.html" data-title="屏蔽词" href="javascript:void(0)">屏蔽词</a></li>
					<li><a data-href="system-log.html" data-title="系统日志" href="javascript:void(0)">系统日志</a></li>
			</ul>
		</dd>
	</dl>
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="主頁" data-href="welcome.html">主頁</span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'back','a'=>'welcome'),$_smarty_tpl);?>
"></iframe>
	</div>
</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
</ul>
</div>
<!--_footer 作为公共模版分离出去-->
<?php echo '<script'; ?>
 type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="lib/layer/2.4/layer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="static/h-ui/js/H-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="static/h-ui.admin/js/H-ui.admin.js"><?php echo '</script'; ?>
> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<?php echo '<script'; ?>
 type="text/javascript" src="lib/jquery.contextmenu/jquery.contextmenu.r2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	/*$("#min_title_list li").contextMenu('Huiadminmenu', {
		bindings: {
			'closethis': function(t) {
				console.log(t);
				if(t.find("i")){
					t.find("i").trigger("click");
				}		
			},
			'closeall': function(t) {
				alert('Trigger was '+t.id+'\nAction was Email');
			},
		}
	});*/
});
/*个人信息*/
function myselfinfo(){
	layer.open({
		type: 1,
		area: ['300px','200px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: '查看信息',
		content: '<div>管理员信息</div>'
	});
}

/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}


<?php echo '</script'; ?>
> 
</body>
</html><?php }
}
