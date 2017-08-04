<?php
/* Smarty version 3.1.30, created on 2017-08-02 14:37:09
  from "D:\xampp\htdocs\redwine\tpl\forum.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59817315496a60_63853757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76f6fcc22437796b11928ef3f50bce1ff2e45651' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\forum.html',
      1 => 1501655428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_59817315496a60_63853757 (Smarty_Internal_Template $_smarty_tpl) {
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
<style>
    .forum_matching_detail:hover{
        text-decoration: underline;
        cursor: pointer;
    }
</style>
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
      <div class="container fpd0">
        <div class="row mg10">
         
            <div class="heading1">
              <h2 class="pdl20 fn24 mt20 ">達人吹水園地<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'addForumIndex'),$_smarty_tpl);?>
"><em class="btback">新增主題</em></a>
              <em class="rt u1pr"><input name="" type="text" class="findtext" placeholder="主題, 酒名, 酒類, keyword"> <i class="go"><img src="images/go.png"></i></em>             
              </h2>
            </div>
            <div class="clear"></div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp forumCont" data-wow-duration="1s" data-wow-delay="0.1s">
                
                <!-- <div class="row  forum fbg5 mb20 fpd10">
                <div class="grid_12 u1pr">
                <i class="forarr"><img src="images/arrr5.png"></i>
                  <div class="fl">
                    <div >
                      <img src="images/f1.jpg" alt="" class="img1"/> <img src="images/f2.jpg" alt=""  class="img1"/>
                    </div>
                  </div>
                  <div class="grid_8 fl">                  
                    <p class="fn18"> <em class="bfn1">達人食評紅酒 </em><em class="bfn2"> 配</em><em class="bfn3">伊比利亞火腿 (Iberian ham)</em><em class="font15 fc1">網友:</em>
                     <em class="bfn2">Edward</em> <em class="fn13 fc1">2016-8-15</em> </p>
                  <p class="fc1">聯盟20多個酒莊成員均來自意大利盛產頂級紅酒的地區帶來300+以上的 紅酒/白酒/氣泡酒選擇 , 成員必須承諾「品質及價值同步」及提供最聯盟20多個酒莊成員均來自意大利</p>
                 
                  <p class="mt15"><a class="bt5" href="#">50</a><a class="btno" href="#">50</a> </p>
                  </div>
                </div> 
                </div> -->
                
              </div>
            </div>
    
           <div class="row mt20 page"><a href="#" class="pc1">1</a><a href="#"  class="pc2">2</a><a href="#"  class="pc2">>></a></div>
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
    var timestamp = Date.parse(new Date());
        timestamp = timestamp / 1000;
    $.ajax({
        url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'forumData'),$_smarty_tpl);?>
",
        type:"post",
        data:{limit:"10"},
        success:function(data){
            var dataObj = eval('(' + data + ')');
            for(i=0;i<dataObj.length;i++){
              if(dataObj[i]['wine_name'] == ""){
                str = '<div class="row  forum mb20 fpd10" style="background:'+dataObj[i]['theme_color']+';padding: 12px 0px;">\
                <div class="grid_12 u1pr">\
                  <div class="fl">\
                    \
                  </div>\
                  <div class="grid_8 fl">\
                    <p class="fn18"><a class="forum_matching_detail" id="'+dataObj[i]['id']+'" theme="forum_chat"><em class="bfn1">'+dataObj[i]['short_comment']+' </em></a><em class="font15 fc1">網友:</em>\
                     <em class="bfn2">'+dataObj[i]['username']+'</em> <em class="fn13 fc1">'+translateTime(dataObj[i]['create_time'])+'</em> </p>\
                  <p class="fc1" style="text-overflow: ellipsis;">'+dataObj[i]['detail_content']+'</p>\
                  <p class="mt15"><a class="bt5" href="#">'+dataObj[i]['like_num']+'</a><a class="btno" href="#">'+dataObj[i]['dislike_num']+'</a> </p>\
                  </div>\
                </div>\
                </div>';
              }else{
                var food_name = dataObj[i]['food_name'];
                if(dataObj[i]['food_name'] == 0){
                  food_name = dataObj[i]['custom_food_name'];
                }
                str = '<div class="row  forum mb20 fpd10" style="background:'+dataObj[i]['theme_color']+'">\
                <div class="grid_12 u1pr">\
                  <div class="fl">\
                    <div >\
                      <img src="'+dataObj[i]['wine_img']+'" alt="" class="img1"/> <img src="'+dataObj[i]['food_img']+'" alt=""  class="img1"/>\
                    </div>\
                  </div>\
                  <div class="grid_8 fl">\
                    <p class="fn18"><a class="forum_matching_detail" id="'+dataObj[i]['id']+'" theme="forum_matching"><em class="bfn1">'+dataObj[i]['wine_name']+' </em><em class="bfn2"> 配 </em><em class="bfn3">'+food_name+'</em></a><em class="font15 fc1">網友:</em>\
                     <em class="bfn2">'+dataObj[i]['username']+'</em> <em class="fn13 fc1">'+translateTime(dataObj[i]['create_time'])+'</em> </p>\
                  <p class="fc1">'+dataObj[i]['short_comment']+'</p>\
                  <p class="mt15"><a class="bt5" href="#">'+dataObj[i]['like_num']+'</a><a class="btno" href="#">'+dataObj[i]['dislike_num']+'</a> </p>\
                  </div>\
                </div>\
                </div>';
              }
            
            $(".forumCont").append(str);
            }
            //console.log(data);
            $(".forum_matching_detail").click(function(){
                var id = $(this).attr("id");
                var theme = $(this).attr("theme");
                window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'forum_matching_detail'),$_smarty_tpl);?>
&theme="+theme+"&id="+id;
            });
        }
    })
    function translateTime(time){
        var res = timestamp - time;
        if(res < 3600){
            return Math.round(res/60)+"分鐘前";
        }
        if(res <= 86400){
            return Math.round(res/60/60)+"小时前";
        }
        var days = Math.floor(Math.round(res/60/60) / 24);
        if(days <= 30){
            return days+"天前";
        }
        var date = new Date(res);
        Y = date.getFullYear() + '年';
        M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '月';
        D = date.getDate() + '日 ';
        h = date.getHours() + ':';
        m = date.getMinutes() + ':';
        s = date.getSeconds();
        return Y+M+D+h+m+s;
    }
                    
})
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
