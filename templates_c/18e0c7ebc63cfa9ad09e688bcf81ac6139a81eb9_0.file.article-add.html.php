<?php
/* Smarty version 3.1.30, created on 2017-07-25 14:38:54
  from "D:\xampp\htdocs\redwine\tpl\back\article-add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59773bde6a1c92_61122962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18e0c7ebc63cfa9ad09e688bcf81ac6139a81eb9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\back\\article-add.html',
      1 => 1500821124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59773bde6a1c92_61122962 (Smarty_Internal_Template $_smarty_tpl) {
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

<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'backFuns','a'=>'themeAdd'),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data">
		<h3 style="margin-bottom: 30px;"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
		<input class="mode" type="text" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
">
		<input class="theme" type="text" name="theme" value="<?php echo $_smarty_tpl->tpl_vars['columnId']->value;?>
">
		<input class="articleId" type="text" name="articleId" value="<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章標題：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="articletitle" name="articletitle">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">簡略標題：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="articletitle2" name="articletitle2">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章類型：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="articletype" class="select">
					<option value="0">產品資訊</option>
					<option value="1">幫助說明</option>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">排序值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="0" placeholder="" id="articlesort" name="articlesort">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">關鍵詞：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="多個關鍵詞請用分號( ; )分隔" id="keywords" name="keywords">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章摘要：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="abstract" cols="" rows="" class="textarea"  placeholder="" datatype="*10-100" dragonfly="true" nullmsg="不能為空！" onKeyUp="$.Huitextarealength(this,200)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章作者：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="author" name="author">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">允許評論：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="check-box">
					<input type="checkbox" id="allowcomments" name="allowcomments" value="1">
					<label for="checkbox-pinglun">&nbsp;</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">縮略圖：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="img-box full">
						<section class=" img-section">
							<div class="z_photo upimg-div clear">
									 <section class="z_file fl">
										<img src="images/a11.png" class="add-img">
										<input type="file" name="file" id="file" class="file" value="" accept="image/jpg,image/jpeg,image/png,image/bmp" multiple />
									 </section>
							 </div>
						 </section>
						 <!-- <input name="" type="submit" class="btn btn-success radius size-L" value="上传"> -->
				</div>
				<aside class="mask works-mask">
					<div class="mask-content">
						<p class="del-p ">確定要刪除嗎？</p>
						<p class="check-p"><span class="del-com wsdel-ok">確定</span><span class="wsdel-no">取消</span></p>
					</div>
				</aside>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章內容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:100%;height:400px;"><?php echo '</script'; ?>
>
				<textarea name="editorCont" id="editorCont"></textarea>
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
});
<?php echo '</script'; ?>
>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html><?php }
}
