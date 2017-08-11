<?php
/* Smarty version 3.1.30, created on 2017-08-11 15:48:37
  from "D:\xampp\htdocs\redwine\tpl\back\banner-list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598d61558d6087_12797581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c546f5f0eb938b82a3d064a2643ba35c1662b7b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\banner-list.html',
      1 => 1502437713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598d61558d6087_12797581 (Smarty_Internal_Template $_smarty_tpl) {
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
<title>Banner管理</title>
<style>
	.banner{
		width: 150px;
	}
</style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首頁 <span class="c-gray en">&gt;</span> 網站信息 <span class="c-gray en">&gt;</span> Banner管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a class="btn btn-primary radius" onclick="bannerAdd();" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加Banner</a></span>  </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort tableData">
		<thead>
			<tr class="text-c">
				<th>ID</th>
				<th>圖片</th>
				<th>標題</th>
				<th>鏈接</th>
				<th>創建時間</th>
				<th>創建者</th>
				<th>狀態</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
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
 type="text/javascript" src="lib/My97DatePicker/4.8/WdatePicker.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="lib/datatables/1.10.0/jquery.dataTables.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="lib/laypage/1.2/laypage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	getData();
});

function bannerAdd(){
	layer.open({
     	type: 2,
     	title: '添加Banner',
     	shadeClose: true,
     	shade: false,
     	maxmin: true, //开启最大化最小化按钮
     	area: ['70%', '90%'],
     	content: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'pageIndex','page'=>'banner-add'),$_smarty_tpl);?>
"
    });
}

/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*用户-停用*/
function member_stop(obj,id){
	layer.confirm('是否下線該Banner',function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'banner'),$_smarty_tpl);?>
',
			data:{type:"disSwitch",operation:"off",id:id},
			success: function(data){
				console.log(data)
				if(data == 1){
					$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,'+id+')" href="javascript:;" title="發佈"><i class="Hui-iconfont">&#xe6e1;</i></a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下線</span>');
					$(obj).remove();
					layer.msg('已下線。',{icon: 5,time:1000});
				}
			},
			error:function(data) {
				alert("連接錯誤");
			},
		});	
	});
}

/*用户-启用*/
function member_start(obj,id){
	layer.confirm('是否發佈該Banner',function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'banner'),$_smarty_tpl);?>
',
			data:{type:"disSwitch",operation:"on",id:id},
			success: function(data){
				if(data == 1){
					$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,'+id+')" href="javascript:;" title="下線"><i class="Hui-iconfont">&#xe631;</i></a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已發佈</span>');
					$(obj).remove();
					layer.msg('已發佈。',{icon: 6,time:1000});
				}
			},
			error:function(data) {
				alert("連接錯誤");
			},
		});
	});
}
/*用户-编辑*/
function member_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*密码-修改*/
function change_password(title,url,id,w,h){
	layer_show(title,url,w,h);	
}
/*用户-删除*/
function member_del(obj,id){
	layer.confirm('是否刪除該Banner',function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'banner'),$_smarty_tpl);?>
',
			data:{type:"delBanner",id:id},
			success: function(data){
				if(data == 1){
					$(obj).parents("tr").remove();
					layer.msg('已刪除。',{icon:1,time:1000});
				}
			},
			error:function(data) {
				alert("連接錯誤");
			},
		});		
	});
}

function getData(){
	$.ajax({
		url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'banner'),$_smarty_tpl);?>
",
		type:"post",
		data:{type:"allBanner"},
		success:function(data){
			if($('.table-sort').hasClass('dataTable')) {
				$(".tableData tbody").html("");
				dttable = $('.table-sort').dataTable();
				dttable.fnClearTable(); //清空一下table
				dttable.fnDestroy(); //还原初始化了的datatable
			}
			if(data != "null"){
				var dataObj = eval('(' + data + ')');
				for(i=0;i<dataObj.length;i++){
					var deactivat = 'onClick="member_stop(this,'+dataObj[i]['id']+')" href="javascript:;" title="下線"><i class="Hui-iconfont">&#xe631;';
					var is_vaild;
					if(dataObj[i]['is_vaild'] == "1"){
						is_vaild = '<span class="label label-success radius">已發佈</span>';
					}else{
						is_vaild = '<span class="label label-warning radius">未發佈</span>';
						deactivat = 'onClick="member_start(this,'+dataObj[i]['id']+')" href="javascript:;" title="發佈"><i class="Hui-iconfont">&#xe6e1;';
					}
					str='\
						<tr class="text-c">\
							<td>'+dataObj[i]['id']+'</td>\
							<td><img class="banner" src="'+dataObj[i]['image']+'"></td>\
							<td>'+dataObj[i]['title']+'</td>\
							<td>'+dataObj[i]['link']+'</td>\
							<td>'+dataObj[i]['create_time']+'</td>\
							<td>'+dataObj[i]['admin_username']+'</td>\
							<td class="td-status">'+is_vaild+'</td>\
							<td class="td-manage"><a style="text-decoration:none" '+deactivat+'</i></a><a title="删除" href="javascript:;" onclick="member_del(this,'+dataObj[i]['id']+')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>\
						</tr>';
					$(".tableData tbody").append(str);
				}
			}
			$('.table-sort').dataTable({
				"aaSorting": [[ 1, "desc" ]],//默认第几个排序
				"bStateSave": true,//状态保存
				"bRetrieve": true,
				"bDestory": true,
				"aoColumnDefs": [
				  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
				  {"orderable":false,"aTargets":[0,6]}// 制定列不参与排序
				]
			});
			//console.log(data);
		}
	});
}

function success(){
	alert("執行完成");
	location.reload();
}
<?php echo '</script'; ?>
> 
</body>
</html><?php }
}
