<?php
/* Smarty version 3.1.30, created on 2017-07-25 11:26:54
  from "D:\xampp\htdocs\redwine\tpl\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5976ba7e39be36_67508183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0545c7e12396f652fbc760d126e132f09b06534d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\index.html',
      1 => 1500953213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_5976ba7e39be36_67508183 (Smarty_Internal_Template $_smarty_tpl) {
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
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('#camera_wrap').camera({
        loader: true,
        pagination: true,
        minHeight: '',
        thumbnails: false,
        height: '45.3%',
        caption: true,
        navigation: false,
        fx: 'simpleFade',
        onLoaded: function () {
          $('.slider-wrapper')[0].style.height = 'auto';
        }
      });
      $("#owl").owlCarousel({
        items: 1, //10 items above 1000px browser width
        itemsDesktop: [1199, 1], //5 items between 1000px and 901px
        itemsDesktopSmall: [767, 1], // betweem 900px and 601px
        itemsTablet: [700, 1], //2 items between 600 and 0
        itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
        navigation: true,
        pagination: false
      });
    });
  <?php echo '</script'; ?>
>
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
  =========================================================-->
  <section id="content">
    <div class="slider-wrapper">
      <div id="camera_wrap">
        <div data-src="images/slider1.png">
          <div class="caption wow fadeInUp">八月優惠：Sauvignon Blanc白葡萄酒與Pinot Noir 世界最佳紅萄酒 </div>
        </div>
        <div data-src="images/slider2.png">
         <div class="caption wow fadeInUp">八月優惠：Sauvignon Blanc白葡萄酒與Pinot Noir 世界最佳紅萄酒 </div>
        </div>
        <div data-src="images/slider3.png">
         <div class="caption wow fadeInUp">八月優惠：Sauvignon Blanc白葡萄酒與Pinot Noir 世界最佳紅萄酒 </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    
    
    <div class="wrapper1">
      <div class="container">
        <div class="row">
            <div class="heading1">
              <h2 class="gr pdl20">達人搞乜鬼...</h2>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row activicityCont">
                <!-- <div class="grid_6">
                  <div class="grid_2">
                    <div class="img-wrapper1">
                      <img src="images/cp1.jpg" alt=""/>
                    </div>
                  </div>
                  <div class="grid_4 w100">                  
                    <p class="fn18">打開意大利「葡萄酒」的秘密!! </p>
                  <p>- 專業導師教你以品酒三步曲走天下</p>
                  <p>- 教你如何尋找自己喜歡的葡萄酒</p>
                  <p class="mt20"><a class="btmore rt" href="#">詳情</a> <a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>
                  </div>
                </div> 
                
                  <div class="grid_6">
                  <div class="grid_2">
                    <div class="img-wrapper1">
                      <img src="images/cp1.jpg" alt=""/>
                    </div>
                  </div>
                  <div class="grid_4 w100">                  
                    <p class="fn18">打開意大利「葡萄酒」的秘密!! </p>
                  <p>- 專業導師教你以品酒三步曲走天下</p>
                  <p>- 教你如何尋找自己喜歡的葡萄酒</p>
                  <p class="mt20"> <a class="bt5" href="#">50</a><a class="btno" href="#">50</a> <a class="btmore rt" href="#">詳情</a></p>
                  </div>
                </div>  -->
                <?php echo '<script'; ?>
>
                    $(function(){
                        var data = <?php echo $_smarty_tpl->tpl_vars['activicityData']->value;?>
;
                        var str;
                        var column = "activicity";
                        for(i=0;i<data.length;i++){
                            str = '<div class="grid_6">\
                                        <div class="grid_2">\
                                            <div class="img-wrapper1">\
                                                <img src="'+data[i]['thumbnails']+'" alt=""/>\
                                            </div>\
                                        </div>\
                                        <div class="grid_4 w100">\
                                            <p class="fn18">'+data[i]['article_title']+'</p>\
                                            <p>'+data[i]['article_title2']+'</p>\
                                            <p class="mt20"><a class="btmore rt" href="'+data[i]['url']+'">詳情</a> <a class="bt5" href="#">'+data[i]['like_num']+'</a><a class="btno" href="#">'+data[i]['dislike_num']+'</a> </p>\
                                        </div>\
                                    </div>';
                            $(".activicityCont").append(str);
                        }
                    })
                <?php echo '</script'; ?>
>
                 
                </div>
              </div>
            </div>
    
          
        </div>
      </div>
      <div class="container">
        <div class="row mt20">
             
                <div class="heading1">
                  <h2 class="gr pdl20">達人好介紹...</h2>
                </div>
                <div class="box2-wrapper1">
                  <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="row introductionCont">
                    <!-- <div class="grid_6 mb20">
                      <div class="grid_2">
                        <div class="img-wrapper1">
                          <img src="images/cp2.jpg" alt=""/>
                        </div>
                      </div>
                      <div class="grid_4 w100">                  
                        <p class="fn18">伊比利亞火腿 (Iberian ham) </p>
                      <p>聯盟20多個酒莊成員均來自意大利盛產頂級紅酒的地區帶來300+以上的 紅酒/白酒/氣泡酒...</p>
                      <p class="mt20"><a class="btmore rt" href="#">詳情</a> <a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>
                      </div>
                    </div> 
                    <div class="grid_6 mb20">
                      <div class="grid_2">
                        <div class="img-wrapper1">
                          <img src="images/cp2.jpg" alt=""/>
                        </div>
                      </div>
                      <div class="grid_4 w100">                  
                        <p class="fn18">伊比利亞火腿 (Iberian ham) </p>
                      <p>聯盟20多個酒莊成員均來自意大利盛產頂級紅酒的地區帶來300+以上的 紅酒/白酒/氣泡酒...</p>
                      <p class="mt20"><a class="btmore rt" href="#">詳情</a> <a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>
                      </div>
                    </div> 
                    <div class="grid_6 mb20">
                      <div class="grid_2">
                        <div class="img-wrapper1">
                          <img src="images/cp2.jpg" alt=""/>
                        </div>
                      </div>
                      <div class="grid_4 w100">                  
                        <p class="fn18">伊比利亞火腿 (Iberian ham) </p>
                      <p>聯盟20多個酒莊成員均來自意大利盛產頂級紅酒的地區帶來300+以上的 紅酒/白酒/氣泡酒...</p>
                      <p class="mt20"><a class="btmore rt" href="#">詳情</a> <a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>
                      </div>
                    </div>
                    <div class="grid_6 mb20">
                      <div class="grid_2">
                        <div class="img-wrapper1">
                          <img src="images/cp2.jpg" alt=""/>
                        </div>
                      </div>
                      <div class="grid_4 w100">                  
                        <p class="fn18">伊比利亞火腿 (Iberian ham) </p>
                      <p>聯盟20多個酒莊成員均來自意大利盛產頂級紅酒的地區帶來300+以上的 紅酒/白酒/氣泡酒...</p>
                      <p class="mt20"><a class="btmore rt" href="#">詳情</a> <a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>
                      </div>
                    </div> -->
                     <?php echo '<script'; ?>
>
                    $(function(){
                        var data = <?php echo $_smarty_tpl->tpl_vars['introductionData']->value;?>
;
                        var str;
                        for(i=0;i<data.length;i++){
                            str = '<div class="grid_6 mb20">\
                                        <div class="grid_2">\
                                            <div class="img-wrapper1">\
                                                <img src="'+data[i]['thumbnails']+'" alt=""/>\
                                            </div>\
                                        </div>\
                                        <div class="grid_4 w100">\
                                            <p class="fn18">'+data[i]['article_title']+'</p>\
                                            <p>'+data[i]['article_title2']+'</p>\
                                            <p class="mt20"><a class="btmore rt" href="'+data[i]['url']+'">詳情</a> <a class="bt5" href="#">'+data[i]['like_num']+'</a><a class="btno" href="#">'+data[i]['dislike_num']+'</a> </p>\
                                        </div>\
                                    </div>';
                            $(".introductionCont").append(str);
                        }
                    })
                    <?php echo '</script'; ?>
>
                    </div>
                  </div>
                </div>   
              
            </div>
      </div>
    </div>
    
    
     <div class="wrapper1">
      <div class="container">
        <div class="row">         
            <div class="heading1">
              <h2 class="gr pdl20">食物對對碰...</h2>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row mg0">
                 <div class="grid_6 wbg  mb20">
                 
                    <div class="imgre mh">
                      <img src="images/eat.png" alt=""/>
                    </div>
                     <p class="h40">佳餚配美酒</p>           
                </div>                 
                 <div class="grid_6 wbg mb20">                 
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
      
      
  <div class="wrapper1">
      <div class="container ">
        <div class="row mt20  grid_6  mg0">         
            <div class="heading1">
              <h2 class="gr pdl20">吹水園地...</h2>
              <div class="box2-wrapper1 wbg news">
              <li>直接聯絡酒莊訂酒問題！  <em class="fl">2016-8-20</em></li>
              <li>其實香港係咪仲未興WINE PAIRING DINN  <em class="fl">2016-8-20</em></li>
              <li>想請教前輩高人，兩支XO的分別？  <em class="fl">2016-8-20</em></li>
              <li>其實香港係咪仲未興WINE PAIRING DINNE...  <em class="fl">2016-8-20</em></li>
              <li>想請教前輩高人，兩支XO的分別？  <em class="fl">2016-8-20</em></li>
              <li>想請教前輩高人，兩支XO的分別？  <em class="fl">2016-8-20</em></li>
               <li class="nolib">想請教前輩高人，兩支XO的分別？  <em class="fl">2016-8-20</em></li>
              </div>
            </div>         
        </div>
        
        <div class="row mt20  grid_6  mg0">         
            <div class="heading1">
              <h2 class="gr pdl20">達人影院...</h2>
              <div class="box2-wrapper1 video">
             <div class="tv">
                <video controls autoplay>
                  <source src="red.mp4" type="video/mp4"  height="272" width="640" />
                Your browser does not support the video tag.
                </video>
                </div> </div>         
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
</body>
</html><?php }
}
