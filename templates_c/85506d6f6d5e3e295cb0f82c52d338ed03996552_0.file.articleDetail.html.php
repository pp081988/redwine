<?php
/* Smarty version 3.1.30, created on 2017-07-24 15:14:36
  from "D:\xampp\htdocs\redwine\tpl\articleDetail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5975f2bc065059_69346758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85506d6f6d5e3e295cb0f82c52d338ed03996552' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redwine\\tpl\\articleDetail.html',
      1 => 1500902074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_5975f2bc065059_69346758 (Smarty_Internal_Template $_smarty_tpl) {
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
</span>
              <div class="mt20 articleCont"><?php echo $_smarty_tpl->tpl_vars['editorCont']->value;?>
</div>
        </div>
      </div>      
    </div>
    <div class="likeOrDislike"><a class="likeBtn bt5" name="like"><?php echo $_smarty_tpl->tpl_vars['likeNum']->value;?>
</a><a class="likeBtn btno" name="dislike"><?php echo $_smarty_tpl->tpl_vars['dislikeNum']->value;?>
</a></div>
   <div class="say wow fadeInDown">
     <h2><span class="commentCount">0</span>则回应<em class="rt">排序方式：<select>
       <option>最新</option>
     </select></em></h2>
  
      <li>
     <table width="100%" border="0">
  <tr>
    <td width="60"><?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
</td>
    <td><input name="comment" type="text" class="btext"></td>
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

        function likeOrDislike(type){
            var column = getUrlParam("column");
            var id = getUrlParam("id");
            $.ajax({
                url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'likeOrDislike'),$_smarty_tpl);?>
",
                type:"post",
                data:{column:column,id:id,type:type},
                success:function(data){
                //   switch(data){
                //     case "false":
                //       alert("請先登錄");
                //     break;
                //     case "0":
                //       $(".favoriteBut").html("<img src='images/like.png'>I Like it!");
                //     break;
                //     case "1":
                //       $(".favoriteBut").html("<img src='images/unlike.png'>加入喜愛");
                //     break;
                //     case "10001":
                //       alert("操作頻繁，請休息一下再試");
                //     break;
                //   }
                console.log(data);
                }
            })
        }

        $(".likeBtn").click(function(){
            var type = $(this).attr("name");
            likeOrDislike(type);
        })

        function replyFun(){
            $(".reply").bind("click",function(){
                var thisGranddad = $(this).parent().parent();
                if(thisGranddad.find(".replyInputDiv").html() == undefined){
                    var thisCommentUsername = "<span class='replyUser'>"+thisGranddad.find(".commentUsername").html()+"</span>";
                    var replyInputDiv = "<div class='replyInputDiv'><input type='text' class='btext replyInput'></input><div class='addCommentUsername'>@"+thisCommentUsername+":</div><a class='btmore rt replybtn'>確定</a></div>";
                    var thisReplyInputDiv = thisGranddad.append(replyInputDiv);
                    var thisCommentUsernameWidth = thisGranddad.find(".addCommentUsername").width();
                    thisGranddad.find(".replyInput").css({"padding-left":thisCommentUsernameWidth + 15});
                    thisGranddad.find(".replyInput").focus();
                    $(".addCommentUsername").click(function(){
                        $(".replyInput").focus();
                    });
                    $(".replyInputDiv").not(thisGranddad.find(".replyInputDiv")).remove();
                    //$(".replyInputDiv").not(thisGranddad.find(".replybtn")).remove();
                    $(".replybtn").bind("click",function(){
                        var replyUser = $(".replyUser").html();
                        var content = $.trim($(".replyInput").val());
                        reply(content,replyUser);
                    });
                }
            });
        }

        function reply(content,replyUser){
            comment(content,replyUser);
        }

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
                    var replyUser;
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
                        if(dataObj[i]['reply'] != null){
                            replyUser = "<a class='replyUserDetail mgr0'>@"+dataObj[i]['reply']+"</a>: ";
                        }else{
                            replyUser = "";
                        }
                        time = translateTime(dataObj[i]['create_time']);
                        str = '<li>\
                                    <table width="100%" border="0">\
                                        <tr>\
                                            <td width="60" class="vertical_align_top" valign="top"><img class="commentAvatar" src="'+avatar+'"></td>\
                                            <td>\
                                            <p class="pd5 gray"><em class="fblue commentUsername">'+dataObj[i]['username']+'</em></p>\
                                            <p class="commentContent">'+replyUser+dataObj[i]['content']+'</p>\
                                            <p class="gray"><a class="reply">回復</a><a class="thumbsUpBtn" value="'+dataObj[i]['id']+'"><img src="images/good.jpg"><span class="thumbsUpNum">'+thumbsUpNum+'</span></a>'+time+'</p>\
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
                    replyFun();
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

        function comment(content,replyUser){
            var column = getUrlParam("column");
            var id = getUrlParam("id");
            $.ajax({
                url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'frontFuns','a'=>'commentInsert'),$_smarty_tpl);?>
",
                type:"post",
                data:{column:column,id:id,content:content,replyUser:replyUser},
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
