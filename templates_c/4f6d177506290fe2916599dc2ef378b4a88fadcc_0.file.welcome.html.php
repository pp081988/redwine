<?php
/* Smarty version 3.1.30, created on 2017-07-20 15:02:25
  from "D:\xampp\htdocs\redwine\tpl\back\welcome.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597055816d8759_87576413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f6d177506290fe2916599dc2ef378b4a88fadcc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\welcome.html',
      1 => 1499912555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597055816d8759_87576413 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<title>我的桌面</title>
</head>
<body>
<div class="page-container">
	<p class="f-20 text-success">Redwine後台系統</p>
	<p>登錄次數：<?php echo $_smarty_tpl->tpl_vars['logins']->value;?>
 </p>
	<p>本次登錄IP：<?php echo $_smarty_tpl->tpl_vars['now_login_ip']->value;?>
</p>
	<p>上次登錄IP：<?php echo $_smarty_tpl->tpl_vars['last_login_ip']->value;?>
  上次登錄時間：<?php echo $_smarty_tpl->tpl_vars['last_login_time']->value;?>
</p>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th colspan="7" scope="col">信息統計</th>
			</tr>
			<tr class="text-c">
				<th>统计</th>
				<th>资讯库</th>
				<th>图片库</th>
				<th>产品库</th>
				<th>用户</th>
				<th>管理员</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
				<td>总数</td>
				<td>92</td>
				<td>9</td>
				<td>0</td>
				<td>8</td>
				<td>20</td>
			</tr>
			<tr class="text-c">
				<td>今日</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr class="text-c">
				<td>昨日</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr class="text-c">
				<td>本周</td>
				<td>2</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr class="text-c">
				<td>本月</td>
				<td>2</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
		</tbody>
	</table>
	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">伺服器信息</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width="30%">伺服器IP地址</td>
				<td><?php echo $_smarty_tpl->tpl_vars['serverIp']->value;?>
</td>
			</tr>
			<tr>
				<td>伺服器域名</td>
				<td><?php echo $_smarty_tpl->tpl_vars['domainName']->value;?>
</td>
			</tr>
			<tr>
				<td>伺服器埠口 </td>
				<td><?php echo $_smarty_tpl->tpl_vars['serverPort']->value;?>
</td>
			</tr>
			<tr>
				<td>伺服器Web Software版本 </td>
				<td><?php echo $_smarty_tpl->tpl_vars['serverSoftware']->value;?>
</td>
			</tr>
			<tr>
				<td>伺服器操作系統 </td>
				<td><?php echo $_smarty_tpl->tpl_vars['sysInfo']->value;?>
</td>
			</tr>
			<tr>
				<td>伺服器語言 </td>
				<td><?php echo $_smarty_tpl->tpl_vars['serverLanguage']->value;?>
</td>
			</tr>
			<tr>
				<td>PHP 版本 </td>
				<td><?php echo $_smarty_tpl->tpl_vars['phpVersion']->value;?>
</td>
			</tr>
			<tr>
				<td>PHP位置 </td>
				<td><?php echo $_smarty_tpl->tpl_vars['phpPath']->value;?>
</td>
			</tr>
			<tr>
				<td>文件位置 </td>
				<td><?php echo $_smarty_tpl->tpl_vars['filePath']->value;?>
</td>
			</tr>
		</tbody>
	</table>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p><br>
			Copyright &copy;<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 Redwine All Rights Reserved.</p>
	</div>
</footer>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="static/h-ui/js/H-ui.min.js"><?php echo '</script'; ?>
> 
</body>
</html><?php }
}
