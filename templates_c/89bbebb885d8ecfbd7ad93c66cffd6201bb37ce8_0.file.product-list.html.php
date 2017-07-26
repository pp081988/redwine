<?php
/* Smarty version 3.1.30, created on 2017-07-26 15:06:57
  from "D:\xampp\htdocs\redwine\tpl\back\product-list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597893f15ea745_61115293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89bbebb885d8ecfbd7ad93c66cffd6201bb37ce8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\product-list.html',
      1 => 1501074389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597893f15ea745_61115293 (Smarty_Internal_Template $_smarty_tpl) {
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
<title>建材列表</title>
<link rel="stylesheet" href="lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">
<div class="pos-a" style="width:200px;left:0;top:0; bottom:0; height:100%; border-right:1px solid #e5e5e5; background-color:#f5f5f5; overflow:auto;">
	<ul id="treeDemo" class="ztree"></ul>
</div>
<div style="margin-left:200px;">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<div class="text-c"> 日期范围：
			<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate" style="width:120px;">
			<input type="text" name="" id="" placeholder=" 产品名称" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜产品</button>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius addProduct" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加产品</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
		<div class="mt-20">
			<table class="dataTable table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th><input name="" type="checkbox" value=""></th>
						<th>ID</th>
						<th>酒名</th>
						<th>國家</th>
						<th>酒莊名</th>
						<th>葡萄</th>
						<th>年份</th>
						<th>價格</th>
						<th>配對食物</th>
						<th>供應商名稱</th>
					</tr>
				</thead>
				<tbody>
					<!-- <tr class="text-c va-m">
						<td><input name="" type="checkbox" value=""></td>
						<td>001</td>
						<td><a onClick="product_show('哥本哈根橡木地板','product-show.html','10001')" href="javascript:;"><img width="60" class="product-thumb" src="temp/product/Thumb/6204.jpg"></a></td>
						<td class="text-l"><a style="text-decoration:none" onClick="product_show('哥本哈根橡木地板','product-show.html','10001')" href="javascript:;"><img title="国内品牌" src="static/h-ui.admin/images/cn.gif"> <b class="text-success">圣象</b> 哥本哈根橡木地板KS8373</a></td>
						<td class="text-l">原木的外在,实木条形结构,色泽花纹自然,写意;款式设计吸取实木地板的天然去雕饰之美,在视觉上给人带来深邃联想.多款产品适合搭配不同的风格的室内装饰;功能流露出尊贵典雅的大气韵味。</td>
						<td><span class="price">356.0</span> 元/平米</td>
						<td class="td-status"><span class="label label-success radius">已发布</span></td>
						<td class="td-manage"><a style="text-decoration:none" onClick="product_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="product_edit('产品编辑','product-add.html','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="product_del(this,'10001')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr> -->
				</tbody>
			</table>
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
 type="text/javascript" src="lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"><?php echo '</script'; ?>
>
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
$(document).ready(function(){
	$(".addProduct").click(function(){
		if($(this).attr("selected") != "selected"){
			alert("請選擇要添加的欄目");
		}
	})
	categoryData();
	function dataHandle(){
		var id = "<?php echo $_smarty_tpl->tpl_vars['column']->value;?>
";
		$.ajax({
			url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'productQuery'),$_smarty_tpl);?>
",
			type:"post",
			data:{id:id},
			success:function(data){
				var dataObj = eval('(' + data + ')');
				var article_type;
				var allowcomments;
				var display;
				var update_time;
				var displaySwitch;
				for(i=0;i<dataObj.length;i++){
					switch(dataObj[i]['article_type']){
						case "0":article_type = "產品資訊";break;
						case "1":article_type = "幫助說明";break;
					}
					switch(dataObj[i]['allowcomments']){
						case "0":allowcomments = "×";break;
						case "1":allowcomments = "√";break;
					}
					switch(dataObj[i]['display']){
						case "0":display = '<span class="label label-success radius" style="background-color: #dd514c;">待發佈</span>';displaySwitch = '<a style="text-decoration:none" onClick="article_start(this,'+dataObj[i]['id']+')" href="javascript:;" title="發佈"><i class="Hui-iconfont">&#xe603;</i></a>';break;
						case "1":display = '<span class="label label-success radius">已發佈</span>';displaySwitch = '<a style="text-decoration:none" onclick="article_stop(this,'+dataObj[i]['id']+')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>';break;
						case "2":display = '<span class="label label-success radius" style="background-color: #a0a0a0;">已下架</span>';displaySwitch = '<a style="text-decoration:none" onClick="article_start(this,'+dataObj[i]['id']+')" href="javascript:;" title="發佈"><i class="Hui-iconfont">&#xe603;</i></a>';break;
					}
					if(dataObj[i]['update_time'] == null){
						update_time = "無";
					}else{
						update_time = dataObj[i]['update_time'];
					}
					var str = '\
					<tr class="text-c">\
						<td><input type="checkbox" value="" name=""></td>\
						<td>'+dataObj[i]['id']+'</td>\
						<td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit("查看","article-zhang.html","10001")" title="查看">'+dataObj[i]['article_title']+'</u></td>\
						<td>'+article_type+'</td>\
						<td>'+dataObj[i]['article_sort']+'</td>\
						<td>'+dataObj[i]['keywords']+'</td>\
						<td>'+dataObj[i]['create_time']+'</td>\
						<td>'+update_time+'</td>\
						<td>'+dataObj[i]['author']+'</td>\
						<td>'+dataObj[i]['creator']+'</td>\
						<td>'+allowcomments+'</td>\
						<td class="td-status">'+display+'</td>\
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
			}
		})
	}
	//dataHandle();
});

function categoryData(){
	$.ajax({
		url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'categoryData'),$_smarty_tpl);?>
",
		type:"post",
		data:{},
		success:function(structure){
				var structureObj = eval('(' + structure + ')');
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
						var id = treeNode.id;
						var pId = treeNode.pId;
						var categoryName = treeNode.name;
						if(pId == ""){pId=0};
						$(".addProduct").attr("selected","selected");
						$(".addProduct").click(function(){
							product_add('添加產品--'+categoryName,'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'productAddPage'),$_smarty_tpl);?>
&category_id='+id+'&category_pId='+pId);
						})
					}
				}
			};
			
			var zNodes =structureObj;
					
			var code;
					
			function showCode(str) {
				if (!code) code = $("#code");
				code.empty();
				code.append("<li>"+str+"</li>");
			}
		
			var t = $("#treeDemo");
			t = $.fn.zTree.init(t, setting, zNodes);
			demoIframe = $("#testIframe");
		}
	})
}




$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
	]
});
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-查看*/
function product_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-审核*/
function product_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="product_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="product_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*产品-下架*/
function product_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*产品-发布*/
function product_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布!',{icon: 6,time:1000});
	});
}

/*产品-申请上线*/
function product_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

/*产品-编辑*/
function product_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*产品-删除*/
function product_del(obj,id){
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
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
