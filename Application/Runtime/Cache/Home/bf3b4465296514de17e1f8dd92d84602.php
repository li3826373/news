<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="/earth/Public/Home/css/style.css"/>
</head>
<body>
<!--头部开始-->
<div class="top">

  <ol>
      <a href="index.html" class="logo"><img src="/earth/Public/Home/images/logo.jpg" width="198" height="93" alt=""/></a>
<div class="menu">
    <dl>
   
    <em>400-600-0000
       <a href="#"><img src="/earth/Public/Home/images/index_08.jpg" width="20" height="16" alt=""/><s><img src="/earth/Public/Home/images/index_55.jpg" alt=""/></s></a>
       <a href="#"><img src="/earth/Public/Home/images/index_05.jpg" width="20" height="17" alt=""/></a>
</em>


</dl>
  <ul class="nav">
    <li><h3><a class="choice" href="<?php echo U('Index/index');?>">首    页</a></h3></li>
                    <?php if(is_array($header)): $i = 0; $__LIST__ = $header;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["id"] == 2): ?><li><h3><a class="hide" href="<?php echo U('Product/index');?>"><?php echo ($vo["typename"]); ?></a></h3></li>
                     <?php elseif($vo["id"] == 3): ?>
                   <li><h3><a class="hide" href="<?php echo U('About/index');?>"><?php echo ($vo["typename"]); ?></a></h3></li>  
                    <?php elseif($vo["id"] == 6): ?>
                   <li><h3><a class="hide" href="<?php echo U('Contact/index');?>"><?php echo ($vo["typename"]); ?></a></h3></li>
                   <?php elseif($vo["id"] == 11): ?>
                   <li><h3><a class="hide" href="<?php echo U('Index/bao');?>"><?php echo ($vo["typename"]); ?></a></h3></li>
                    <?php else: ?>
                    <li><h3><a class="hide" href="<?php echo U('NewsList/index');?>"><?php echo ($vo["typename"]); ?></a></h3></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
</ol>
</div>
<!--头部结束-->


<!--banner-->
<div class="banner_1"></div>
<!--main-->
<div class="main">
<div class="left">
<div class="side_manu">
<h3 class="side_title"><i>n</i><span>新闻中心<em>news</em></span></h3>
<ul>
<li><a href="news.html" id="hover">公司新闻</a></li>
<li><a href="news.html">企业动态</a></li>

</ul>
</div>
<div class="lxwm">
<h3><img src="/earth/Public/Home/images/about_03.jpg" width="258" height="110" /></h3>
<ul>
<li>合肥市红方建材有限责任公司 </li>
<li>地址：安徽省合肥市高新区科学大道19楼1915-1917室  </li>
<li>电话：400-600-0000</li>
<li>邮箱：123456@qq.com</li>
<li>邮编：100000</li>
</ul>
</div>
</div>


<div class="right">
<h3 class="title_2"><span>您现在的位置：首页>搜索结果</span>搜索结果</h3>
<ul class="news_list">
<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["typeid"] == 2): ?><li><span><?php echo (substr($vo["dateandtime"],0,10)); ?></span><a href="<?php echo U('ProductInfo/index',array('articleid'=>$vo['articleid']));?>"><?php echo ($vo["title"]); ?></a></li>
<?php else: ?>
<li><span><?php echo (substr($vo["dateandtime"],0,10)); ?></span><a href="<?php echo U('NewsInfo/index',array('articleid'=>$vo['articleid']));?>"><?php echo ($vo["title"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</ul>

<div>
   <div class="pagination">
             <?php echo ($pagesize); ?>
            </div>
</div>

</div>
</div>


<!--底部-->
<div class="footer_02"><ul><?php echo ($conf["icp"]); ?>
</ul></div>
<p id="back-to-top"><a href="#top"><span></span></a></p>
<!--js-->
<script src="/earth/Public/Home/js/jQuery.v1.8.3-min.js"></script>
<script type="text/javascript" src="/earth/Public/Home/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/earth/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
<script src="/earth/Public/Home/js/public.js"></script>
<!--底部结束-->

</body>
</html>