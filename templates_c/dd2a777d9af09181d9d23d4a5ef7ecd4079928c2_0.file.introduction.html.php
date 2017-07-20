<?php
/* Smarty version 3.1.30, created on 2017-07-20 16:25:17
  from "D:\xampp\htdocs\redwine\tpl\introduction.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597068ed042166_67149745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd2a777d9af09181d9d23d4a5ef7ecd4079928c2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\introduction.html',
      1 => 1500539113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_597068ed042166_67149745 (Smarty_Internal_Template $_smarty_tpl) {
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
  =========================================================-->
  <section id="content">
    
    
    
    <div class="wrapper1">
      <div class="container">
        <div class="row mt20">
             
                <div class="heading1">
                  <h2 class="pdl20 fn24">達人好介紹<em class="fn13">(最後更新 :  2016-8-15)</em></h2>
                </div>
                <div class="box2-wrapper1">
                  <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="row introductionCont">
                    <?php echo '<script'; ?>
>
                    $(function(){
                        $.ajax({
                            url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'listData'),$_smarty_tpl);?>
",
                            type:"post",
                            data:{columnId:"introduction",limit:"10"},
                            success:function(data){
                                var dataObj = eval('(' + data + ')');
                                for(i=0;i<dataObj.length;i++){
                                str = '<div class="grid_6">\
                                            <div class="grid_2">\
                                                <div class="img-wrapper1">\
                                                    <img src="'+dataObj[i]['thumbnails']+'" alt=""/>\
                                                </div>\
                                            </div>\
                                            <div class="grid_4 w100">\
                                                <p class="fn18">'+dataObj[i]['article_title']+'</p>\
                                                <p>'+dataObj[i]['article_title2']+'</p>\
                                                <p class="mt20"><a class="btmore rt" href="'+dataObj[i]['url']+'">詳情</a> <a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>\
                                            </div>\
                                        </div>';
                                $(".introductionCont").append(str);
                                }
                                //console.log(dataObj);
                            }
                        })
                        
                    })
                    <?php echo '</script'; ?>
>
                    <!-- <div class="grid_6 mb20">
                      <div class="grid_2">
                        <div class="img-wrapper1">
                          <img src="images/tv.jpg" alt=""/>
                        </div>
                      </div>
                      <div class="grid_4 w100">                  
                        <p class="fn18">伊比利亞火腿 (Iberian ham) </p>
                      <p>聯盟20多個酒莊成員均來自意大利盛產頂級紅酒的地區帶來300+以上的 紅酒/白酒/氣泡酒...</p>
                      <p class="mt20"><a class="btmore rt" href="#">詳情</a> <a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>
                      </div>
                    </div> -->
                   </div>                   
                  </div>
                </div> 
            </div>
            <div class="row mt20 page"><a href="#" class="pc1">1</a><a href="#"  class="pc2">2</a><a href="#"  class="pc2">>></a></div>
           
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
