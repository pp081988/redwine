<?php
/* Smarty version 3.1.30, created on 2017-08-04 10:15:05
  from "D:\xampp\htdocs\redwine\tpl\back\product-matching-select-iframe.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5983d8a963b6e4_09070108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41fb13a1d5635bb4857d2462d31c1c7a332f5da1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\product-matching-select-iframe.html',
      1 => 1501812902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5983d8a963b6e4_09070108 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--_meta 作为公共模版分离出去-->
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
<link rel="stylesheet" href="lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<!--[if IE 6]>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>DD_belatedPNG.fix('*');<?php echo '</script'; ?>
>
<![endif]-->
<!--/meta 作为公共模版分离出去-->
<style>
	html,body{
		overflow: auto!important;
	}
	.ztree{
		float: left;
	}
	article{
		float: right;
		width: 75%;
	}
	table,tr,th,td{
		font-size: 12px!important;
	}
	tr,th{
		height: 15px!important;
	}
	th{
		padding: 2px!important;
	}
	.btn{
		height: 25px!important;
    	line-height: 15px!important;
    	font-size: 10px;
	}
</style>
<title>選擇產品</title>
</head>
<body>
<div>
	<ul id="treeDemo" class="ztree"></ul>
</div>
<div class="mt-20">
	<table class="dataTable table table-border table-bordered table-bg table-hover table-sort">
		<thead>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>
<div style="clear: both;float: right;margin-top: 20px;">
	<button class="btn btn-success-outline radius addProduct">確認選擇</button>
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
 type="text/javascript" src="lib/My97DatePicker/4.8/WdatePicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/jquery.validation/1.14.0/jquery.validate.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="lib/jquery.validation/1.14.0/validate-methods.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="lib/datatables/1.10.0/jquery.dataTables.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="lib/jquery.validation/1.14.0/messages_zh.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	// $('.skin-minimal input').iCheck({
	// 	checkboxClass: 'icheckbox-blue',
	// 	radioClass: 'iradio-blue',
	// 	increaseArea: '20%'
	// });
	
	$("#form-member-add").validate({
		rules:{
			username:{
				required:true,
				minlength:2,
				maxlength:16
			},
			sex:{
				required:true,
			},
			mobile:{
				required:true,
				isMobile:true,
			},
			email:{
				required:true,
				email:true,
			},
			uploadfile:{
				required:true,
			},
			
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			//$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			//parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});

	initTable();
	getData();

	$(".btn").click(function(){
		var IDs = "";
		var NAMEs = "";
		var type = "<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
";
		$("input[type='checkbox']").each(function(){
			if($(this).is(':checked')){
				IDs += ","+$(this).val();
				NAMEs += ","+$(this).attr("name");
			}
		});
		callBackParentfunction(IDs,NAMEs,type);
	});
});

function getData(){
	var type = "<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
";
	var id = "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
";
	$(".dataTable tbody").html("");
	$.ajax({
		url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'productMatchingSelectQuery'),$_smarty_tpl);?>
",
		type:"post",
		data:{id:id,type:type},
		success:function(data){
			if(data != ""){
				var type = "<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
";
				var dataObj = eval('(' + data + ')');
				switch(type){
					case 'selectFood':
					var thead = '<tr class="text-c">\
								<th>選擇</th>\
								<th>ID</th>\
								<th>菜名</th>\
								<th>國家</th>\
								<th>菜式</th>\
								</tr>';
					$(".dataTable thead").html(thead);
					for(i=0;i<dataObj.length;i++){
						str = '\
								<tr class="text-c">\
									<td><input type="checkbox" value="'+dataObj[i]['id']+'" name="'+dataObj[i]['name']+'"></td>\
									<td>'+dataObj[i]['id']+'</td>\
									<td>'+dataObj[i]['name']+'</td>\
									<td>'+dataObj[i]['origin']+'</td>\
									<td>'+dataObj[i]['type']+'</td>\
								</tr>';
						$(".dataTable tbody").append(str);
					}
					break;
					case 'selectWine':
					var thead = '<tr class="text-c">\
								<th>選擇</th>\
								<th>ID</th>\
								<th>酒名</th>\
								<th>國家(產地)</th>\
								<th>酒莊</th>\
								<th>葡萄</th>\
								<th>年份</th>\
								</tr>';
					$(".dataTable thead").html(thead);
					for(i=0;i<dataObj.length;i++){
						str = '\
								<tr class="text-c">\
									<td><input type="checkbox" value="'+dataObj[i]['id']+'" name="'+dataObj[i]['name']+'"></td>\
									<td>'+dataObj[i]['id']+'</td>\
									<td>'+dataObj[i]['name']+'</td>\
									<td>'+dataObj[i]['origin']+'</td>\
									<td>'+dataObj[i]['winery']+'</td>\
									<td>'+dataObj[i]['grape']+'</td>\
									<td>'+dataObj[i]['year']+'</td>\
								</tr>';
						$(".dataTable tbody").append(str);
					}
					break;
				}
			}else{
				$(".dataTable tbody").html("");
			}
			

			//console.log(data)
			$('.table-sort').dataTable({
				"aaSorting": [[ 1, "desc" ]],//默认第几个排序
				"bStateSave": true,//状态保存
				"pading":false,
				"aoColumnDefs": [
				  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
				  {"orderable":false,"aTargets":[0]}// 不参与排序的列
				]
			});

			var existsSelect = "<?php echo $_smarty_tpl->tpl_vars['existsSelect']->value;?>
";
			if(existsSelect != ""){
				var existsArray = existsSelect.split(",");
				for(i=1;i<existsArray.length;i++){
					$("input[type='checkbox']").each(function(){
						if($(this).attr("value") == existsArray[i]){
							$(this).attr("checked","checked");
							$(this).attr("disabled","disabled");
						}
					});
				}
			}
		}
	});
}

function initTable(){

	
}

function callBackParentfunction(IDs,NAMEs,type){
	parent.getIframeValue(IDs,NAMEs,type);
}
<?php echo '</script'; ?>
> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html><?php }
}
