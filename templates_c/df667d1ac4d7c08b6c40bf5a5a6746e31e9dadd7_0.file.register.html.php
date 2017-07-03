<?php
/* Smarty version 3.1.30, created on 2017-07-03 11:28:50
  from "D:\xampp\htdocs\redwine\tpl\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595a0e5276d7d1_67056037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df667d1ac4d7c08b6c40bf5a5a6746e31e9dadd7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\register.html',
      1 => 1499072292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595a0e5276d7d1_67056037 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="js/login.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
      function result(){
        window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'login','a'=>'resultIndex'),$_smarty_tpl);?>
";
      }
    $(document).ready(function () {
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }
      $(".selecter").css({"left":document.body.clientWidth /2 - 150,"top":document.body.clientHeight /2 - 15});
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
	
	</style>
</head>

<body>
  <div class="big-wrapper">
  <!--========================================================
                            HEADER
  =========================================================-->
<header id="header">
    <div class="container">
      <div class="row">
        <div class="grid_12  wpr">
          <h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
          <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><img src="images/logo.png" width="146" height="21"></a>
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
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['activicity']->value;?>
">達人搞乜鬼</a></li>
              <li><a href="index-2.html">食物對對碰</a>
              </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['forum']->value;?>
">吹水園地</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
">影院</a>
                
              </li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['introduction']->value;?>
">好介紹</a></li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['tellyou']->value;?>
">講你知</a></li>
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




  <!--========================================================
                            CONTENT
  =========================================================-->  <section id="content"> 
      <div class="wrapper1">
      <div class="container">
        <div class="row article">    
              <h2>註冊帳號</h2>
              </div>
       
      </div>      
    </div>
<div class="register login wow fadeInUp"> 
    <h2>請填寫以下項目 : </h2>
        <li><input name="" type="text" class="usertext username" placeholder="帳戶名稱"></li>
        <li class="pdt0"><input name="" type="text" class="usertext emailOrPhone" placeholder="電郵/電話號碼"></li>
        <li class="pdt0"><input name="" type="password" class="usertext password" placeholder="登入密碼"></li>
        <li class="pdt0"><input name="" type="password" class="usertext passwordRepeat" placeholder="確認密碼"></li>
        <li class="pdt0 select" name="sex"><input type="text"  class="usertext sex" placeholder="性別" disabled="disabled"></li>
        <li class="pdt0 select" name="age"><input type="text"  class="usertext age" placeholder="年齡" disabled="disabled"></li>
        <li class="pdt0 select" name="yearsOfDrinking"><input type="text" class="usertext yearsOfDrinking" placeholder="酒齡" disabled="disabled"></li>
        <li class="pd0"><em class="red1">密碼不可為空白</em></li>
 </div>
   <div class="loginnext registerAction wow fadeInDown">
    <span>請輸入驗證碼：</span><input type="text" name="" class="verify"><iframe class="verifyImg" name="verifyIframe" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'login','a'=>'verifyImg'),$_smarty_tpl);?>
"></iframe><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'login','a'=>'verifyImg'),$_smarty_tpl);?>
" target="verifyIframe" id="verifyImgRefresh"></a>
     <h2 style="float: right;"><em class="rt btback">確定</em></h2>
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
<div class="selecterWarp">
    <div class="selecter">
        <div class="selecterTitle"></div>
        <div></div>
    </div>
</div>
<?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
