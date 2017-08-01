<?php
/* Smarty version 3.1.30, created on 2017-08-01 14:44:33
  from "D:\xampp\htdocs\redwine\tpl\back\forum-chat-list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598023512bcba8_91042517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b203d03e9da97522db316ffa56f92bbaf2d59f2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\forum-chat-list.html',
      1 => 1501569846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598023512bcba8_91042517 (Smarty_Internal_Template $_smarty_tpl) {
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
<title>資訊列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首頁 <span class="c-gray en">&gt;</span> 資訊管理 <span class="c-gray en">&gt;</span> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
	 <span class="select-box inline">
		<select name="" class="select">
			<option value="0">全部分类</option>
			<option value="1">分类一</option>
			<option value="2">分类二</option>
		</select>
		</span> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate" style="width:120px;">
		<input type="text" name="" id="" placeholder=" 资讯名称" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span>  </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive dataTable">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th>ID</th>
					<th>酒名</th>
					<th>食物</th>
					<th>短評</th>
					<th>創建者</th>
					<th>創建時間</th>
					<th>審核狀態</th>
					<th>審核者</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<!-- <tr class="text-c">
					<td><input type="checkbox" value="" name=""></td>
					<td>10001</td>
					<td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看">资讯阿斯利康打飞机撒旦法立刻接拉萨打飞机标题</u></td>
					<td>行业动态</td>
					<td>H-ui</td>
					<td>wocao</td>
					<td>2014-6-11 11:11:42</td>
					<td>21212</td>
					<td class="td-status"><span class="label label-success radius">已发布</span></td>
					<td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','article-add.html','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'10001')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<tr class="text-c">
					<td><input type="checkbox" value="" name=""></td>
					<td>10002</td>
					<td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10002')" title="查看">资讯标题</u></td>
					<td>行业动态</td>
					<td>H-ui</td>
					<td>nimei</td>
					<td>2014-6-11 11:11:42</td>
					<td>21212</td>
					<td class="td-status"><span class="label label-success radius">草稿</span></td>
					<td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_shenhe(this,'10001')" href="javascript:;" title="审核">审核</a> <a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','article-add.html','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'10001')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr> -->
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


/*资讯-添加*/
function article_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-编辑*/
function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*资讯-删除*/
function article_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		var column = '<?php echo $_smarty_tpl->tpl_vars['column']->value;?>
';
		$.ajax({
			type: 'POST',
			url: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'articleDelete'),$_smarty_tpl);?>
',
			data:{column:column,id:id},
			success: function(data){
				if(data == "done"){
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
				}
			}
		});		
	});
}

/*资讯-审核*/
function article_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过','取消'], 
		shade: false,
		closeBtn: 0
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}

function displaySwitch(id,act){
	$.ajax({
		url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'displaySwitch'),$_smarty_tpl);?>
",
		type:"post",
		data:{id:id,act:act,column:"<?php echo $_smarty_tpl->tpl_vars['column']->value;?>
"},
		success:function(data){
			if(data == "ok"){
				return "ok";
			}
		}
	})
}

/*资讯-下架*/
function article_stop(obj,id){
	layer.confirm('確認要下架嗎？',function(index){
		displaySwitch(id,"2");
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="發佈"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*资讯-发布*/
function article_start(obj,id){
	layer.confirm('確認要發佈嗎？',function(index){
		displaySwitch(id,"1");
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,'+id+')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已發佈</span>');
		$(obj).remove();
		layer.msg('已發佈!',{icon: 6,time:1000});
	});
}
/*资讯-申请上线*/
function article_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

$(function(){
	var timestamp = Date.parse(new Date());
        timestamp = timestamp / 1000;
	function dataHandle(){
		var id = "<?php echo $_smarty_tpl->tpl_vars['column']->value;?>
";
		$.ajax({
			url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'forum_matching_data','theme'=>'forum_chat'),$_smarty_tpl);?>
",
			type:"post",
			data:{id:id},
			success:function(data){
				var dataObj = eval('(' + data + ')');
				var display;
				var update_time;
				var displaySwitch;
				for(i=0;i<dataObj.length;i++){
					switch(dataObj[i]['display']){
						case "0":display = '<span class="label label-success radius" style="background-color: #dd514c;">待審核</span>';displaySwitch = '<a style="text-decoration:none" onClick="article_start(this,'+dataObj[i]['id']+')" href="javascript:;" title="審核"><i class="Hui-iconfont">&#xe603;</i></a>';break;
						case "1":display = '<span class="label label-success radius">已審核</span>';displaySwitch = '<a style="text-decoration:none" onclick="article_stop(this,'+dataObj[i]['id']+')" href="javascript:;" title="下線"><i class="Hui-iconfont">&#xe6de;</i></a>';break;
						case "2":display = '<span class="label label-success radius" style="background-color: #a0a0a0;">已下線</span>';displaySwitch = '<a style="text-decoration:none" onClick="article_start(this,'+dataObj[i]['id']+')" href="javascript:;" title="審核"><i class="Hui-iconfont">&#xe603;</i></a>';break;
					}
					var str = '\
					<tr class="text-c">\
					<td><input type="checkbox" value="" name=""></td>\
					<td>'+dataObj[i]['id']+'</td>\
					<td>'+dataObj[i]['wine_name']+'</td>\
					<td>'+dataObj[i]['food_name']+'</td>\
					<td>'+dataObj[i]['short_comment']+'</td>\
					<td>'+dataObj[i]['username']+'</td>\
					<td>'+translateTime(dataObj[i]['create_time'])+'</td>\
					<td class="td-status">'+display+'</td>\
					<td>'+dataObj[i]['display_by']+'</td>\
					<td class="f-14 td-manage">'+displaySwitch+' <a style="text-decoration:none" class="ml-5" data-title="編輯" data-href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['column']->value;
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'articleDataEdit','columnId'=>$_prefixVariable1,'title'=>$_prefixVariable2),$_smarty_tpl);?>
&articleId='+dataObj[i]['id']+'" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'+dataObj[i]['id']+')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>\
					</tr>'
					$(".dataTable tbody").append(str);
				}
				$('.table-sort').dataTable({
					"aaSorting": [[ 1, "desc" ]],//默认第几个排序
					"bStateSave": true,//状态保存
					"pading":false,
					"aoColumnDefs": [
					  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
					  {"orderable":false,"aTargets":[0,8]}// 不参与排序的列
					]
				});
				//console.log(data);
			}
		})
	}
	dataHandle();

	function translateTime(time){
	    var res = timestamp - time;
	    if(res < 3600){
	        return Math.round(res/60)+"分鐘前";
	    }
	    if(res <= 86400){
	        return Math.round(res/60/60)+"小时前";
	    }
	    var days = Math.floor(Math.round(res/60/60) / 24);
	    if(days <= 30){
	        return days+"天前";
	    }
	    var date = new Date(res);
	    Y = date.getFullYear() + '年';
	    M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '月';
	    D = date.getDate() + '日 ';
	    h = date.getHours() + ':';
	    m = date.getMinutes() + ':';
	    s = date.getSeconds();
	    return Y+M+D+h+m+s;
	}
})



<?php echo '</script'; ?>
> 
</body>
</html><?php }
}
