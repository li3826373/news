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
  <div class="dizhi container">
    <div class="row">
      <div class="dizhi-con container" onclick="location.href='<?php echo U('Index/index');?>'">
        <span>海之韵</span>><span><?php echo ($info["title"]); ?></span>
      </div>
    </div>
  </div>

  <div class="details-text container">
    <h3><?php echo ($info["title"]); ?> <i><?php echo (substr($info["dateandtime"],0,10)); ?></i></h3>
    <p>
    <img src="/hzr/Uploads/<?php echo ($info["imagename"]); ?>" style="display: block;margin:0 auto; max-width: 100%;">
    <?php echo (htmlspecialchars_decode($info["content"])); ?>
    </p>
  </div>
<?php if(!empty($info["lookurl"])): ?><div class="details-video container">
    <h3><?php echo ($info["title"]); ?> <i><?php echo (substr($info["dateandtime"],0,10)); ?></i></h3>
    <video src="/hzr/Uploads/<?php echo ($info["lookurl"]); ?>" id='myvideo'>
    </video>

  </div><?php endif; ?>
  <script src="/hzr/Public/phone/js/jquery-3.1.1.min.js" charset="utf-8"></script>
  <script src="/hzr/Public/phone/js/top.js" charset="utf-8"></script>
  <script src="/hzr/Public/phone/js/video.js" charset="utf-8"></script>
</body>

</html>