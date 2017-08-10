<?php
/* Smarty version 3.1.30, created on 2017-08-10 14:55:55
  from "D:\xampp\htdocs\redwine\tpl\back\member-list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598c57db00e4b0_55607536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1592428571b68305e9fca2aacc07ffd5271decda' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\member-list.html',
      1 => 1502369753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598c57db00e4b0_55607536 (Smarty_Internal_Template $_smarty_tpl) {
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
<title>用戶管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首頁 <span class="c-gray en">&gt;</span> 用戶中心 <span class="c-gray en">&gt;</span> 用戶管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 日期范围：
		<input type="text" name="startTime" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" name="endTime" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;">
		<a onclick="timeSearch();" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</a>
		<a onclick="displayAll();" class="btn btn-default radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 顯示全部</a>
	</div>
	<!-- <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span> <span class="r">共有数据：<strong>88</strong> 条</span>
	</div> -->
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort tableData">
		<thead>
			<tr class="text-c">
				<th><input type="checkbox" name="" value=""></th>
				<th>ID</th>
				<th>用戶名</th>
				<th>註冊方式</th>
				<th>性別</th>
				<th>年齡</th>
				<th>酒齡</th>
				<th>註冊時間</th>
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

/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*用户-停用*/
function member_stop(obj,id,username){
	layer.confirm('是否停用賬戶： '+username,function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'siteUser'),$_smarty_tpl);?>
',
			data:{type:"userDeactivat",operation:"stop",id:id},
			success: function(data){
				if(data == "done"){
					$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,'+id+',\''+username+'\')" href="javascript:;" title="啟用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
					$(obj).remove();
					layer.msg('賬戶： '+username+' 已停用',{icon: 5,time:1000});
				}
			},
			error:function(data) {
				alert("連接錯誤");
			},
		});		
	});
}

/*用户-启用*/
function member_start(obj,id,username){
	layer.confirm('是否啟用賬戶： '+username,function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'siteUser'),$_smarty_tpl);?>
',
			data:{type:"userDeactivat",operation:"start",id:id},
			success: function(data){
				if(data == "done"){
					$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,'+id+',\''+username+'\')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已啟用</span>');
					$(obj).remove();
					layer.msg('賬戶： '+username+' 已啟用',{icon: 6,time:1000});
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
function member_del(obj,id,username){
	layer.confirm('是否<span style="color:red;font-size:18px;">刪除</span>賬戶： '+username,function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'siteUser'),$_smarty_tpl);?>
',
			data:{type:"deleteUser",id:id},
			success: function(data){
				if(data == "done"){
					$(obj).parents("tr").remove();
					layer.msg('賬戶： '+username+' 已刪除',{icon:1,time:1000});
				}
			},
			error:function(data) {
				alert("連接錯誤");
			},
		});		
	});
}

var searchStatus = 0;
function timeSearch(){
	var startTime = $("input[name=startTime]").val();
	var endTime = $("input[name=endTime]").val();
	if(startTime != "" && endTime != ""){
		getData(startTime,endTime);
		searchStatus = 1;
	}
}

function displayAll(){
	if(searchStatus == 1){
		$("input[name=startTime]").val("");
		$("input[name=endTime]").val("");
		getData();
	}
	searchStatus = 0;
}

function getData(startTime,endTime){
	$.ajax({
		url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'siteUser'),$_smarty_tpl);?>
",
		type:"post",
		data:{type:"getAllUsers",startTime:startTime,endTime:endTime},
		success:function(data){
			if(data != ""){
				if($('.table-sort').hasClass('dataTable')) {
					$(".tableData tbody").html("");
					dttable = $('.table-sort').dataTable();
					dttable.fnClearTable(); //清空一下table
					dttable.fnDestroy(); //还原初始化了的datatable
				}
				var dataObj = eval('(' + data + ')');
				for(i=0;i<dataObj.length;i++){
					var deactivat = 'onClick="member_stop(this,'+dataObj[i]['id']+',\''+dataObj[i]['username']+'\')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;';
					var is_vaild;
					if(dataObj[i]['activate']['is_vaild'] == "1"){
						is_vaild = '<span class="label label-success radius">已激活</span>';
					}else{
						is_vaild = '<span class="label label-warning radius">未驗證</span>';
					}
					if(dataObj[i]['deactivat'] == "1"){
						is_vaild = '<span class="label label-defaunt radius">已停用</span>';
						deactivat = 'onClick="member_start(this,'+dataObj[i]['id']+',\''+dataObj[i]['username']+'\')" href="javascript:;" title="啟用"><i class="Hui-iconfont">&#xe6e1;;';
					}
					str='\
						<tr class="text-c">\
							<td><input type="checkbox" value="1" name=""></td>\
							<td>'+dataObj[i]['id']+'</td>\
							<td>'+dataObj[i]['username']+'</td>\
							<td>'+dataObj[i]['email']+dataObj[i]['phone']+'</td>\
							<td>'+dataObj[i]['sex']+'</td>\
							<td>'+dataObj[i]['age']+'</td>\
							<td>'+dataObj[i]['years_of_drinking']+'</td>\
							<td>'+dataObj[i]['create_time']+'</td>\
							<td class="td-status">'+is_vaild+'</td>\
							<td class="td-manage"><a style="text-decoration:none" '+deactivat+'</i></a><a title="编辑" href="javascript:;" onclick="member_edit("编辑","member-add.html","4","","510")" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a><a title="删除" href="javascript:;" onclick="member_del(this,'+dataObj[i]['id']+',\''+dataObj[i]['username']+'\')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>\
						</tr>';
					$(".tableData tbody").append(str);
				}

				$('.table-sort').dataTable({
					"aaSorting": [[ 1, "desc" ]],//默认第几个排序
					"bStateSave": true,//状态保存
					"bRetrieve": true,
					"bDestory": true,
					"aoColumnDefs": [
					  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
					  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
					]
				});
			}
			//console.log(data);
		}
	});
}
<?php echo '</script'; ?>
> 
</body>
</html><?php }
}
