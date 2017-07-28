<?php
/* Smarty version 3.1.30, created on 2017-07-28 15:11:44
  from "D:\xampp\htdocs\redwine\tpl\forumtheme1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597ae3b0a656e4_72120232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14cc14bc39c85b15b28dd27c2b661a53f5b64d09' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\forumtheme1.html',
      1 => 1501225902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_597ae3b0a656e4_72120232 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name = "format-detection" content = "telephone=no" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/camera.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/user.css">
   <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/common.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/index.css" />
  <?php echo '<script'; ?>
 src="js/jquery-1.7.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jquery-migrate-1.2.1.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/camera.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/owl.carousel.js"><?php echo '</script'; ?>
>
  <!--[if (gt IE 9)|!(IE)]><!-->
  <?php echo '<script'; ?>
 src="js/jquery.mobile.customized.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/wow/wow.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/imgUp.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/ajaxfileupload.js"><?php echo '</script'; ?>
>
  <style>
      .img-box .upimg-div .z_file,.upimg-div .up-section,.z_file .add-img{
        width: 400px!important;
        height: 235px!important;
        margin-right: 45px;
      }

      .z_file .add-img{
        background-image: url(images/upload1.jpg);
        background-repeat: no-repeat;
        background-position: center center;
        background-color: white;
      }
  </style>
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }
    });
  <?php echo '</script'; ?>
>
  <!--<![endif]-->
  
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <style>
  .listbd td { padding-top:15px;margin:10px ;font-size:16px;}		
	@media 	only screen and (max-width: 760px),	(min-device-width: 768px) and (max-device-width: 1024px)  {	
		table, thead, tbody, th, td, tr {display: block; }
		.listbd thead tr {position: absolute;top: -9999px;left: -9999px;}		
		.listbd td { border: none;position: relative;padding-left:0px;line-height:15px;padding-bottom:5px;}		
		.listbd td:before {position: absolute;top: 6px;left: 6px;width: 100%; padding-right: 15px; white-space: nowrap;margin-top:-20px; font-size:14px; font-weight:600}

	}
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body {padding: 0; margin: 0;  }
		}	

	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body {width: 100%; }
	}
	
    .up15{
      width: 400px;
    /*  margin: 0 auto;
      transition: all 0.5s;*/
    }
	</style>
</head>

<body>
  <div class="big-wrapper">
  <!--========================================================
                            HEADER
  =========================================================-->
  <?php $_smarty_tpl->_subTemplateRender("file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





  <!--========================================================
                            CONTENT
  =========================================================-->  <section id="content"> 
      <div class="wrapper1">
      <div class="container">
        <div class="row article">    
              <h2>新增主題</h2>
              </div>
       
      </div>      
    </div>
    <form id= "uploadForm">  
<div class="theme  wow fadeInUp"> 
      <h2>主題類別 : <select name="" class="seltext">
        <option value="forumtheme1">達人食評</option>
        <option value="forumtheme2">吹下水</option>
      </select></h2>  
      <li>
      <div class="up15">
        <div class="grid_6 m0 fl wine">
          <h5 class="f18">美酒圖片 / 食物圖片（酒和美食自動生成）</h5>
           <div class="img-box full">
                        <section class=" img-section">
                            <div class="z_photo upimg-div clear">
                                     <section class="z_file fl">
                                        <img src="" class="add-img">
                                        <input type="file" name="file" id="file" class="file" value="" accept="image/jpg,image/jpeg,image/png,image/bmp" multiple />
                                     </section>
                             </div>
                         </section>
                         <!-- <input name="" type="submit" class="btn btn-success radius size-L" value="上传"> -->
                </div>
        </div>
        <!-- <div class="grid_6 m0 fl food">
          <h5 class="f18"></h5> -->
           <!-- <div class="wbg upbig">
             <div class="updiv"></div>
             <i class="del"><img src="images/x.jpg"></i>
           </div> -->
           
        <!-- </div> -->
       </div>
       </form>
      </li> 
      <li class="clearfix"></li>      
      <li class="fl"><table width="100%" border="0" class="listbd">
  <tr>
    <td><em class="bfn2">酒名：</em><input name="wine_name" type="text" class="seltext"></td>
    <td><em class="bfn2">年份：</em><select name="year"  class="seltext">
      <option>--選擇年份--</option>
    </select></td>
    <td><em class="bfn2">酒類：</em><select name="category"  class="seltext">
      <option>--選擇酒類--</option>
    </select></td>
  </tr>
  <tr>
    <td><em class="bfn2">價錢：</em><select name="price"  class="seltext">
      <option>--選擇價錢--</option>
    </select></td>
    <td colspan="2"><em class="bfn2">佳餚名稱：</em><select name="food_name"  class="seltext">
      <option>--選擇国家菜式--</option>
    </select><select name=""  class="seltext">
      <option>--選擇菜式--</option>
    </select><select name=""  class="seltext">
      <option>--選擇菜名--</option>
    </select></td>
    </tr>
  <tr>
    <td><em class="bfn2">煮法：</em> <select name=""  class="seltext">
      <option>--選擇煮法--</option>
    </select></td>
    <td><em class="bfn2">味道：</em><select name=""  class="seltext">
      <option>--選擇味道--</option>
    </select></td>
    <td><em class="bfn2">絕配度：</em><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"></td>
  </tr>
</table>
</li>
   <li>短評：</li> 
   <li  class="pd0"><textarea cols="" rows="3" class="mtext"></textarea></li>
 </div>
   <div class="next wow fadeInDown">
     <h2><em class="rt btback">下一步</em></h2>
  
 
   </div>


  </section>


  <!--========================================================
                            FOOTER
  =========================================================-->
  <footer id="footer">
  <div class="gr gbg">瀏覽人次 :  45507</div>
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="grid_12 mt20">
            <div class="privacy-block wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <div class="fl"><a href="#">联系我们</a>  |  <a href="#">免责说明</a></div>
            <div class="grid_10 tar">Copyright @Redwinemeat.com All Rights Reseved</div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<?php echo '<script'; ?>
>
$(function(){
    $(".seltext").change(function(){
        var page = $(this).val();
        window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'pageIndex'),$_smarty_tpl);?>
&page="+page;
    });


})

function productQuery(condition){
  $.ajax({
    url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'productDetial'),$_smarty_tpl);?>
",
    type:"post",
    data:{condition:condition,type:"forum"},
    success:function(data){
      if(data == "10016"){
        alert("發生錯誤：10016<br>請聯繫系統管理員");
      }else{
        var dataObj = eval('(' + data + ')');
        $("input[name=wine_name]").val(dataObj['name']);
        $("select[name=year]").find("option").html(dataObj['year']);
      }
    }
  });
}

function doUpload() {  
     var formData = new FormData($( "#uploadForm" )[0]);  
     $.ajax({  
          url: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'forumImgUpload'),$_smarty_tpl);?>
' ,  
          type: 'POST',  
          data: formData,  
          async: false,  
          cache: false,  
          contentType: false,  
          processData: false,  
          success: function (returndata) {  
              if(returndata != ""){
                productQuery(returndata);
              }
          } 
     });  
}  

function ajaxFileUpload() {
            $.ajaxFileUpload
            (
                {
                    url: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'imgUpload'),$_smarty_tpl);?>
', //用于文件上传的服务器端请求地址
                    secureuri: false, //是否需要安全协议，一般设置为false
                    fileElementId: 'file', //文件上传域的ID
                    dataType: 'json', //返回值类型 一般设置为json
                    success: function (data, status)  //服务器成功响应处理函数
                    {
                      alert("ok")
                        // $("#img1").attr("src", data.imgurl);
                        // if (typeof (data.error) != 'undefined') {
                        //     if (data.error != '') {
                        //         alert(data.error);
                        //     } else {
                        //         alert(data.msg);
                        //     }
                        // }
                    },
                    error: function (data, status, e)//服务器响应失败处理函数
                    {
                        alert(e);
                    }
                }
            )
            return false;
        }

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
