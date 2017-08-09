<?php
/* Smarty version 3.1.30, created on 2017-08-08 16:24:03
  from "D:\xampp\htdocs\redwine\tpl\search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59897523552a76_94793489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1a5a58596f2362fdd6d83996c413f5b0de00ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\search.html',
      1 => 1502180642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_59897523552a76_94793489 (Smarty_Internal_Template $_smarty_tpl) {
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
  <style>
  .mb20{
    cursor: pointer;
  }
  </style>
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
  <![endif]-->
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
        <div class="row">         
            <div class="heading1 mt20">
              <h2 class="pdl20 fn24">食物對對碰</h2>
              <h5 class="pdl20 f15">請選擇以下分類</h5>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row mg0">
                 <div class="grid_6 wbg mb20 foodToWine">
                 
                    <div class="imgre mh">
                      <img src="images/eat.png" alt=""/>
                    </div>
                     <p class="h40">佳餚配美酒</p>           
                </div>                 
                 <div class="grid_6 wbg mb20 wineToFood">                 
                    <div class="imgre mh">
                      <img src="images/cup.png" alt=""/>
                    </div>
                     <p class="h40">美酒配佳餚</p>           
                 </div>                  
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
  $(".foodToWine").click(function(){
    window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'foodToWine'),$_smarty_tpl);?>
";
  });
  $(".wineToFood").click(function(){
    window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'wineToFood'),$_smarty_tpl);?>
";
  });
})
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
