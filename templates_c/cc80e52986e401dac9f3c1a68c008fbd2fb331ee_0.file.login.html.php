<?php
/* Smarty version 3.1.30, created on 2017-06-29 10:19:27
  from "D:\xampp\htdocs\sp\tpl\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5954b80fe92675_36963554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc80e52986e401dac9f3c1a68c008fbd2fb331ee' => 
    array (
      0 => 'D:\\xampp\\htdocs\\sp\\tpl\\login.html',
      1 => 1498724349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5954b80fe92675_36963554 (Smarty_Internal_Template $_smarty_tpl) {
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
  <!-- <?php echo '<script'; ?>
 src="js/jquery-migrate-1.2.1.js"><?php echo '</script'; ?>
> -->
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
    $(document).ready(function () {
        if ($('html').hasClass('desktop')) {
            new WOW().init();
        }
        $(".loginnext").find(".btback").bind("click",function(){
            var username = $.trim($(".username").val());
            var password = $.trim($(".password").val());
            $.ajax({
                url: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'login','a'=>'test'),$_smarty_tpl);?>
",
                type:"post",
                data:{username:username,password:password},
                success:function(data){
                  console.log(data);
                }
            })
        })
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
            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"><a href="#"><img src="images/login.png" alt=""/></a></li>         
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
              <h2>會員登入</h2>
              </div>
       
      </div>      
    </div>
<div class="login  wow fadeInUp"> 
      <h2>請輸入帳戶及密碼 : </h2>
     
      <li class="f18">主題描述及內文：</li> 
         <li class="pdt0"><input name="" type="text" class="usertext username" placeholder="帳戶號"></li>
  <li  class="pdt0"><input name="" type="text" class="usertext password" placeholder="密碼"></li>
  <li class="pd0"><em class="red1">帳戶 / 密碼輸入錯誤 !</em><em class="rt"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'login','a'=>'register'),$_smarty_tpl);?>
">註冊</a>  |  <a href="#">忘記密碼</a></em></li>
 </div>
   <div class="loginnext wow fadeInDown">
     <h2><em class="rt btback">登錄</em></h2>
  
 
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
 src="js/script.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
