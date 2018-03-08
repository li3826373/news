<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>国惠</title>
<link rel="stylesheet" type="text/css" href="/diandeng/Public/Home/Assets/css/reset.css"/>
<script type="text/javascript" src="/diandeng/Public/Home/Assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/diandeng/Public/Home/Assets/js/js_z.js"></script>
<script type="text/javascript" src="/diandeng/Public/Home/Assets/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="/diandeng/Public/Home/Assets/css/thems.css">

</head>

<body>
<!--头部-->
<div class="head clearfix">
    <div class="logo"><a href=""><img src="/diandeng/Public/Home/Assets/images/logo.jpg" alt="国惠"/></a></div>
    <div class="head_r">
      <div class="search">
          <input name="" type="text" placeholder="请输入您想查找的内容">
            <input name="" type="submit" value="" class="btn">
        </div>
        <ul class="nav clearfix">
            <li class="now"><a href="<?php echo U('Index/index');?>">首页</a></li>
            <?php if(is_array($header)): $i = 0; $__LIST__ = $header;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <?php if($vo["id"] == 3): ?><a href="<?php echo U('About/index');?>"><?php echo ($vo["typename"]); ?></a>
             <?php elseif($vo["id"] == 2): ?>
             <a href="<?php echo U('Product/index');?>"><?php echo ($vo["typename"]); ?></a>
              <?php elseif($vo["id"] == 1): ?>
             <a href="<?php echo U('NewsList/index');?>"><?php echo ($vo["typename"]); ?></a>
             <?php elseif($vo["id"] == 11): ?>
             <a href="<?php echo U('Company/index');?>"><?php echo ($vo["typename"]); ?></a>
             <?php elseif($vo["id"] == 6): ?>
             <a href="<?php echo U('Contact/index');?>"><?php echo ($vo["typename"]); ?></a>
             <?php else: endif; ?>
              
                <ul class="ej">
                <?php if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i; if($vo["id"] == 3): ?><li><a href="<?php echo U('About/index',array('id'=>$vv['id']));?>"><?php echo ($vv["typename"]); ?></a></li>
                  <?php elseif($vo["id"] == 2): ?>
                   <li><a href="<?php echo U('Product/index',array('id'=>$vv['id']));?>"><?php echo ($vv["typename"]); ?></a></li>
                    <?php elseif($vo["id"] == 1): ?>
                   <li><a href="<?php echo U('NewsList/index',array('id'=>$vv['id']));?>"><?php echo ($vv["typename"]); ?></a></li>
                <?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
           
        </ul>
    </div>
</div>
<!--头部-->
<!--幻灯片-->
<div class="banner banner_s">
    <img src="/diandeng/Public/Home/Assets/upload/banner_a.jpg" alt=""/>
</div>
<!--幻灯片-->
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="scd_l">
        <div class="title">
            <b>产品中心</b>
            <span>PRODUCTS</span>
        </div>
        <ul class="sidenav">
        <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if(($info['id']) == $vo['id']): ?>class="now"<?php endif; ?>><a href="<?php echo U('Product/index',array('id'=>$vo['id']));?>"><?php echo ($vo["typename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
        </ul>
        <div class="space_hx">&nbsp;</div>
        <dl class="tel clearfix">
            <dt><img src="/diandeng/Public/Home/Assets/images/tel.png" alt=""/></dt>
            <dd>
                <p>24小时免费咨询热线</p>
                <b><?php echo ($conf["phone"]); ?></b>
            </dd>
        </dl>
    </div>
    <div class="scd_r">
        <div class="pst pst_r">
            <div class="p_pst">
                <span><?php echo ($info['title']); ?><i>&nbsp;</i></span>
            </div>
        </div>
        <div class="scd_rm">
            <div class="pro">
               <div style="text-align: center;"><img src="/diandeng/Uploads/<?php echo ($info['imagename']); ?>"></div>
              <?php echo (htmlspecialchars_decode($info["content"])); ?>
            </div>
        </div>
    </div>
</div>
<div class="space_hx">&nbsp;</div>
<!--底部-->
<div class="f_nbg">
  <ul class="f_nav clearfix">
      <li>
          <b>关于我们</b>
            <p><a href="">公司简介</a></p>
            <p><a href="">企业文化</a></p>
            <p><a href="">企业愿景</a></p>
            <p><a href="">荣誉资质</a></p>
            <p><a href="">公司视频</a></p>
        </li>
        <li>
          <b>产品展示</b>
            <p><a href="">LED工矿灯</a></p>
            <p><a href="">LED横插灯</a></p>
            <p><a href="">LED玉米灯</a></p>
        </li>
        <li>
          <b>案例展示</b>
            <p><a href="">户外案例</a></p>
            <p><a href="">户内案例</a></p>
        </li>
        <li>
          <b>技术支持</b>
            <p><a href="">服务理念</a></p>
            <p><a href="">资料下载</a></p>
            <p><a href="">常见问题</a></p>
            <p><a href="">信息反馈</a></p>
        </li>
        <li>
          <b>联系我们</b>
            <p><a href="">联系方式</a></p>
            <p><a href="">人才招聘</a></p>
        </li>
        <li class="ct">
          <b>深圳市国惠照明</b>
            <p>地址：深圳市龙岗区南联社区向银路71-3号汇川科技园1栋</p>
            <p>座机：0755-89728329/89728339</p>
            <p>手机：18823712618/1598933559</p>
            <p>邮箱：1782800180@qq.com</p>
        </li>
    </ul>
</div>
<div class="foot_bg">
  <div class="foot">
      <p>Copyright@215 - 2025 深圳国惠照明 All Rights Reserved版权所有</p>
        <a href="">网站地图</a>|
        <a href="">联系我们</a>|
        <a href="">人才招聘</a>
    </div>
</div>
<!--底部-->
</body>
</html>