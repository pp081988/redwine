<?php
/* Smarty version 3.1.30, created on 2017-08-06 12:37:21
  from "D:\xampp\htdocs\redwine\tpl\search-select-matching.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5986f161bee8b5_83001025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7090da46e41435b25981d73b531b0d651501b255' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\search-select-matching.html',
      1 => 1502015840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_5986f161bee8b5_83001025 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="row ">         
            <div class="heading1 mt20">
              <h2 class="pdl20 fn24">佳餚配美酒<a onclick="window.history.back();" class="rt btback">返回上一頁</a></h2>
             <h2  class="pdl20 fn24  mt20">酒商建議</h2>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row mg0 supplierSuggest"> 
                <!-- <div class="grid_3 wbg mb10"> 
                  <div class="spic beer1">
                    <img src="images/beer.jpg">
                      <i class="b1arr"><img src="images/arrr1.png"></i>
                  </div>
                  <div class="clear"></div>
                    <div class="beer2 bbg1">
                      <li>
                      <em class="bfn1">波爾多紅酒</em><em class="bfn2"> 配</em><em class="bfn3">Ibérico 火腿</em>
                      </li>
                      <p><a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>
                    </div>           
                </div>  -->
                
                  
                                      
                </div>
              </div>
            </div>
    
          
        </div>
        
        <div class="row">         
            <div class="heading1 mt20">          
             <h2  class="pdl20 fn24  mt20">品酒師建議</h2>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row mg0 wineTasterSuggest">

                </div>
              </div>
            </div>
    
          
        </div>
        
        <div class="row">         
            <div class="heading1 mt20">          
             <h2  class="pdl20 fn24  mt20">网友建議</h2>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row mg0 epalSuggest">

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
  $(document).ready(function () {
    if ($('html').hasClass('desktop')) {
      new WOW().init();
    }

    var id = "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
";
    var theme = "<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
";
    var name = "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
";
    var url = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'searchSelectMatching'),$_smarty_tpl);?>
&id="+id+"&theme="+theme+"&name="+name;
    supplierSuggest(id,theme,name,url);
    wineTasterSuggest(id,theme,name,url);
    epalSuggest(id,theme,name,url);

    function supplierSuggest(id,theme,name,url){
      $.ajax({
        url:url+"&suggestType=supplier",
        type:"post",
        success:function(data){
          if(data != ""){
            var dataObj = eval('(' + data + ')');
            for(i=0;i<dataObj.length;i++){
              var src = "images/noproductimg.png";
              if(dataObj[i]['images'] != ""){
                var images = dataObj[i]['images'].substr(1);
                var imageUrl = images.split(",");
                src = 'images/product/'+imageUrl[0];
              }
              str = '\
                    <div class="grid_3 wbg mb10">\
                      <div class="spic beer1">\
                        <img style="height:150px;" src="'+src+'">\
                      </div>\
                      <div class="clear"></div>\
                        <div class="beer2">\
                          <li>\
                          <em class="bfn1"><em class="bfn3">'+dataObj[i]['name']+'</em>\
                          </li>\
                        </div>\
                    </div>';
              $(".supplierSuggest").append(str);
            }
          }
        }
      });
    }

    function wineTasterSuggest(id,theme,name,url){
      $.ajax({
        url:url+"&suggestType=wineTaster",
        type:"post",
        success:function(data){
          if(data != ""){
            var dataObj = eval('(' + data + ')');
            for(i=0;i<dataObj.length;i++){
              var src = "images/noproductimg.png";
              if(dataObj[i]['images'] != ""){
                var images = dataObj[i]['images'].substr(1);
                var imageUrl = images.split(",");
                src = 'images/product/'+imageUrl[0];
              }
              str = '\
                    <div class="grid_3 wbg mb10">\
                      <div class="spic beer1">\
                        <img style="height:150px;" src="'+src+'">\
                      </div>\
                      <div class="clear"></div>\
                        <div class="beer2">\
                          <li>\
                          <em class="bfn1"><em class="bfn3">'+dataObj[i]['name']+'</em>\
                          </li>\
                        </div>\
                    </div>';
              $(".wineTasterSuggest").append(str);
            }
          }
        }
      });
    }

    function epalSuggest(id,theme,name,url){
      $.ajax({
        url:url+"&suggestType=epal",
        type:"post",
        success:function(data){
          if(data != ""){
            var dataObj = eval('(' + data + ')');
            for(i=0;i<dataObj.length;i++){
              var src = "images/noproductimg.png";
              if(dataObj[i]['images'] != ""){
                var images = dataObj[i]['images'].substr(1);
                var imageUrl = images.split(",");
                src = 'images/product/'+imageUrl[0];
              }
              str = '\
                    <div class="grid_3 wbg mb10">\
                      <div class="spic beer1">\
                        <img style="height:150px;" src="'+src+'">\
                      </div>\
                      <div class="clear"></div>\
                        <div class="beer2">\
                          <li>\
                          <em class="bfn1"><em class="bfn3">'+dataObj[i]['name']+'</em>\
                          </li>\
                        </div>\
                    </div>';
              $(".epalSuggest").append(str);
            }
          }else{
            $(".epalSuggest").append("sdfsadfsdfdfsdf");
          }
          //console.log(data)
        }
      });
    }
  });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
