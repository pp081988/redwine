<?php
/* Smarty version 3.1.30, created on 2017-07-06 04:40:46
  from "D:\xampp\htdocs\redwine\tpl\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595da32e3be236_34440058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0854b95c8be5e8efff81587a2df368844848e90f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\header.html',
      1 => 1499307835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595da32e3be236_34440058 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="grid_12  wpr">
          <h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
          <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
"><img src="images/logo.png" width="146" height="21"></a>
         <em class="wpa">&nbsp;&nbsp;繁&nbsp;<img class="x" src="images/ga1.png" /><img class="s" src="images/ga2.png" />
                   <div class="wowdrop">
            <a href="#">中文</a>
            <a href="#">英文</a>           
          </div>
         </em>
          </h1>
          <nav class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <ul class="sf-menu">             
              <li class="current"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'aboutus'),$_smarty_tpl);?>
">關於我們</a></li>
              <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'activicity'),$_smarty_tpl);?>
">達人搞乜鬼</a></li>
              <li><a href="index-2.html">食物對對碰</a>
              </li>
                <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'forum'),$_smarty_tpl);?>
">吹水園地</a></li>
              <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'video'),$_smarty_tpl);?>
">影院</a>
                
              </li>
              <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'introduction'),$_smarty_tpl);?>
">好介紹</a></li>
               <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'tellyou'),$_smarty_tpl);?>
">講你知</a></li>
            </ul>
            <div class="clearfix"></div>
          </nav>
          
          <?php echo $_smarty_tpl->tpl_vars['loginInfo']->value;?>

          
        </div>
      </div>
    </div>
  </header><?php }
}