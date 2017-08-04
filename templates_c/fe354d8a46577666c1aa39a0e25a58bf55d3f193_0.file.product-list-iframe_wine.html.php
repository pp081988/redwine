<?php
/* Smarty version 3.1.30, created on 2017-08-04 10:15:14
  from "D:\xampp\htdocs\redwine\tpl\back\product-list-iframe_wine.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5983d8b2ac9910_56130954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe354d8a46577666c1aa39a0e25a58bf55d3f193' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\product-list-iframe_wine.html',
      1 => 1501811442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5983d8b2ac9910_56130954 (Smarty_Internal_Template $_smarty_tpl) {
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
<style>
	html,body{
		overflow: auto!important;
	}
	.addMatching{
		font-size: 12px;
	}
</style>
<title>產品列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首頁 <span class="c-gray en">&gt;</span> 產品管理 <span class="c-gray en">&gt;</span> 產品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<div class="text-c"> 日期范围：
			<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate" style="width:120px;">
			<input type="text" name="" id="" placeholder=" 产品名称" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜产品</button>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量刪除</a> <a class="btn btn-primary radius addProduct" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加產品</a></span> <span class="r">共有數據：<strong class="rows">0</strong> 條</span> </div>
		<div class="mt-20">
			<table class="dataTable table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th><input name="" type="checkbox" value=""></th>
						<th>ID</th>
						<th>酒名</th>
						<th>產地</th>
						<th>酒莊名</th>
						<th>葡萄</th>
						<th>年份</th>
						<th>價格</th>
						<th>供應商</th>
						<th>操作</th>
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

function productDetail(name,id){
	parent.product_add('產品詳情--'+name,'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'productDetial'),$_smarty_tpl);?>
&id='+id+'&product=wine');
}

$(function(){
	var category_id = "<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
";
	var category_pId = "<?php echo $_smarty_tpl->tpl_vars['category_pId']->value;?>
";
	var category_name = "<?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
";

	$(".addProduct").click(function(){
		if(category_id == "" || category_pId == ""){
			alert("請選擇要添加到分類欄目的位置");
			return false;
		}
		parent.product_add('添加產品--'+category_name,'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'productAddPage'),$_smarty_tpl);?>
&category_id='+category_id+'&category_pId='+category_pId);
	})

	function dataHandle(category_id,category_pId){
		$.ajax({
			url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'productQuery'),$_smarty_tpl);?>
",
			type:"post",
			data:{category_id:category_id,category_pId:category_pId},
			success:function(data){
				$PRICE = Array("<$50","$51-$100","$101-$150","$151-$200","$201-$300","$301-$400",">$400");
				if(data != ""){
					var dataObj = eval('(' + data + ')');
					$(".rows").html(dataObj.length);
				for(i=0;i<dataObj.length;i++){
					var str = '\
					<tr class="text-c">\
						<td><input type="checkbox" value="" name=""></td>\
						<td>'+dataObj[i]['id']+'</td>\
						<td class="text-l"><a style="text-decoration:underline" onclick="productDetail(\''+dataObj[i]['name']+'\',\''+dataObj[i]['id']+'\')" class="productName" href="javascript:;">'+dataObj[i]['name']+'</a></td>\
						<td>'+dataObj[i]['origin']+'</td>\
						<td>'+dataObj[i]['winery']+'</td>\
						<td>'+dataObj[i]['grape']+'</td>\
						<td>'+dataObj[i]['year']+'</td>\
						<td>'+$PRICE[dataObj[i]['price']]+'</td>\
						<td>'+dataObj[i]['supplier']+'</td>\
						<td class="f-14 td-manage"><a class="addMatching" onclick="addMatching('+dataObj[i]['id']+','+dataObj[i]['category_id']+',\''+dataObj[i]['name']+'\')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加配對</a><a style="text-decoration:none" class="ml-5" data-title="編輯" data-href="<?php ob_start();
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
			}else{
					$(".dataTable tbody").html("");
				}
				// productDetail(id);
				$('.table-sort').dataTable({
					"aaSorting": [[ 1, "desc" ]],//默认第几个排序
					"bStateSave": true,//状态保存
					"pading":false,
					"aoColumnDefs": [
					  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
					  {"orderable":false,"aTargets":[0,9]}// 不参与排序的列
					]
				});
//console.log(data);
				
			}
		})
	}
dataHandle(category_id,category_pId);
})

function addMatching(id,category_id,name){
	parent.product_add('添加配對','<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'productMatchingAdd','type'=>'wine'),$_smarty_tpl);?>
&id='+id+'&category_id'+category_id+'&name='+name);
}


<?php echo '</script'; ?>
> 
</body>
</html><?php }
}
