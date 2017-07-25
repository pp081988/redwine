<?php
/* Smarty version 3.1.30, created on 2017-07-25 15:26:46
  from "D:\xampp\htdocs\redwine\tpl\back\product-category.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59774716d7f950_74579632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3242dd118442c1a39a77d1fc7d3ff53c750187c1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\product-category.html',
      1 => 1500989191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59774716d7f950_74579632 (Smarty_Internal_Template $_smarty_tpl) {
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
<link rel="stylesheet" href="lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<!--[if IE 6]>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>DD_belatedPNG.fix('*');<?php echo '</script'; ?>
>
<![endif]-->
<title>产品分类</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品分类 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<table class="table">
	<tr>
		<td width="200" class="va-t"><ul id="treeDemo" class="ztree"></ul></td>
		<td class="va-t"><iframe ID="categoryIframe" Name="categoryIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=390px SRC="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'product-category-add'),$_smarty_tpl);?>
"></iframe></td>
		
	</tr>
</table>
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
 type="text/javascript" src="lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript">
var setting = {
	view: {
		dblClickExpand: false,
		showLine: false,
		selectedMulti: false
	},
	data: {
		simpleData: {
			enable:true,
			idKey: "id",
			pIdKey: "pId",
			rootPId: ""
		}
	},
	callback: {
		beforeClick: function(treeId, treeNode) {
			//var zTree = $.fn.zTree.getZTreeObj("tree");
			// if (treeNode.isParent) {
			// 	// zTree.expandNode(treeNode);
				
			// } else {
			// // 	demoIframe.attr("src",treeNode.file + ".html");
			// // 	return true;
			// }
			// var btn = '<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pagefIndex','page'=>"product-category-add"),$_smarty_tpl);?>
" target="classfyIframe" id="classfyIframeRefresh">';
			// $(".table").append(btn);
			// $("#classfyIframeRefresh").click();
			//window.location.href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>"product-category"),$_smarty_tpl);?>
';
			var id = treeNode.id;
			var pId = treeNode.pId;
			if(pId == ""){pId=0};
			$("#categoryIframe").attr("SRC",'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'productCategoryIfame'),$_smarty_tpl);?>
&id='+id+'&pId='+pId);
		}
	}
};

var zNodes =[
	{ id:1, pId:0, name:"一级分类", open:true},
	{ id:11, pId:1, name:"二级分类"},
	{ id:110, pId:11, name:"分类"},
	{ id:112, pId:11, name:"三级分类"},
	{ id:113, pId:11, name:"三级分类"},
	{ id:114, pId:11, name:"三级分类"},
	{ id:115, pId:11, name:"三级分类"},
	{ id:12, pId:1, name:"二级分类 1-2"},
	{ id:121, pId:12, name:"三级分类 1-2-1"},
	{ id:122, pId:12, name:"三级分类 1-2-2"},
	{ id:2, pId:0, name:"你媽的", open:true},
	{ id:21, pId:2, name:"二级你吗"},
	{ id:211, pId:21, name:"三级你吗"}
];
		
var code;
		
function showCode(str) {
	if (!code) code = $("#code");
	code.empty();
	code.append("<li>"+str+"</li>");
}
		
$(document).ready(function(){
	var t = $("#treeDemo");
	t = $.fn.zTree.init(t, setting, zNodes);
	demoIframe = $("#testIframe");
	//demoIframe.on("load", loadReady);
	//var zTree = $.fn.zTree.getZTreeObj("tree");
	//zTree.selectNode(zTree.getNodeByParam("id",'11'));
});

function refresh(){
	window.location.reload;
}
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
