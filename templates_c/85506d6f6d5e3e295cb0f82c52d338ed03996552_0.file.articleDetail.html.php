<?php
/* Smarty version 3.1.30, created on 2017-07-23 16:11:27
  from "D:\xampp\htdocs\redwine\tpl\articleDetail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5974ae8f719f75_44836189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85506d6f6d5e3e295cb0f82c52d338ed03996552' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\articleDetail.html',
      1 => 1500819086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_5974ae8f719f75_44836189 (Smarty_Internal_Template $_smarty_tpl) {
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
  =========================================================-->  
  <section id="content"> 
      <div class="wrapper1">
      <div class="container">
        <div class="row article">    
              <h2><?php echo $_smarty_tpl->tpl_vars['article_title']->value;?>
<em class="fn15"><?php echo $_smarty_tpl->tpl_vars['article_title2']->value;?>
</em></h2>
              <span>創建時間：<?php echo $_smarty_tpl->tpl_vars['create_time']->value;?>
</span><span class="mf20">/更新時間：<?php echo $_smarty_tpl->tpl_vars['update_time']->value;?>
</span><span class="mf20">/作者：<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</span><span class="favoriteBut mf20"><?php echo $_smarty_tpl->tpl_vars['favorite']->value;?>
</span>
              <div class="mt20 articleCont"><?php echo $_smarty_tpl->tpl_vars['editorCont']->value;?>
</div>
        </div>
      </div>      
    </div>

   <div class="say wow fadeInDown">
     <h2><span class="commentCount">0</span>则回应<em class="rt">排序方式：<select>
       <option>最新</option>
     </select></em></h2>
  
      <li>
     <table width="100%" border="0">
  <tr>
    <td width="60"><?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
</td>
    <td><input name="" type="text" class="btext"></td>
  </tr>

</table>
     </li>
<a class="btmore rt commentBtn" type="button">確定</a>
     <!-- <li>
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
     </li> -->
      <div class="commentCont"></div>
     <h3 style="clear: both;">Redwine Comments Surport</h3>
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
>
    $(document).ready(function () {
        if ($('html').hasClass('desktop')) {
          new WOW().init();
        }

        function videoPlayer(){
            $(".article").find("img").each(function(){
                var videoUrl = $(this).attr("_url");
                if(videoUrl){
                    var videoType = videoUrl.substr(videoUrl.length-3,3);
                    var playerHtml = '<video controls="controls">\
                                    <source src="'+videoUrl+'" type="video/'+videoType+'" />\
                                    你的瀏覽器不支持播放器.\
                                </video>';
                    $(this).replaceWith(playerHtml);
                }
            })
        }
        videoPlayer();
      
        var timestamp = Date.parse(new Date());
        timestamp = timestamp / 1000;

        function favorite(){
            var column = getUrlParam("column");
            var id = getUrlParam("id");
            $.ajax({
                url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'favoriteSwitch'),$_smarty_tpl);?>
",
                type:"post",
                data:{column:column,id:id},
                success:function(data){
                  switch(data){
                    case "false":
                      alert("請先登錄");
                    break;
                    case "0":
                      $(".favoriteBut").html("<img src='images/like.png'>I Like it!");
                    break;
                    case "1":
                      $(".favoriteBut").html("<img src='images/unlike.png'>加入喜愛");
                    break;
                    case "10001":
                      alert("操作頻繁，請休息一下再試");
                    break;
                  }
                }
            })
        }

        $(".favoriteBut").click(function(){
            favorite();
        })

        function commentQuery(){
            var column = getUrlParam("column");
            var id = getUrlParam("id");
            $.ajax({
                url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'commentQuery'),$_smarty_tpl);?>
",
                type:"post",
                data:{column:column,id:id},
                success:function(data){
                    switch(data){
                        case "empty":
                            return false;
                        break;
                    }
                    var dataObj = eval('(' + data + ')');
                    var avatar;
                    var thumbsUpNum = "0";
                    var createTime;
                    if(dataObj.length){
                        $(".commentCount").html(dataObj.length);
                    }
                    for(i=0;i<dataObj.length;i++){
                        if(dataObj[i]['usersDetail']['avatar'] == null){
                            avatar = 'images/defaultAvatar.png';
                        }else{
                            avatar = dataObj[i]['usersDetail']['avatar'];
                        }
                        if(dataObj[i]['thumbs_up'] != "0"){
                            thumbsUpNum = dataObj[i]['thumbs_up'];
                        }else{
                            thumbsUpNum = "0";
                        }
                        time = translateTime(dataObj[i]['create_time']);
                        str = '<li>\
                                    <table width="100%" border="0">\
                                        <tr>\
                                            <td width="60" valign="top"><img class="commentAvatar" src="'+avatar+'"></td>\
                                            <td>\
                                            <p class="pd5 gray"><em class="fblue">'+dataObj[i]['username']+'</em></p>\
                                            <p>'+dataObj[i]['content']+'</p>\
                                            <p class="gray"><a href="#">回復</a><a class="thumbsUpBtn" value="'+dataObj[i]['id']+'"><img src="images/good.jpg"><span class="thumbsUpNum">'+thumbsUpNum+'</span></a>'+time+'</p>\
                                            </td>\
                                        </tr>\
                                    </table>\
                                </li>'
                        $(".commentCont").append(str);
                    }
                    //console.log(data);
                    $(".thumbsUpBtn").click(function(){
                        var id = $(this).attr("value");
                        thumbsUp(id,$(this));
                    });
                }
            })
        }
        commentQuery();

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

        function comment(content){
            var column = getUrlParam("column");
            var id = getUrlParam("id");
            $.ajax({
                url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'commentInsert'),$_smarty_tpl);?>
",
                type:"post",
                data:{column:column,id:id,content:content},
                success:function(data){
                    switch(data){
                        case "false":
                            alert("請先登錄");
                            return false;
                        break;
                        case "10001":
                            alert("發生錯誤：10001，請聯繫管理員");
                            return false;
                        break;
                        case "10002":
                            alert("發生錯誤：10002，請聯繫管理員");
                            return false;
                        break;
                    }
                    $(".commentCont").html("");
                    commentQuery();
                }
            })
        }

        $(".commentBtn").click(function(){
            var content = $(".btext").val();
            comment(content);
        })

    });

    function thumbsUp(id,selecter){
        $.ajax({
            url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'thumbsUp'),$_smarty_tpl);?>
",
            type:"post",
            data:{id:id},
            success:function(data){
                if(data == "ok"){
                    var thumbsUpNum = selecter.find(".thumbsUpNum").html();
                    selecter.find(".thumbsUpNum").html(parseInt(thumbsUpNum)+1);
                }
                switch(data){
                    case "false":
                      alert("請先登錄");
                    break;
                }
            }
        })
    }

    function getUrlParam(name){
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r!=null) return unescape(r[2]); return null;
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
