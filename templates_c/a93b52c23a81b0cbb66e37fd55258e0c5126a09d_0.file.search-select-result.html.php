<?php
/* Smarty version 3.1.30, created on 2017-08-08 17:08:58
  from "D:\xampp\htdocs\redwine\tpl\search-select-result.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59897faa453c71_18925869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a93b52c23a81b0cbb66e37fd55258e0c5126a09d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\search-select-result.html',
      1 => 1502182242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_59897faa453c71_18925869 (Smarty_Internal_Template $_smarty_tpl) {
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
   <link rel="stylesheet" href="css/jquery.pagination.css">
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
 src="js/jquery.pagination.min.js"><?php echo '</script'; ?>
>
  <!--<![endif]-->
  
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <style>
    .fgr1{
      padding-top: 0!important;
      overflow: hidden;
    }
    .resultMsg{
      text-align: center;
      padding: 100px 0px;
      font-size: 15px;
    }
  </style>
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
              <h5 class="pdl20 f15">已選食品分類：<em class=" bfn2"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</em> > <em class="black1"><?php echo $_smarty_tpl->tpl_vars['subClass']->value;?>
</em></h5>
            </div>
            <div class="box2-wrapper1">
              <div class="box2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row mg0 contentData">
                
                </div>
              </div>
            </div>
          <div class="box">
      <div id="pagination" class="page fl"></div>
      <div class="info fl">
        <p>當前頁數：<span id="current">4</span></p>
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
    if ($('html').hasClass('desktop')) {
      new WOW().init();
    }

    var id = "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
";
    var theme = "<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
";
    var count = 10;
    var totailNum = <?php echo $_smarty_tpl->tpl_vars['totailNum']->value;?>
;
    var totalPage = Math.ceil(totailNum/count);
   $("#pagination").pagination({
      currentPage: 1,
      totalPage: totalPage,
      isShow: true,
      count: count,
      homePageText: "首頁",
      endPageText: "尾頁",
      prevPageText: "上一頁",
      nextPageText: "下一頁",
      callback: function(current) {
        getData(id,theme,current,count);
      }
    });

   getData(id,theme,1,count);
   function getData(id,theme,current,count){
    $("#current").html(current);
    $.ajax({
      url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'searchSelectData'),$_smarty_tpl);?>
",
      type:"post",
      data:{id:id,theme:theme,current:current,count:count},
      success:function(data){
        if(data != ""){
          $(".contentData").html("");
          var dataObj = eval('(' + data + ')');
          for(i=0;i<dataObj.length;i++){
            var src = "images/noproductimg.png";
            if(dataObj[i]['images'] != ""){
              var images = dataObj[i]['images'].substr(1);
              var imageUrl = images.split(",");
              src = 'images/product/'+imageUrl[0];
            }
            str = '<div class="grid_3 wbg mb20 food" id="'+dataObj[i]['id']+'">\
                    <div class="spic fgr1">\
                      <img class="productImg" src="'+src+'">\
                    </div>\
                    <p class="fgr2">'+dataObj[i]['name']+'</p>\
                  </div>';
            $(".contentData").append(str);
          }
          searchMatching();
        }else{
          $(".contentData").html("<div class='resultMsg'>沒有找到相關信息。</div>");
        }
        //console.log(data);
      }
    });
   }

   function searchMatching(){
    $(".food").click(function(){
      var id = $(this).attr("id");
      var name = $(this).find(".fgr2").html();
      var theme = "food";
      window.location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'searchSelectMatching'),$_smarty_tpl);?>
&id="+id+"&name="+name+"&theme="+theme;
    });
   }

  });
<?php echo '</script'; ?>
>>
</body>
</html><?php }
}
