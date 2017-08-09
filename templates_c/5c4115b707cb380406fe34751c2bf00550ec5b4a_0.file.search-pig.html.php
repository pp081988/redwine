<?php
/* Smarty version 3.1.30, created on 2017-08-09 11:24:37
  from "D:\xampp\htdocs\redwine\tpl\search-pig.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598a80758e0095_72045656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c4115b707cb380406fe34751c2bf00550ec5b4a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\search-pig.html',
      1 => 1502249049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_598a80758e0095_72045656 (Smarty_Internal_Template $_smarty_tpl) {
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
              <h5 class="pdl20 f15">已選食品分類：豬</h5>
              <h5 class="pdl20 f15 gr">請選擇部位：</h5>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row mg0">
                 <div class="grid_12">
                 
                    <div class="imgbbs mh">
                      <img src="images/pig.jpg" alt="" usemap="#Map"/>
                      <map name="Map">
                        <area shape="poly" coords="70,151,85,151,117,157,127,171,116,184,79,165,56,169,41,164,52,153" id="2131" href="#" name="Ear">
                        <area shape="poly" coords="121,152,116,134,121,122,136,109,142,108,152,113,160,125,160,140,153,151,141,158,135,158" id="2132" href="#" name="Snout">
                        <area shape="poly" coords="161,201,176,177,192,134,210,71,211,55,205,49,195,51,191,54,168,125,155,175,154,198" id="2133" href="#" name="Jowl">
                        <area shape="poly" coords="198,203,292,207,312,176,314,128,318,81,309,58,283,55,243,56,226,56,189,181,185,199" id="2134" href="#" name="Shoulder">
                        <area shape="poly" coords="209,247,183,229,191,286,208,313,265,318,295,274,300,224,264,218,213,219,198,223,186,225" id="2135" href="#" name="Riblet">
                        <area shape="poly" coords="348,203,386,207,411,172,425,144,404,67,349,62,335,124,325,182,345,204" id="2136" href="#" name="Fronthock">
                        <area shape="poly" coords="300,298,328,222,396,225,398,288,353,307" id="2137" href="#" name="Trotter">
                        <area shape="poly" coords="443,219,415,207,439,152,429,91,430,63,456,61,473,71" id="2138" href="#" name="Fatback">
                        <area shape="poly" coords="481,118,514,120,544,117,558,106,565,102,559,95,541,95,494,107,484,114" id="2139" href="#" name="Loin">
                        <area shape="poly" coords="415,297,417,227,424,222,464,234,565,276,580,291,534,305,478,309" id="2140" href="#" name="Spareribs">
                        <area shape="poly" coords="415,297,417,227,424,222,464,234,565,276,580,291,534,305,478,309" id="2132141" href="#" name="Belly">
                        <area shape="poly" coords="415,297,417,227,424,222,464,234,565,276,580,291,534,305,478,309" id="2132142" href="#" name="Leg">
                        <area shape="poly" coords="415,297,417,227,424,222,464,234,565,276,580,291,534,305,478,309" id="2132143" href="#" name="Shank">
                        <area shape="poly" coords="415,297,417,227,424,222,464,234,565,276,580,291,534,305,478,309" id="2132144" href="#" name="Foot">
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
      var pId = "213";
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
