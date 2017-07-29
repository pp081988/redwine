<?php
/* Smarty version 3.1.30, created on 2017-07-29 15:59:12
  from "D:\xampp\htdocs\redwine\tpl\back\product-category-add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597c94b0d92e78_70905500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50831a0fc1c424aa016df53df0d739e87085f8ef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\product-category-add.html',
      1 => 1501063257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c94b0d92e78_70905500 (Smarty_Internal_Template $_smarty_tpl) {
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
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>DD_belatedPNG.fix('*');<?php echo '</script'; ?>
>
<![endif]-->
<title>添加產品分類</title>
</head>
<body>
<div class="page-container">
	<div class="form form-horizontal" id="form-user-add">
		<div class="row cl">
		<p style="margin-bottom: 30px;margin-left: 20px;font-size: 20px;color: #bbb;">--點擊左側分類欄目來決定添加的位置</p>
			<label class="form-label col-xs-4 col-sm-2">
				<span class="c-red">*</span>
				分類名稱：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<input type="text" class="input-text" value="" placeholder="" id="user-name" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">備註：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<textarea name="remark" cols="" rows="" class="textarea"  placeholder="備註說明" onKeyUp="$.Huitextarealength(this,100)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
				<input type="text" class="value id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<input type="text" class="value pId" name="pId" value="<?php echo $_smarty_tpl->tpl_vars['pId']->value;?>
">
				<input type="text" class="value type" name="type" value="product">
			</div>
		</div>
		<div class="row cl">
			<div class="col-9 col-offset-2">
				<input class="btn btn-primary radius" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>

		</div>
	</div>
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
 type="text/javascript" src="lib/jquery.validation/1.14.0/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/jquery.validation/1.14.0/validate-methods.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/jquery.validation/1.14.0/messages_zh.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	$(".btn-primary").click(function(){
		var id = $(".id").val();
		var pId = $(".pId").val();
		var type = $(".type").val();
		var name = $.trim($("input[name=name]").val());
		var remark = $.trim($("textarea[name=remark]").val());
		$.ajax({
			url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'category'),$_smarty_tpl);?>
",
			type:"post",
			data:{id:id,pId:pId,type:type,name:name,remark:remark},
			success:function(data){
				if(data == "10013"){
					alert("請選擇添加的節點位置");
					return false;
				}
				callBackParentFunction();
				//console.log(data);
			}
		})
	})

	function callBackParentFunction(){
		parent.categoryData();
	}
});
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
