<?php
/* Smarty version 3.1.30, created on 2017-08-04 15:26:12
  from "D:\xampp\htdocs\redwine\tpl\search1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59842194622329_76869969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03d3f751050bb9a7888ceebd1a3040a071c7abff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\search1.html',
      1 => 1501831571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59842194622329_76869969 (Smarty_Internal_Template $_smarty_tpl) {
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
    .spic img{
      height: 130px;
    }
    .grid_3{
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
        <div class="row">         
            <div class="heading1 mt20">
              <h2 class="pdl20 fn24">佳餚配美酒<em class="rt btback">返回上一頁</em></h2>
              <h5 class="pdl20 f15">請選擇以下食品分類</h5>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row mg0">
                 <div class="grid_3 wbg mb20" target="search-cow">                 
                    <div class="spic">
                      <img src="images/cow.png" alt=""/>
                    </div>
                     <p class="h40 grayb">牛</p>           
                 </div>                 
                 <div class="grid_3 wbg mb20">                 
                    <div class="spic">
                      <img src="images/sheep.jpg" alt=""/>
                    </div>
                     <p class="h40 grayb">羊</p>           
                 </div>
                 <div class="grid_3 wbg mb20">                 
                    <div class="spic">
                      <img src="images/pig.jpg" alt=""/>
                    </div>
                     <p class="h40 grayb">豬</p>           
                 </div>
                 <div class="grid_3 wbg mb20">                 
                    <div class="spic">
                      <img src="images/e1.jpg" alt=""/>
                    </div>
                     <p class="h40 grayb">家禽</p>           
                 </div> 
                 <div class="grid_3 wbg mb20">                 
                    <div class="spic">
                      <img src="images/seafood.gif" alt=""/>
                    </div>
                     <p class="h40 grayb">海鮮</p>           
                 </div>                 
                 <div class="grid_3 wbg mb20">                 
                    <div class="spic">
                      <img src="images/snacks.jpg" alt=""/>
                    </div>
                     <p class="h40 grayb">小食</p>           
                 </div>
                 <div class="grid_3 wbg mb20">                 
                    <div class="spic">
                      <img src="images/dessert.jpg" alt=""/>
                    </div>
                     <p class="h40 grayb">甜品</p>           
                 </div>
                 <div class="grid_3 wbg mb20">                 
                    <div class="spic">
                      <img src="images/appetiser.jpg" alt=""/>
                    </div>
                     <p class="h40 grayb">頭盤</p>           
                 </div>  
                 <div class="grid_3 wbg mb20">                 
                    <div class="spic">
                      <img src="images/streetfoods.jpg" alt=""/>
                    </div>
                     <p class="h40 grayb">街頭食品</p>           
                 </div>
                 <div class="grid_3 wbg mb20">                 
                    <div class="spic">
                      <img src="images/e1.jpg" alt=""/>
                    </div>
                     <p class="h40 grayb">各國菜式</p>           
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
  $(".grid_3").click(function(){
    var target = $(this).attr("target");
    window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'pageIndex'),$_smarty_tpl);?>
&page="+target;
  })
})
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
