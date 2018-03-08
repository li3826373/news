<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/mymy/Public/css/common.css">
  <link rel="stylesheet" href="/mymy/Public/css/style.css">
  <link href="/mymy/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="/mymy/Public/js/jquery.min.js"></script>
  <script type="text/javascript" src="/mymy/Public/js/jquery.SuperSlide.js"></script>
  <script type="text/javascript">
  $(function(){
       $(".open").eq(0).next().slideDown();
     $(".open").click(function(){
          if($(this).next().css("display")=="block"){
                  $(this).next().slideUp();
               }else{
                 $(this).next().slideDown().siblings("ul").slideUp();
               }
        
             
     })

  })
  /*$(function(){
      $(".sideMenu").slide({
         titCell:"h3", 
         targetCell:"ul",
         defaultIndex:0, 
         effect:'slideDown', 
         delayTime:'500' , 
         trigger:'click', 
         triggerTime:'150', 
         defaultPlay:true, 
         returnDefault:false,
         easing:'easeInQuint',
         endFun:function(){
              scrollWW();
         }
       });
      $(window).resize(function() {
          scrollWW();
      });
  });*/
  /*function scrollWW(){
    if($(".side").height()<$(".sideMenu").height()){
       $(".scroll").show();
       var pos = $(".sideMenu ul:visible").position().top-38;
       $('.sideMenu').animate({top:-pos});
    }else{
       $(".scroll").hide();
       $('.sideMenu').animate({top:0});
       n=1;
    }
  } */

/*var n=1;
function menuScroll(num){
  var Scroll = $('.sideMenu');
  var ScrollP = $('.sideMenu').position();
 
  if(num==1){
     Scroll.animate({top:ScrollP.top-38});
     n = n+1;
  }else{
    if (ScrollP.top > -38 && ScrollP.top != 0) { ScrollP.top = -38; }
    if (ScrollP.top<0) {
      Scroll.animate({top:38+ScrollP.top});
    }else{
      n=1;
    }
    if(n>1){
      n = n-1;
    }
  }
}*/
/*退出系统*/
function  logout(){
       if(confirm("确认退出?")){

            location.href="<?php echo U('Index/logout');?>"
       }

}
  </script>
  <title>后台首页</title>
</head>
<body>
    <div class="top" style="height: 100px;">
      <div id="top_t">
        <div id="logo" class="fl"></div>
         <ul class="nav">
            <li><a href="<?php echo U('Index/main');?>" target="right" class="selected"><img src="/mymy/Public/Admin/images/icon01.png" title="工作台" /><h2>工作台</h2></a></li>
            <li><a href="<?php echo U('News/index');?>" target="right"><img src="/mymy/Public/Admin/images/icon02.png" title="模型管理" /><h2>新闻管理 </h2></a></li>
            <li><a href="product.html"  target="rightFrame"><img src="/mymy/Public/Admin/images/icon03.png" title="模块设计" /><h2>产品管理 </h2></a></li>
            <li><a href="msg.html"  target="rightFrame"><img src="/mymy/Public/Admin/images/icon04.png" title="常用工具" /><h2>留言管理</h2></a></li>

            <li><a href="<?php echo U('Index/config');?>" target="right"><img src="/mymy/Public/Admin/images/icon06.png" title="系统设置" /><h2>系统设置</h2></a></li>
            </ul>
        <div id="photo_info" class="fr">
          <div id="photo" class="fl">
            <a href="#"><img src="/mymy/Public/images/a.png" alt="" width="60" height="60"></a>
          </div>
         
          <div id="base_info" class="fr">
            <div class="help_info">
           
              <a href="javascript:void();" id="out" onclick="logout()">&nbsp;退出</a>
            </div>
            <div class="info_center">
              <?php echo ($_SESSION['adminuser']['username']); ?>
           
            </div>
          </div>
        </div>
      </div>
   
    </div>
     <div class="side" style="top: 100px;">
        <div class="sideMenu" style="margin:0 auto">
        
        <?php if(in_array(0,$_SESSION['state']) || $_SESSION['state'][0]==""){?>
          <h3 class="open"> 新闻管理</h3>
          <ul>
          <li><a href="<?php echo U('News/type') ?>" target="right">新闻分类</a></li>
            <li><a href="<?php echo U('News/index') ?>" target="right">新闻管理</a></li>
              <!--  <li><a href="<?php echo U('News/vedio') ?>" target="right">视频上传</a></li>  --> 
          </ul>
          <?php  }?>

           <?php if(in_array(1,$_SESSION['state']) || $_SESSION['state'][0]==""){?>
          <h3 class="open"> 报名管理</h3>
          <ul>
            <li><a href="<?php echo U('Bao/index') ?>" target="right">报名列表</a></li>
          
          </ul>
           <?php  }?>
          
         
          <h3 class="open">其他管理</h3>
          <ul>
            <li><a href="<?php  echo U('Content/index') ?>" target="right">单页面</a></li>
            <li><a href="<?php echo U('Banner/index') ?>" target="right">轮播广告</a></li>
             <li><a href="<?php echo U('Friend/index');?>" target="right">友情链接</a></li>
          
          
          </ul>
         

          <?php if(in_array(3,$_SESSION['state']) || $_SESSION['state'][0]==""){?>
          <h3 class="open"> 系统设置</h3>
          <ul>
            <li><a href="<?php echo U('Index/config') ?>" target="right">系统配置</a></li>        
            <li><a href="<?php echo U('AdminUser/adminuser')?>" target="right">管理员</a></li>
            
          </ul>
        <?php }?>
         <?php if(in_array(4,$_SESSION['state']) || $_SESSION['state'][0]==""){?>
         <h3 class="open">移动端新闻管理</h3>
          <ul>
          <li><a href="<?php echo U('PhoneNews/type') ?>" target="right">新闻分类</a></li>
            <li><a href="<?php echo U('PhoneNews/index') ?>" target="right">新闻管理</a></li>
               <!-- <li><a href="<?php echo U('PhoneNews/vedio') ?>" target="right">视频上传</a></li>   -->
          </ul>
          <?php }?>
          <?php if(in_array(5,$_SESSION['state']) || $_SESSION['state'][0]==""){?>
           <h3 class="open">移动端其他管理</h3>
          <ul>
            <li><a href="<?php  echo U('PhoneContent/index') ?>" target="right">单页面</a></li>
            <li><a href="<?php echo U('PhoneBanner/index') ?>" target="right">轮播广告</a></li>
           
          
          </ul>
           <?php }?>
       </div>
    </div>
    <div class="main" style="top: 100px;">
       <iframe name="right" id="rightMain" src="<?php echo U('main');?>" frameborder="no" scrolling="auto" width="100%" height="auto" allowtransparency="true"></iframe>
    </div>
    <div class="bottom">
      <div id="bottom_bg">版权</div>
    </div>
    <div class="scroll">
          <a href="javascript:;" class="per" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(1);"></a>
          <a href="javascript:;" class="next" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(2);"></a>
    </div>
</body>

</html>