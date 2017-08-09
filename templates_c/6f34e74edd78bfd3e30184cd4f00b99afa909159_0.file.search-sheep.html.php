<?php
/* Smarty version 3.1.30, created on 2017-08-09 10:57:37
  from "D:\xampp\htdocs\redwine\tpl\search-sheep.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598a7a219607d6_40716797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f34e74edd78bfd3e30184cd4f00b99afa909159' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\search-sheep.html',
      1 => 1502247447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_598a7a219607d6_40716797 (Smarty_Internal_Template $_smarty_tpl) {
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
              <h2 class="pdl20 fn24">佳餚配美酒<a onclick="window.history.back();" class="rt btback">返回上一頁</a></h2>
              <h5 class="pdl20 f15">已選食品分類：羊</h5>
              <h5 class="pdl20 f15 gr">請選擇部位：</h5>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row mg0">
                 <div class="grid_12">
                 
                    <div class="imgbbs mh">
                      <img src="images/sheep.jpg" alt="" usemap="#Map"/>
                      <map name="Map">
                        <area shape="poly" coords="70,151,85,151,117,157,127,171,116,184,79,165,56,169,41,164,52,153" id="2121" href="#" name="Tongue">
                        <area shape="poly" coords="121,152,116,134,121,122,136,109,142,108,152,113,160,125,160,140,153,151,141,158,135,158" id="2122" href="#" name="Cheek">
                        <area shape="poly" coords="161,201,176,177,192,134,210,71,211,55,205,49,195,51,191,54,168,125,155,175,154,198" id="2123" href="#" name="Neck">
                        <area shape="poly" coords="198,203,292,207,312,176,314,128,318,81,309,58,283,55,243,56,226,56,189,181,185,199" id="2124" href="#" name="Shoulder">
                        <area shape="poly" coords="209,247,183,229,191,286,208,313,265,318,295,274,300,224,264,218,213,219,198,223,186,225" id="2125" href="#" name="Foreshank">
                        <area shape="poly" coords="348,203,386,207,411,172,425,144,404,67,349,62,335,124,325,182,345,204" id="2126" href="#" name="Rack">
                        <area shape="poly" coords="300,298,328,222,396,225,398,288,353,307" id="2127" href="#" name="Breast">
                        <area shape="poly" coords="443,219,415,207,439,152,429,91,430,63,456,61,473,71" id="2128" href="#" name="Loin">
                        <area shape="poly" coords="481,118,514,120,544,117,558,106,565,102,559,95,541,95,494,107,484,114" id="2129" href="#" name="Leg">
                        <area shape="poly" coords="415,297,417,227,424,222,464,234,565,276,580,291,534,305,478,309" id="2130" href="#" name="Hindshank">
                      </map>
                   </div>
                           
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
    $("map area").click(function(){
      var pId = "212";
      var Id = $(this).attr("id");
      var theme = "food";
      window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'searchSelectResult'),$_smarty_tpl);?>
&pId="+pId+"&Id="+Id+"&theme="+theme;
    });
  });
<?php echo '</script'; ?>
>>
</body>
</html><?php }
}
