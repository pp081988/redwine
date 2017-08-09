<?php
/* Smarty version 3.1.30, created on 2017-08-08 10:14:38
  from "D:\xampp\htdocs\redwine\tpl\forumtheme1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59891e8e5afcc4_75770740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14cc14bc39c85b15b28dd27c2b661a53f5b64d09' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\forumtheme1.html',
      1 => 1502158473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_59891e8e5afcc4_75770740 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="row article">    
              <h2>新增主題</h2>
              </div>
       
      </div>      
    </div>
    <form id= "uploadForm">  
<div class="theme  wow fadeInUp"> 
      <h2>主題類別 : <select name="" class="seltext selectTheme">
        <option value="forumtheme1">達人食評</option>
        <option value="forumtheme2">吹下水</option>
      </select></h2>  
      <li>
      <div class="up15">
        <div class="grid_6 m0 fl wine">
          <h5 class="f18">美酒圖片 (請先上傳美酒圖片)</h5>
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
                         <!-- <input name="" type="submit" class="btn btn-success radius size-L" value="上传"> -->
                </div>
                <img class="rightImg" src="images/right.png">
        </div>
        <div class="grid_6 m0 fl">
          <h5 class="f18">食物圖片</h5>
           <div class="wbg upbig food">
             <div class="updiv"></div>
<!--              <i class="del"><img src="images/x.jpg"></i> -->
           </div>
        </div>
       </div>
       </form>
       <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'forum'),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data">
       <input type="text" name="wine_img" class="value">
       <input type="text" name="food_img" class="value">
      </li> 
      <li class="clearfix"></li>      
      <li class="fl"><table width="100%" border="0" class="listbd">
  <tr>
    <td><em class="bfn2">酒名：</em><input name="wine_name" type="text" class="seltext"></td>
    <td><em class="bfn2">年份：</em><select name="wine_year"  class="seltext">
      <option value="">--選擇年份--</option>
    </select></td>
    <td><em class="bfn2">酒類：</em><select name="wine_category"  class="seltext">
      <option value="">--選擇酒類--</option>
      <?php echo $_smarty_tpl->tpl_vars['wineCategory']->value;?>

    </select></td>
  </tr>
  <tr>
    <td><em class="bfn2">價錢：</em><select name="wine_price"  class="seltext">
      <option value="">--選擇價錢--</option>
      <?php echo $_smarty_tpl->tpl_vars['price']->value;?>

    </select></td>
    <td colspan="2"><em class="bfn2">佳餚名稱：</em>
    <select name="food_category" order="1" class="seltext foodOption">
      <option value="">--選擇類型--</option>
    </select><select name="food_type" order="2" style="display: none;" class="seltext foodOption">
      <option value="">--選擇菜式--</option>
    </select><select name="food_name" order="3" style="display: none;" class="seltext foodOption">
      <option value="">--選擇菜名--</option>
    </select><input type="text" name="custom_food_name" class="value seltext foodOption" placeholder="請輸入菜名"></td>
    </tr>
  <tr>
    <td class="value taste"><em class="bfn2">味道：</em>
    <select name="food_taste" order="5" class="seltext foodOption">
      <option value="">--選擇味道--</option>
      <option value="0">甜</option>
      <option value="1">咸</option>
      <option value="2">酸</option>
      <option value="3">辣</option>
      <option value="4">苦</option>
    </select></td>
    <td><em class="bfn2" style="float: left;">絕配度：</em>
      <ul class="match">
      <li class="light star"><a href="javascript:;">1</a></li>
      <li class="star"><a href="javascript:;">2</a></li>
      <li class="star"><a href="javascript:;">3</a></li>
      <li class="star"><a href="javascript:;">4</a></li>
      <li class="star"><a href="javascript:;">5</a></li>
     </ul>
     <input type="text" name="matching" class="value">
    </td>
  </tr>
</table>
</li>
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
   <li>短評：</li> 
   <li  class="pd0"><input name="short_comment" cols="" rows="3" class="mtext"></input></li>
   <li>詳細內容：</li> 
   <li  class="pd0"><textarea name="detail_content" cols="" rows="3" class="mtext"></textarea></li>
 </div>
   <div class="next wow fadeInDown">
   <input type="text" name="themeType" class="value" value="matching">
     <input type="submit" name="" class="rt btback subBtn" value="提交">
  
 
   </div>


  </section>

</form>
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

    $(".selectTheme").change(function(){
        var page = $(this).val();
        window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'pageIndex'),$_smarty_tpl);?>
&page="+page;
    });
    var json = '<?php echo $_smarty_tpl->tpl_vars['options']->value;?>
';
    var options = eval('(' + json + ')');
    for(i=0;i<options.length;i++){
      if(options[i]['pId'] == 21){
        $("select[name=food_category]").append("<option value='"+options[i]['id']+"'>"+options[i]['name']+"</option>");
      }
    }

    $("select[name=food_category]").change(function(){
      var thisVal = $(this).val();
      if(thisVal == "211" || thisVal == "212" || thisVal == "213"){
        $("select[name=food_type]").css({"display":"inline-block"});
        $("select[name=food_name]").css({"display":"none"});
      }else{
        $("select[name=food_name]").html("<option>>>請選擇<<</option>");
        var id = $(this).val();
        getFoodName(id);
        $("select[name=food_type]").css({"display":"none"});
        $("select[name=food_name]").css({"display":"inline-block"});
      }
      $("input[name=custom_food_name],.taste").css({"display":"none"});
    });

    $("select[name=food_type]").change(function(){
      $("select[name=food_name]").html("<option>>>請選擇<<</option>");
      var id = $(this).val();
      getFoodName(id);
      $("select[name=food_name]").css({"display":"inline-block"});
    })

    $(".foodOption").change(function(){
      var id = $(this).val();
      var order = parseInt($(this).attr("order"));
      $(".foodOption").each(function(){
        if($(this).attr("order") == order +1){
          $(this).html("<option>>>請選擇<<</option>"+getOption(options,id));
        }
      })
    });

    var time = new Date();
    var year = time.getFullYear();
    for(i=1970;i<=year;i++){
      $("select[name=wine_year]").append("<option value="+i+">"+i+"年</option>");
    }

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
        console.log("發生錯誤：10016<br>請聯繫系統管理員");
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
