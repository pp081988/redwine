<?php
/* Smarty version 3.1.30, created on 2017-07-03 07:42:22
  from "D:\xampp\htdocs\redwine\tpl\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5959d93e51dfd6_60199745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b57910ad95096cf792ee71c7a3fce65b28d485e9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\header.html',
      1 => 1499060537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5959d93e51dfd6_60199745 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
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
</head>
<body style="margin:0;padding:0;overflow:hidden" scroll="no">


<header id="header">
    <div class="container">
      <div class="row">
        <div class="grid_12  wpr">
          <h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
          <a href="index.html"><img src="images/logo.png" width="146" height="21"></a>
         <em class="wpa">&nbsp;&nbsp;繁&nbsp;<img class="x" src="images/ga1.png" /><img class="s" src="images/ga2.png" />
                   <div class="wowdrop">
            <a href="#">中文</a>
            <a href="#">英文</a>           
          </div>
         </em>
          </h1>
          <nav class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <ul class="sf-menu">             
              <li class="current"><a href="index.html">關於我們</a></li>
              <li><a href="index-1.html">達人搞乜鬼</a></li>
              <li><a href="index-2.html">食物對對碰</a>           
              </li>
                <li><a href="#">吹水園地</a></li>
              <li><a href="index-3.html">影院</a>
                
              </li>
              <li><a href="index-4.html">好介紹</a></li>
               <li><a href="index-4.html">講你知</a></li>
            </ul>
            <div class="clearfix"></div>
          </nav>
          <ul class="socials1">
            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'login','a'=>'loginIndex'),$_smarty_tpl);?>
"><img src="images/login.png" alt=""/></a></li>         
          </ul>
        </div>
      </div>
    </div>
  </header>
  </body>
</html><?php }
}
