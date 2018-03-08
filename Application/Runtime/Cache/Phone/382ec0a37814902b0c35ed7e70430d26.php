<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>首页</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/hzr/Public/phone/css/bootstrap.min.css">
  <link rel="stylesheet" href="/hzr/Public/phone/css/public.css">
    <link rel="stylesheet" href="/hzr/Public/phone/css/teache.css">
    <link rel="stylesheet" href="/hzr/Public/phone/css/kecheng.css">
    <link rel="stylesheet" href="/hzr/Public/phone/css/sstyle.css">
    <link rel="stylesheet" href="/hzr/Public/phone/css/about.css">
      <link rel="stylesheet" href="/hzr/Public/phone/css/relation.css">
        <link rel="stylesheet" href="/hzr/Public/phone/css/details.css">
        <script src="/hzr/Public/phone/js/jquery-3.1.1.min.js" charset="utf-8"></script>
        <script type="text/javascript">
      $(function(){
       var fid="<?php echo ($_GET['fid']); ?>";
       var id="<?php echo ($_GET['id']); ?>";
       if(id!=""){
         $(".news"+id).addClass("active").siblings().removeClass("active");
       }else{
        if(fid!=20){
        $("#navbar li").eq(fid).addClass("active").siblings().removeClass("active");
         }else{
             $("#navbar li:last").addClass("active").siblings().removeClass("active");
         }
      }
   });
        </script>
</head>

<body>
  <!-- nav开始 -->
  <nav class="navbar navbar-default  clear">
    <div class="container">
      <div class="navbar-header clear">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="width: 70%;"><img src="/hzr/Uploads/<?php echo ($conf["logo"]); ?>" style="width: 100%"></a>
      </div>
      <div id="navbar" class="navbar-collapse" style="height:380px;">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo U('Index/index',array('fid'=>0));?>">首页</a></li>
          <li><a href="<?php echo U('About/index',array('fid'=>1));?>">关于我们</a></li>
          <?php if(is_array($header)): foreach($header as $key=>$vo): if($vo["id"] == 6): ?><li class="news<?php echo ($vo["id"]); ?>"><a href="<?php echo U('Teacher/index',array('id'=>$vo['id']));?>"><?php echo ($vo["typename"]); ?></a></li>
         <?php elseif($vo["id"] == 9): ?>
          <li class="news<?php echo ($vo["id"]); ?>"><a href="<?php echo U('Coure/index',array('id'=>$vo['id']));?>"><?php echo ($vo["typename"]); ?></a></li>
           <?php elseif($vo["id"] == 10): ?>
          <li class="news<?php echo ($vo["id"]); ?>"><a href="<?php echo U('Coure/index',array('id'=>$vo['id']));?>"><?php echo ($vo["typename"]); ?></a></li>
          <?php elseif($vo["id"] == 3): ?>
          <li class="news<?php echo ($vo["id"]); ?>"><a href="<?php echo U('Student/index',array('id'=>$vo['id']));?>"><?php echo ($vo["typename"]); ?></a></li>
           <?php elseif($vo["id"] == 2): ?>
          <li class="news<?php echo ($vo["id"]); ?>"><a href="<?php echo U('Student/index',array('id'=>$vo['id']));?>"><?php echo ($vo["typename"]); ?></a></li>
          <?php else: ?>
          <li class="news<?php echo ($vo["id"]); ?>"><a href="<?php echo U('NewsList/index',array('id'=>$vo['id']));?>"><?php echo ($vo["typename"]); ?></a></li><?php endif; endforeach; endif; ?>
          <li><a href="<?php echo U('Concat/index',array('fid'=>20));?>">联系我们</a></li>
        </ul>
      </div>
      <!--nav结束 -->
    </div>
    <br clear='both'>
  </nav>
  <!-- nav结束 -->
  <div class="dizhi  container">
    <div class="row">
      <div class="dizhi-con container">
        <span>海之韵</span>><span><?php echo ($newstype["typename"]); ?></span>
      </div>
    </div>
  </div>
  <!-- content开始 -->
  <div class="style-content ">
    <div class="s-con-top" onclick="location.href='<?php echo U('NewsInfo/index',array('articleid'=>$headstudent['articleid']));?>'">
      <img src="/hzr/Uploads/<?php echo ($banner["imagename"]); ?>">
      <h4><?php echo ($headstudent["title"]); ?></h4>
      <p><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($headstudent["describle"])),0,30,'UTF-8')); ?>..</p>
    </div>

    <div class="new-wrap">
      <div class="container">
        <div class="er-tittle">
          <h4><?php echo ($newstype["typename"]); ?></h4>
          <p>HAIZHIYUN</p>
          <button onclick="aa()">123</button>
        </div>
      </div>
      <div class="news container">
        <ul class="row container" id="add">
        <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="row" onclick="location.href='<?php echo U('NewsInfo/index',array('articleid'=>$vo['articleid']));?>'">
            <div class="news-img col-xs-4">
              <img src="/hzr/Uploads/<?php echo ($vo["imagename"]); ?>">
            </div>
            <div class="news-txt col-xs-8">
              <h5><?php echo ($vo["title"]); ?></h5>
              <p><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($vo["describle"])),0,30,'UTF-8')); ?>..</p>
            </div>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
      <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="row" onclick="location.href='<?php echo U('NewsInfo/index',array('articleid'=>$vo['articleid']));?>'">
            <div class="news-img col-xs-4">
              <img src="/hzr/Uploads/<?php echo ($vo["imagename"]); ?>">
            </div>
            <div class="news-txt col-xs-8">
              <h5><?php echo ($vo["title"]); ?></h5>
              <p><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($vo["describle"])),0,30,'UTF-8')); ?>..</p>
            </div>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
   <p style="text-align: center;" onclick="check(<?php echo ($id); ?>,$(this),a=1)" id="1" class="adding">更多...</p>
  <!-- content结束 -->


  <script src="/hzr/Public/phone/js/jquery-3.1.1.min.js" charset="utf-8"></script>
  <script src="/hzr/Public/phone/js/top.js" charset="utf-8"></script>
</body>

</html>
<script type="text/javascript">
  function check(id,obj,a){
       var pid=obj.attr("id");
      $.ajax({
          "url":"<?php echo U('Student/more');?>",
          "type":"get",
          "dataType":"html",
          "data":{"id":id,"pid":pid},
          "error":function(){},
          "success":function(re){
            if(re!=""){
              $("#add").append(re);
              obj.attr("id",parseInt(pid)+1);
            }else{
              $(".adding").html("<font color='red'>没有更多了</font>...");
              $(".adding").unbind();
            }
          }
     });
}

$(function(){
 //alert($("#add li:first").offset().top);
 $(window).scroll(function(){
      var a=$("#add li:first").offset().top;
      alert(a);
     
 })
   
   
})

</script>