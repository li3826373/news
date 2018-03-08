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
  <!-- banner开始 -->
  <div class="banner">
    <img src="/hzr/Uploads/<?php echo ($banner["imagename"]); ?>">
  </div>
  <!-- banner结束 -->
  <div class="container">
    <!-- 关于我们 -->
    <div class="tittle">
      <h3>HAIZHIYUN<span> </span></h3>
      <p>关于我们</p>
    </div>
    <div class="aboutUs-content">
      <img src="/hzr/Uploads/<?php echo ($aboutus["imagename"]); ?>">
      <h3 class="text-center"><?php echo ($about["title"]); ?></h3>
      <p><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($aboutus["content"])),0,100,'UTF-8')); ?></p>
    </div>
    <!-- 关于我们结束 -->
    <!-- 教师开始 -->
    <div class="tittle">
      <h3>HAIZHIYUN<span> </span></h3>
      <p>教师团队<a href="<?php echo U('Teacher/index',array('id'=>6));?>">MORE></a></p>
    </div>
    <div class="team-content">
      <ul class="row container">
       <?php if(is_array($teacher)): $i = 0; $__LIST__ = $teacher;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="col-xs-4"><img src="/hzr/Uploads/<?php echo ($vo["imagename"]); ?>" alt="" onclick="location.href='<?php echo U('NewsInfo/index',array('articleid'=>$vo['articleid']));?>'" style="cursor: pointer;"></li>
        <li class="col-xs-4" onclick="location.href='<?php echo U('NewsInfo/index',array('articleid'=>$vo['articleid']));?>'" style="cursor: pointer;">
          <h4><?php echo ($vo["title"]); ?></h4>
          <p><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($vo["describle"])),0,27,'UTF-8')); ?>..</p>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <!-- 教师结束 -->
    <!-- 视频开始 -->
    <div class="tittle">
      <h3>HAIZHIYUN<span> </span></h3>
      <p>精彩视频<a href="<?php echo U('Coure/index',array('id'=>9));?>">MORE></a></p>
    </div>
    <div class="shipin-contetn">
      <ul class="row container">
      <?php if(is_array($video)): $i = 0; $__LIST__ = $video;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="col-xs-4" onclick="location.href='<?php echo U('NewsInfo/index',array('articleid'=>$vo['articleid']));?>'" style="cursor: pointer;">
          <div class="shipin-img">
            <img src="/hzr/Uploads/<?php echo ($vo["imagename"]); ?>" alt="" >
          </div>
          <h5 class="text-center"><?php echo ($vo["title"]); ?></h5>
          <p class="text-center"><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($vo["describle"])),0,20,'UTF-8')); ?>..</p>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <!-- 视频结束 -->
    <!-- 学院风采开始 -->
    <div class="tittle">
      <h3>HAIZHIYUN<span> </span></h3>
      <p>学员风采<a href="<?php echo U('Student/index',array('id'=>3));?>">MORE></a></p>
    </div>
    <div class="sstyle">
      <ul class="row container">
      <?php if(is_array($student)): $i = 0; $__LIST__ = $student;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="col-xs-6" onclick="location.href='<?php echo U('NewsInfo/index',array('articleid'=>$vo['articleid']));?>'" style="cursor: pointer;">
          <img src="/hzr/Uploads/<?php echo ($vo["imagename"]); ?>">
          <h5><?php echo ($vo["title"]); ?></h5>
          <p><?php echo (substr($vo["dateandtime"],0,10)); ?></p>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <!-- 学院风彩结束 -->


  </div>
  <!-- 新闻开始 -->
  <div class="new-wrap" style="padding: 0px 15px;">
    <div class="tittle">
      <h3>HAIZHIYUN<span> </span></h3>
      <p>新闻动态<a href="<?php echo U('NewsList/index',array('id'=>1));?>">MORE></a></p>
    </div>
    <div class="news container">
      <ul class="row container">
      <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="row" onclick="location.href='<?php echo U('NewsInfo/index',array('articleid'=>$vo['articleid']));?>'" style="cursor: pointer;">
          <div class="news-img col-xs-4">
            <img src="/hzr/Uploads/<?php echo ($vo["imagename"]); ?>">
          </div>
          <div class="news-txt col-xs-8">
            <h5><?php echo ($vo["title"]); ?></h5>
            <p><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($vo["describle"])),0,29,'UTF-8')); ?>..</p>
          </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
  <!-- 新闻结束 -->
</body>

<script src="/hzr/Public/phone/js/top.js"></script>

</html>