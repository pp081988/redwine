<?php
/* Smarty version 3.1.30, created on 2017-08-11 10:54:53
  from "D:\xampp\htdocs\redwine\tpl\back\member-del.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598d1c7d0cc857_01098481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9d30c3b1fe718fae1aa7d293172ccc39fe12828' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\member-del.html',
      1 => 1502420090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598d1c7d0cc857_01098481 (Smarty_Internal_Template $_smarty_tpl) {
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
<title>已刪除會員列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首頁 <span class="c-gray en">&gt;</span> 用戶中心 <span class="c-gray en">&gt;</span> 已刪除會員列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 日期範圍：
		<input type="text" name="startTime" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" name="endTime" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;">
		<a onclick="timeSearch();" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</a>
		<a onclick="displayAll();" class="btn btn-default radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 顯示全部</a>
	</div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort tableData">
		<thead>
			<tr class="text-c">
				<!-- <th width="25"><input type="checkbox" name="" value=""></th> -->
				<th width="80">ID</th>
				<th width="100">用戶名</th>
				<th width="40">註冊方式</th>
				<th width="90">刪除時間</th>
				<th width="150">執行者</th>
			</tr>
		</thead>
		<tbody>
			<!-- <tr class="text-c"> -->
				<!-- <td><input type="checkbox" value="1" name=""></td>
				<td>1</td>
				<td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">张三</u></td>
				<td>男</td>
				<td>13000000000</td>
				<td>admin@mail.com</td>
				<td class="text-l">北京市 海淀区</td>
				<td>2014-6-11 11:11:42</td> -->
				<!-- <td class="td-status"><span class="label label-danger radius">已删除</span></td>
				<td class="td-manage"><a style="text-decoration:none" href="javascript:;" onClick="member_huanyuan(this,'1')" title="还原"><i class="Hui-iconfont">&#xe66b;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td> -->
			<!-- </tr> -->
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

/*用户-还原*/
function member_huanyuan(obj,id){
	layer.confirm('确认要还原吗？',function(index){
		
		$(obj).remove();
		layer.msg('已还原!',{icon: 6,time:1000});
	});
}

/*用户-删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
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
		data:{type:"delUserInfo",startTime:startTime,endTime:endTime},
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
					str='\
						<tr class="text-c">\
							\
							<td>'+dataObj[i]['id']+'</td>\
							<td>'+dataObj[i]['username']+'</td>\
							<td>'+dataObj[i]['contact']+'</td>\
							<td>'+dataObj[i]['del_time']+'</td>\
							<td>'+dataObj[i]['admin_username']+'</td>\
							';
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
					  //{"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
					]
				});
			//console.log(data);
		}
	});
}
<?php echo '</script'; ?>
> 
</body>
</html><?php }
}
