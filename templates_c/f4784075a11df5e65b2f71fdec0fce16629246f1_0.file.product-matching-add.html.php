<?php
/* Smarty version 3.1.30, created on 2017-08-04 10:47:56
  from "D:\xampp\htdocs\redwine\tpl\back\product-matching-add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5983e05c38cff2_16582707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4784075a11df5e65b2f71fdec0fce16629246f1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\product-matching-add.html',
      1 => 1501814871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5983e05c38cff2_16582707 (Smarty_Internal_Template $_smarty_tpl) {
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
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/common.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/index.css" />
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
	.match {
     padding-left: 0;
     overflow: hidden;
    }
    .match li {
     float: left;
     list-style: none;
     width: 27px;
     height: 27px;
     background: url(images/star.gif)
    }
    .match li a {
     display: block;
     width: 100%;
     padding-top: 27px;
     overflow: hidden;
    }
    .match li.light {
     background-position: 0 -29px;
    }
    .value{
    	display: none;
    }
</style>
<title>添加配對</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'productMatching'),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data">
		<input class="mode" type="text" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
">
		<input class="theme" type="text" name="theme" value="<?php echo $_smarty_tpl->tpl_vars['columnId']->value;?>
">
		<input class="articleId" type="text" name="articleId" value="<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>酒名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['wineName']->value;?>
" placeholder="" id="wineName" name="wine_name">
				<input type="text" name="wine_id" class="value" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>菜名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['foodName']->value;?>
" placeholder="" id="foodName" name="food_name">
				<input type="text" name="food_id" class="value" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>建議類型：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="suggest_type" class="select">
					<option value="0">酒商建議</option>
					<option value="1">品酒師建議</option>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">建議方名稱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="articletitle2" name="suggest_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">絕配度：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<ul class="match">
    				<li class="light star"><a href="javascript:;">1</a></li>
    				<li class="star"><a href="javascript:;">2</a></li>
    				<li class="star"><a href="javascript:;">3</a></li>
    				<li class="star"><a href="javascript:;">4</a></li>
    				<li class="star"><a href="javascript:;">5</a></li>
    			</ul>
			</div>
			<input type="text" name="matching" class="value">
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">內容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:100%;height:400px;"><?php echo '</script'; ?>
>
				<textarea name="content" id="editorCont"></textarea>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius submit" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
				<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</article>

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
> <!--/_footer /作为公共模版分离出去-->

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
 type="text/javascript" src="lib/jquery.validation/1.14.0/messages_zh.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/webuploader/0.1.5/webuploader.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="lib/ueditor/1.4.3/ueditor.config.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="lib/ueditor/1.4.3/ueditor.all.min.js"> <?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/imgUp.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	var num=finalnum = tempnum= 0;
  	var lis = $(".star");
  	//num:传入点亮星星的个数
  	//finalnum:最终点亮星星的个数
  	//tempnum:一个中间值
  	function fnShow(num) {
  	 finalnum= num || tempnum;//如果传入的num为0，则finalnum取tempnum的值
  	 for (var i = 0; i < lis.length; i++) {
  	  lis[i].className = i < finalnum? "light" : "";//点亮星星就是加class为light的样式
  	 }
  	}
  	for (var i = 1; i <= lis.length; i++) {
  	 lis[i - 1].index = i;
  	 lis[i - 1].onmouseover = function() { //鼠标经过点亮星星。
  	  fnShow(this.index);//传入的值为正，就是finalnum
  	 }
  	 lis[i - 1].onmouseout = function() { //鼠标离开时星星变暗
  	  fnShow(0);//传入值为0，finalnum为tempnum,初始为0
  	 }
  	 lis[i - 1].onclick = function() { //鼠标点击,同时会调用onmouseout,改变tempnum值点亮星星
  	  tempnum= this.index;
  	  $("input[name=matching]").val($(this).find("a").html());
  	 }
  	}

	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	//表单验证
	$("#form-article-add").validate({
		rules:{
			articletitle:{
				required:true,
			},
			articletitle2:{
				required:true,
			},
			articlecolumn:{
				required:true,
			},
			articletype:{
				required:true,
			},
			articlesort:{
				required:true,
			},
			keywords:{
				required:true,
			},
			abstract:{
				required:true,
			},
			author:{
				required:true,
			},
			// sources:{
			// 	required:true,
			// },
			// allowcomments:{
			// 	required:true,
			// },
			commentdatemin:{
				required:false,
			},
			commentdatemax:{
				required:false,
			},

		},
		onkeyup:false,
		focusCleanup:true
		// success:"valid",
		// submitHandler:function(form){
		// 	//$(form).ajaxSubmit();
		// 	var index = parent.layer.getFrameIndex(window.name);
		// 	//parent.$('.btn-refresh').click();
		// 	parent.layer.close(index);
		// }
	});
	
	$list = $("#fileList"),
	$btn = $("#btn-star"),
	state = "pending",
	uploader;

	var uploader = WebUploader.create({
		auto: true,
		swf: 'lib/webuploader/0.1.5/Uploader.swf',
	
		// 文件接收服务端。
		server: 'fileupload.php',
	
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#filePicker',
	
		// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
		resize: false,
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/*'
		}
	});
	uploader.on( 'fileQueued', function( file ) {
		var $li = $(
			'<div id="' + file.id + '" class="item">' +
				'<div class="pic-box"><img></div>'+
				'<div class="info">' + file.name + '</div>' +
				'<p class="state">等待上传...</p>'+
			'</div>'
		),
		$img = $li.find('img');
		$list.append( $li );
	
		// 创建缩略图
		// 如果为非图片文件，可以不用调用此方法。
		// thumbnailWidth x thumbnailHeight 为 100 x 100
		uploader.makeThumb( file, function( error, src ) {
			if ( error ) {
				$img.replaceWith('<span>不能预览</span>');
				return;
			}
	
			$img.attr( 'src', src );
		}, thumbnailWidth, thumbnailHeight );
	});
	// 文件上传过程中创建进度条实时显示。
	uploader.on( 'uploadProgress', function( file, percentage ) {
		var $li = $( '#'+file.id ),
			$percent = $li.find('.progress-box .sr-only');
	
		// 避免重复创建
		if ( !$percent.length ) {
			$percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
		}
		$li.find(".state").text("上传中");
		$percent.css( 'width', percentage * 100 + '%' );
	});
	
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader.on( 'uploadSuccess', function( file ) {
		$( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
	});
	
	// 文件上传失败，显示上传出错。
	uploader.on( 'uploadError', function( file ) {
		$( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
	});
	
	// 完成上传完了，成功或者失败，先删除进度条。
	uploader.on( 'uploadComplete', function( file ) {
		$( '#'+file.id ).find('.progress-box').fadeOut();
	});
	uploader.on('all', function (type) {
        if (type === 'startUpload') {
            state = 'uploading';
        } else if (type === 'stopUpload') {
            state = 'paused';
        } else if (type === 'uploadFinished') {
            state = 'done';
        }

        if (state === 'uploading') {
            $btn.text('暂停上传');
        } else {
            $btn.text('开始上传');
        }
    });

    $btn.on('click', function () {
        if (state === 'uploading') {
            uploader.stop();
        } else {
            uploader.upload();
        }
    });
	
	var ue = UE.getEditor('editor');
	
	$(".submit").click(function(){
		var contents = $("#ueditor_0").contents().find("body").html();
		$("#editorCont").val(contents);
	})

	if("<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" == "edit"){
		dataAssign();
	}

	function dataAssign(){
		var articleId = $(".articleId").val();
		var columnId = $(".theme").val();
		var dataAssign = "edit";
		$.ajax({
			url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'articleDataEdit'),$_smarty_tpl);?>
",
			type:"post",
			data:{dataAssign:dataAssign,articleId:articleId,columnId:columnId},
			success:function(data){
				var dataObj = eval('(' + data + ')');
				$("input[name='articletitle']").val(dataObj['article_title']);
				$("input[name='articletitle2']").val(dataObj['article_title2']);
				$(".select").find("option:nth-child("+dataObj['article_type']+")").attr("selected",true);
				$("input[name='articlesort']").val(dataObj['article_sort']);
				$("input[name='keywords']").val(dataObj['keywords']);
				$("textarea[name='abstract']").val(dataObj['abstract']);
				$("input[name='author']").val(dataObj['author']);
				if(dataObj['allowcomments'] == 1){
					$(".iCheck-helper").click();
				}
				if(dataObj['thumbnails'] != ""){
					$(".z_file").find("img").attr({"src":dataObj['thumbnails']});
				}
				ue.ready(function() {
					ue.setContent(dataObj['editorCont']);
				});
			}
		})
		
	}

	function initData(){
		var type = "<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
";
		var exists = "";
		if(type == "wine"){
			$("#wineName").attr("readonly","readonly");
			$("#foodName").click(function(){
				if($(this).val() != ""){
					exists = $("input[name=food_id]").val();
				}
				selectProduct("selectFood",exists);
			});
		}
		if(type == "food"){
			$("#foodName").attr("readonly","readonly");
			$("#wineName").click(function(){
				if($(this).val() != ""){
					exists =  $("input[name=wine_id]").val();
				}
				selectProduct("selectWine",exists);
			});
		}
	}
	initData();

	function selectProduct(type,exists){
		layer.open({
		  type: 2,
		  title: '選擇配對產品',
		  area: ['75%', '95%'],
		  fixed: false, //不固定
		  maxmin: true,
		  content: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'productMatchingSelect'),$_smarty_tpl);?>
&type='+type+'&exists='+exists
		});
	}
});

function getSelectValue(IDs,NAMEs,type){
	//console.log(IDs+"++++"+type+"++"+NAMEs);
	switch(type){
		case 'selectFood':
			$("input[name=food_name]").val(NAMEs.substr(1));
			$("input[name=food_id]").val(IDs);
			break;
		case 'selectWine':
			$("input[name=wine_name]").val(NAMEs.substr(1));
			$("input[name=wine_id]").val(IDs);
			break;
	}
	layer.closeAll();
}
<?php echo '</script'; ?>
>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html><?php }
}
