<?php
/* Smarty version 3.1.30, created on 2017-08-01 14:01:36
  from "D:\xampp\htdocs\redwine\tpl\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598019403a85e9_35969327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0854b95c8be5e8efff81587a2df368844848e90f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\header.html',
      1 => 1501567294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598019403a85e9_35969327 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
#loading{
  background-color: #df5a49;
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 1;
  margin-top: 0px;
  top: 0px;
}
#loading-center{
  width: 100%;
  height: 100%;
  position: relative;
  display: none;
  opacity: 0;
  transition: all 0.3s;
  }
#loading-center-absolute {
  position: fixed;
  left: 50%;
  top: 50%;
  height: 170px;
  width: 170px;
  margin-top: -100px;
  margin-left: -100px;  
  z-index: 99
}
.object{
    -moz-border-radius: 50% 50% 50% 50%;
  -webkit-border-radius: 50% 50% 50% 50%;
  border-radius: 50% 50% 50% 50%;
  position: absolute;
  border-left: 5px solid #92bd9d;
  border-right: 5px solid #7eb198;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  -webkit-animation: animate 2s infinite;
  animation: animate 2s infinite; 
  }

#object_one{
  left: 55px;
  top: 55px;
  width: 50px;
  height: 50px;
  }
              
#object_two{
  left: 45px;
  top: 45px;
  width: 70px;
  height: 70px;
  -webkit-animation-delay: 0.1s;
    animation-delay: 0.1s;
  }
    
#object_three{
  left: 35px;
  top: 35px;
  width: 90px;
  height: 90px;
  -webkit-animation-delay: 0.2s;
    animation-delay: 0.2s;
  }
#object_four{
  left: 25px;
  top: 25px;
  width: 110px;
  height: 110px;
  -webkit-animation-delay: 0.3s;
    animation-delay: 0.3s;
  
  } 

@-webkit-keyframes animate {
 

50% {
  -ms-transform: rotate(180deg); 
    -webkit-transform: rotate(180deg); 
    transform: rotate(180deg); 
  }
    
100% {
  -ms-transform: rotate(0deg); 
    -webkit-transform: rotate(0deg); 
    transform: rotate(0deg); 
  }   

}

@keyframes animate {

50% {
  -ms-transform: rotate(180deg); 
    -webkit-transform: rotate(180deg); 
    transform: rotate(180deg); 
  }
    
100% {
  -ms-transform: rotate(0deg); 
    -webkit-transform: rotate(0deg); 
    transform: rotate(0deg); 
  }   

  
}




</style>
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
              <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'searching'),$_smarty_tpl);?>
">食物對對碰</a>
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
  </header>


<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_four"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_one"></div>

</div>
</div><?php }
}
