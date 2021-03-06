<?php
/* Smarty version 3.1.30, created on 2017-08-08 10:29:25
  from "D:\xampp\htdocs\redwine\tpl\search2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59892205623f30_54201665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db0908b0c6a2b4715e2e2c125b9b26a5e50e7eae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\search2.html',
      1 => 1502159363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_59892205623f30_54201665 (Smarty_Internal_Template $_smarty_tpl) {
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
	
    .upbig{
      width: 400px!important;
      height: 235px!important;
      padding-top: 0px;
    /*  margin: 0 auto;
      transition: all 0.5s;*/
    }
    .food{
      opacity: 0.3; 
    }
    .updiv{
      height: 100%!important;
    }
    .wine{
      position: relative;
    }
    .wine .rightImg{
      position: absolute;
      right: -30px;
      top: 110px;
    }

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
    .themeColor{
      cursor: pointer;
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
  =========================================================-->  
<section id="content"> 
      <div class="wrapper1">
      <div class="container">
        <div class="row">         
            <div class="heading1 mt20">
              <h2 class="pdl20 fn24">美酒配佳餚<a onclick="window.history.back();" class="rt btback">返回上一頁</a></h2>
              <h5 class="pdl20 f15">上傳美酒圖片配對食物</h5>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row mg0">
                     <form id= "uploadForm">
                      <div class="up15">
                        <div class="grid_6 m0 fl wine">
                          <h5 class="f18"></h5>
                           <div class="img-box full">
                            <section class=" img-section">
                                <div class="z_photo upimg-div clear">
                                          <section class="z_file fl">
                                            <img src="" class="add-img">
                                            <input type="text" name="order" value="1" class="value">
                                            <input type="file" name="file" id="file" class="file" value="" accept="image/jpg,image/jpeg,image/png,image/bmp" multiple />
                                          </section>
                                </div>
                            </section>
                            </div>
                          </div>
                          <!-- <div class="grid_6 m0 fl">
                            <h5 class="f18">食物圖片</h5>
                             <div class="wbg upbig food">
                               <div class="updiv"></div>
                             </div>
                          </div> -->
                        </div>
                        </form>
                 </div>                   
                </div>
              </div>
    
          
        </div>
      </div>
      </div>      
      
      
  
  </section>
<div class="clearfix"></div>

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
 src="js/script.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){

})

function getFoodName(id){
  $.ajax({
    url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'getFoodName'),$_smarty_tpl);?>
",
    type:"post",
    data:{id:id},
    success:function(data){
      //$("select[name=food_name]").html("");
      $("input[name=custom_food_name],.taste").css({"display":"none"});
      if(data != ""){
        var dataObj = eval('(' + data + ')');
        for(i=0;i<dataObj.length;i++){
          var options = '<option value="'+dataObj[i]['id']+'">'+dataObj[i]['name']+'</option>';
          $("select[name=food_name]").append(options);
        }
      }else{
        $("select[name=food_name]").css({"display":"inline-block"});
      }
      $("select[name=food_name]").append("<option value='other'>其他</option>");
      $("select[name=food_name]").change(function(){
        if($(this).val() == "other"){
          $("input[name=custom_food_name],.taste").css({"display":"inline-block"});
        }
      });
    }
  });
}

function productQuery(condition){
  $.ajax({
    url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'productDetial'),$_smarty_tpl);?>
",
    type:"post",
    data:{condition:condition,type:"forum",product:"wine"},
    success:function(data){
      if(data == "10016"){
        console.log("發生錯誤：10016<br>請聯繫系統管理員");
        console.log(condition);
      }else{
        var dataObj = eval('(' + data + ')');
        //$("input[name=wine_name]").val(dataObj['name']);
        //console.log(dataObj['id']);
        window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'searchSelectMatching','theme'=>'wine'),$_smarty_tpl);?>
&id="+dataObj['id']+"&name="+dataObj['name'];
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
            $(".z_file").css({"display":"none"});
            if(returndata == "false"){
              alert("請先登錄");
              location.reload();
              return false;
            }
            var order = $("input[name=order]").val();
            if(order == "1"){
              var data = eval('(' + returndata + ')');
              if(data['compareImg'] != null &&  data['compareImg'] != ""){
                productQuery(data['compareImg']);
              }else{
                alert("未找到圖中美酒的資料。");
                location.reload();
                return false;
              }
            }
          } 
     });  
}
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
