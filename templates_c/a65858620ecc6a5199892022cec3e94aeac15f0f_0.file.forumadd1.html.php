<?php
/* Smarty version 3.1.30, created on 2017-07-29 15:58:13
  from "D:\xampp\htdocs\redwine\tpl\forumadd1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597c947561aca5_99584655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a65858620ecc6a5199892022cec3e94aeac15f0f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\forumadd1.html',
      1 => 1501336683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_597c947561aca5_99584655 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
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
.listbd td {
	padding-top: 15px;
	margin: 10px;
	font-size: 16px;
}
 @media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px) {
table, thead, tbody, th, td, tr {
	display: block;
}
.listbd thead tr {
	position: absolute;
	top: -9999px;
	left: -9999px;
}
.listbd td {
	border: none;
	position: relative;
	padding-left: 0px;
	line-height: 15px;
	padding-bottom: 5px;
}
.listbd td:before {
	position: absolute;
	top: 6px;
	left: 6px;
	width: 100%;
	padding-right: 15px;
	white-space: nowrap;
	margin-top: -20px;
	font-size: 14px;
	font-weight: 600
}
}
 @media only screen  and (min-device-width : 320px)  and (max-device-width : 480px) {
body {
	padding: 0;
	margin: 0;
}
}
 @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
body {
	width: 100%;
}
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
      
       <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row addbox"> 
                <div class="grid_3 wbg mb10 propr"> 
                   <div class="spic beer1">
                      <img src="images/beer.jpg">
                      <i class="b1arr"><img src="<?php echo $_smarty_tpl->tpl_vars['wineImg']->value;?>
"></i>
                    </div>
                    <div class="clear"></div>
                     <div class="beer2 bbg1">
                     <li>
                     <em class="bfn1">波爾多紅酒</em><em class="bfn2"> 配</em><em class="bfn3">Ibérico 火腿</em>
                     </li>
                     <p><a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>
                     </div>   
                     
                    <div class="txt propa">輸入簡短描述 : 聯盟20多個酒莊成員均來自意大利盛產頂級紅酒的地區聯盟20多個酒莊成員均來自意大利盛產頂級紅酒的地區聯盟20多個酒莊成員均來自意大利盛產頂級紅...</div>         
                 </div> 
                 
                <div class="grid_3 wbg mb10 propr"> 
                   <div class="spic beer1">
                      <img src="images/beer.jpg">
                      <i class="b1arr"><img src="<?php echo $_smarty_tpl->tpl_vars['foodImg']->value;?>
"></i>
                    </div>
                    <div class="clear"></div>
                     <div class="beer2 bbg1">
                     <li>
                     <em class="bfn1">波爾多紅酒</em><em class="bfn2"> 配</em><em class="bfn3">Ibérico 火腿</em>
                     </li>
                     <p><a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>
                     </div>   
                     
                    <div class="txt propa">輸入簡短描述 : 聯盟20多個酒莊成員均來自意大利盛產頂級紅酒的地區聯盟20多個酒莊成員均來自意大利盛產頂級紅酒的地區聯盟20多個酒莊成員均來自意大利盛產頂級紅...</div>         
                 </div> 
           
                  
                                      
                </div>
              </div>
            </div>
      
        </div>
    <div class="theme  wow fadeInUp">
          <li class="f18">簡短描述及選擇背景顏色：</li>
          <li class="pd0">
        <input name="" type="text" class="mtext" placeholder="輸入簡短描述">
      </li>
          <li  class="black1" style="padding-left:2px;">選擇顏色： 
         <span class="flnew">
          <em class="size35 sbg1"></em>
          <em class="size35 sbg2"></em>
          <em class="size35 sbg3"></em>
          <em class="size35 sbg4"></em> 
          <em class="size35 sbg5"></em>
          </span>
           <span class="flnew">
          <em class="rt btback">預覽</em>
          </span>
          </li>
        </div>
    <div class="next wow fadeInDown">
          <h2><em class="rt btback mg0">發布</em><em class="rt btback ">上一步</em></h2>
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
                  <div class="fl"><a href="#">联系我们</a> | <a href="#">免责说明</a></div>
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
</body>
</html><?php }
}
