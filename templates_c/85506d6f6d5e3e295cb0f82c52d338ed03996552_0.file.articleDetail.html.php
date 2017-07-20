<?php
/* Smarty version 3.1.30, created on 2017-07-20 16:19:50
  from "D:\xampp\htdocs\redwine\tpl\articleDetail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597067a61b2749_36615815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85506d6f6d5e3e295cb0f82c52d338ed03996552' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\articleDetail.html',
      1 => 1500251467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_597067a61b2749_36615815 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="row article">    
              <h2><?php echo $_smarty_tpl->tpl_vars['article_title']->value;?>
<em class="fn15"><?php echo $_smarty_tpl->tpl_vars['article_title2']->value;?>
</em></h2>
              <span>創建時間：<?php echo $_smarty_tpl->tpl_vars['create_time']->value;?>
</span><span class="mf20">更新時間：<?php echo $_smarty_tpl->tpl_vars['update_time']->value;?>
</span><span class="mf20">作者：<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</span>
              <div class="mt20"><?php echo $_smarty_tpl->tpl_vars['editorCont']->value;?>
</div>
        </div>
      </div>      
    </div>

   <div class="say wow fadeInDown">
     <h2>2则回应<em class="rt">排序方式：<select>
       <option>最新</option>
     </select></em></h2>
  
      <li>
     <table width="100%" border="0">
  <tr>
    <td width="60"><img src="images/man.jpg"></td>
    <td><input name="" type="text" class="btext"></td>
  </tr>
</table>
     </li>
     <li>
     <table width="100%" border="0">
  <tr>
    <td width="60" valign="top"><img src="images/man.jpg"></td>
    <td>
    <p class="pd5 gray"><em class="fblue">Simo Ip</em> CMA Secondary School</p>
    <p>繼續Candy...進軍2000年</p>
    <p class="gray"><a href="#">讀好</a><a href="#">回復<img src="images/good.jpg">1</a> 16小時</p>
    </td>
  </tr>
</table>
     </li>
      <li>
     <table width="100%" border="0">
  <tr>
    <td width="60" valign="top"><img src="images/man.jpg"></td>
    <td>
    <p class="pd5 gray"><em class="fblue">Simo Ip</em> CMA Secondary School</p>
    <p>繼續Candy...進軍2000年</p>
    <p class="gray"><a href="#">讀好</a><a href="#">回復<img src="images/good.jpg">1</a> 16小時</p>
    </td>
  </tr>
</table>
     </li>
     <h3><img src="images/facebook.jpg">Facebook Comments Plugin</h3>
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
