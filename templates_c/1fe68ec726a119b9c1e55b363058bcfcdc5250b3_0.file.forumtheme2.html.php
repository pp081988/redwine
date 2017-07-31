<?php
/* Smarty version 3.1.30, created on 2017-07-31 12:09:51
  from "D:\xampp\htdocs\redwine\tpl\forumtheme2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597f01ef5b5ba4_51110874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fe68ec726a119b9c1e55b363058bcfcdc5250b3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\forumtheme2.html',
      1 => 1501495789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_597f01ef5b5ba4_51110874 (Smarty_Internal_Template $_smarty_tpl) {
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
  =========================================================-->  <section id="content"> 
      <div class="wrapper1">
      <div class="container">
        <div class="row article">    
              <h2>新增主題</h2>
              </div>
       
      </div>      
    </div>
<div class="theme  wow fadeInUp"> 
      <h2>主題類別 : <select name="" class="seltext selectTheme">
        <option value="forumtheme2">吹下水</option>
        <option value="forumtheme1">達人食評</option>
      </select></h2>
      <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'forum'),$_smarty_tpl);?>
" method="post">
     <li class="black1" style="padding-left:2px;margin-top: 20px;"><em class="bfn2" style="float: left;">選擇主題顏色：</em><br>
         <span class="flnew">
          <em class="size35 sbg1 themeColor" value="0"></em>
          <em class="size35 sbg2 themeColor" value="1"></em>
          <em class="size35 sbg3 themeColor" value="2"></em>
          <em class="size35 sbg4 themeColor" value="3"></em> 
          <em class="size35 sbg5 themeColor" value="4"></em>
          </span>
           <span class="flnew">
          <!-- <em class="rt btback">預覽</em> -->
          </span>
          </li>
          <input type="text" name="theme_color" class="value">
      <li class="f18">主題描述及內文：</li> 
         <li  class="pd0"><input name="short_comment" type="text" class="mtext"></li>
   <li  class="pd0"><textarea cols="" name="detail_content" rows="3" class="mtext"></textarea></li>
 </div>
   <div class="next wow fadeInDown">
   <input type="text" name="themeType" class="value" value="matching">
     <h2><input type="submit" class="rt btback" value="提交"></h2>
  </form>
 
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

  $(".selectTheme").change(function(){
        var page = $(this).val();
        window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'addForumIndex'),$_smarty_tpl);?>
";
    });

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


  $(".subBtn").click(function(){
    var wine_img = $("input[name=wine_img]").val();
    var food_img = $("input[name=food_img]").val();
    var wine_name = $("input[name=wine_name]").val();
    var food_name = $("select[name=food_name]").val();
    var check = new Array(wine_img,food_img,wine_name,food_name);
    var info = new Array("請上傳美酒圖片","請上傳美食圖片","請輸入美酒名稱","請選擇美食名稱");
    for(i=0;i<check.length;i++){
      if(check[i] == ""){
        alert(info[i]);
        return false;
      }
    }
  });

  $(".themeColor").click(function(){
    $(this).css({"border":"3px solid rgb(140, 176, 68)"});
    $(".themeColor").not($(this)).css({"border":"none"});
    $("input[name=theme_color]").val($(this).attr("value"));
  })


    $(".foodOption").change(function(){
      var id = $(this).val();
      var order = parseInt($(this).attr("order"));
      $(".foodOption").each(function(){
        if($(this).attr("order") == order +1){
          $(this).html("<option>>>請選擇<<</option>"+getOption(options,id))
        }
      })
    });

    var time = new Date();
    var year = time.getFullYear();
    for(i=1970;i<=year;i++){
      $("select[name=wine_year]").append("<option value="+i+">"+i+"年</option>");
    }

})

function getOption(options,id){
  var result;
  for(i=0;i<options.length;i++){
    if(options[i]['pId'] == id){
       result += "<option value='"+options[i]['id']+"'>"+options[i]['name']+"</option>";
    }
  }
  return result;
}

function productQuery(condition){
  $.ajax({
    url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'productDetial'),$_smarty_tpl);?>
",
    type:"post",
    data:{condition:condition,type:"forum",product:"wine"},
    success:function(data){
      if(data == "10016"){
        alert("發生錯誤：10016<br>請聯繫系統管理員");
      }else{
        var dataObj = eval('(' + data + ')');
        $("input[name=wine_name]").val(dataObj['name']);
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
              }
              $("input[name=order]").val("2");
              $("input[name=wine_img]").val(data['uploadImg']);
            }
            if(order == "2"){
              $("input[name=food_img]").val(returndata);
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
