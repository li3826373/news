<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title><?php echo ($conf["title"]); ?></title>
<meta name="keywords" content="<?php echo ($conf["keywords"]); ?>">
<meta name="description" content="<?php echo ($conf["describle"]); ?>">
<link href="http://www.zzktz.com/statics/css/commom_2016.css" type="text/css" rel="stylesheet"/>
<link href="http://www.zzktz.com/statics/css/hf_2016.css" type="text/css" rel="stylesheet"/>
<link href="http://www.zzktz.com/statics/css/style_2016.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<link rel="stylesheet" type="text/css" href="http://www.zzktz.com/statics/css/bootstrap.css" media="screen">
<link rel="stylesheet" type="text/css" href="http://www.zzktz.com/statics/css/animate.css" media="screen">
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="http://www.zzktz.com/statics/css/font-awesome-ie7.min.css" media="screen">
<![endif]-->
<link rel="stylesheet" type="text/css" href="http://www.zzktz.com/statics/css/jquery.css" media="screen">
<!-- REVOLUTION BANNER CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="http://www.zzktz.com/statics/css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="http://www.zzktz.com/statics/css/responsive.css" media="screen">
<!--新添加css-->
<link rel="stylesheet" type="text/css" href="http://www.zzktz.com/statics/css/aebiz.css" media="screen">
<link rel="stylesheet" type="text/css" href="http://www.zzktz.com/statics/css/magnific-popup.css" media="screen">
<link rel="stylesheet" type="text/css" href="http://www.zzktz.com/statics/css/font-awesome.css" media="screen">
<!-- REVOLUTION BANNER CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="http://www.zzktz.com/statics/css/settings.css" media="screen">
<!--新添加css-->
<script src="http://www.zzktz.com/statics/js/bsl.js" charset="UTF-8" type="text/javascript"></script>
<script src="http://www.zzktz.com/statics/js/Enter.js" charset="UTF-8" id="BridgeRCVEnter" type="text/javascript"></script>
<script src="http://www.zzktz.com/statics/js/main_icon_invite_mess_api.js" charset="UTF-8" type="text/javascript"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/top.js"></script>
<link href="http://www.zzktz.com/statics/css/main.css" type="text/css" rel="stylesheet">
<link href="http://www.zzktz.com/statics/css/fix.css" type="text/css" rel="stylesheet">
<script charset="utf-8" src="http://www.zzktz.com/statics/js/m-webim-lite.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/jquery.SuperSlide.2.1.js"></script>

<link href="http://www.zzktz.com/statics/css/style_xinzeng.css" type="text/css" rel="stylesheet"/>
<div class="section section1">
    <div class="inner">
        <div class="head">
            <div class="logo fl"><a href="http://www.zzktz.com/"><img src="http://www.zzktz.com/statics/images/logo.jpg" alt="" /></a></div>
            <div class="headri fl"><img src="http://www.zzktz.com/statics/images/header_img1.gif" alt=""/></div>
            <div class="head_ri fr">
                <div class="call"><img src="http://www.zzktz.com/statics/images/head_call.png" alt=""/></div>
                <div class="topNav">
                    <div class="topNav-width clearfix">
                        <dl class="tnRight">
                            <dd>
                                <h3><a href="<?php echo U('Index/index');?>">首页</a></h3>
                            </dd>
                                                                                                                    
                    <?php if(is_array($header)): $k = 0; $__LIST__ = $header;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><dd id="dd<?php echo ($k); ?>">
                  <h3>
                  <?php if($vo["id"] == 2): ?><a href="<?php echo U('Product/index');?>"  ><?php echo ($vo["typename"]); ?></a>
                    <?php elseif($vo["id"] == 11): ?>
                      <a href="<?php echo U('NewsList/index');?>"  ><?php echo ($vo["typename"]); ?></a>
                       <?php elseif($vo["id"] == 1): ?>
                      <a href="<?php echo U('Company/index');?>"  ><?php echo ($vo["typename"]); ?></a>
                       <?php elseif($vo["id"] == 3): ?>
                      <a href="<?php echo U('About/index');?>"  ><?php echo ($vo["typename"]); ?></a>
                    <?php else: ?>
                      <a href="http://www.zzktz.com/solution/list_1"  ><?php echo ($vo["typename"]); ?></a><?php endif; ?>
                  </h3>
                        <?php if(!empty($vo["son"])): ?><ul>                
                             
                                <li>
                              <div class="tit"><a  href="http://www.zzktz.com/solution/list_5"><?php echo ($vo["typename"]); ?></a></div>
                              <div class="ct">
                              <?php if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i; if($vo["id"] == 2): ?><a href="<?php echo U('Product/index',array('id'=>$vv['id']));?>"><?php echo ($vv["typename"]); ?></a>
                               <?php elseif($vo["id"] == 1): ?>
                                <a href="<?php echo U('Company/index',array('id'=>$vv['id']));?>"><?php echo ($vv["typename"]); ?></a>
                                <?php elseif($vo["id"] == 11): ?>
                                 <a href="<?php echo U('NewsList/index',array('id'=>$vv['id']));?>"><?php echo ($vv["typename"]); ?></a>
                               <?php else: ?>
                                <a href="http://www.zzktz.com/solution/5_22"><?php echo ($vv["typename"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>                            
                                </div>
                                </li>  
                          </ul><?php endif; ?>     
                  </dd><?php endforeach; endif; else: echo "" ;endif; ?>                          
                                                                                                                    
                        </dl><!-- tnLeft E -->              
                    </div>
                </div>                          
                <script type="text/javascript">
                    jQuery(".topNav").slide({ 
                        type:"menu", //效果类型
                        titCell:"dd", // 鼠标触发对象
                        targetCell:"ul", // 效果对象，必须被titCell包含                           
                        effect:"slideDown",//下拉效果
                        delayTime:300, // 效果时间
                        triggerTime:0, //鼠标延迟触发时间
                        returnDefault:true  //返回默认状态
                    });
                </script> 
            </div>
        </div> 
        <div class="list_ban">
                        <div class="list_ban1 ban_project"></div>
                    </div>
    </div>
</div>



<div class="float-right">
  <div class="kefu-qq">
    <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($conf["qq"]); ?>&site=qq&menu=yes" target="_bank"><img src="http://www.zzktz.com/statics/images/kefu-qq.png" alt="APP开发客服"></a>
  </div>

  <div class="kefu-tel"  onmouseover="ddd('bb', 'show');" onmouseout="ddd('bb', 'hide');">
    <img src="http://www.zzktz.com/statics/images/kefu-tel.png" alt="APP开发电话">
    <div style="display:none;" id="bb" onmouseover="ddd('bb', 'show');" onmouseout="ddd('bb', 'hide');"> 
      <img src="http://www.zzktz.com/statics/images/tel-phone.png" alt="APP开发电话">
    </div>
  </div>

  <div class="kefu-line"  onmouseover="ddd('aa', 'show');" onmouseout="ddd('aa', 'hide');">
    <img src="http://www.zzktz.com/statics/images/kefu-line.png">
    <div style="display:none;" id="aa" onmouseover="ddd('aa', 'show');" onmouseout="ddd('aa', 'hide');"> 
      <img src="/mymy/Uploads/<?php echo ($conf["weixin_code"]); ?>">
    </div>
  </div>

  <div class="kefu-toubu" onClick="gotoTop();return false;">
    <img src="http://www.zzktz.com/statics/images/kefu-toubu.png">
  </div>
</div>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/top.js"></script>

<script> 
  function ddd(obj, sType) { 
  var oDiv = document.getElementById(obj); 
  if (sType == 'show') { oDiv.style.display = 'block';} 
  if (sType == 'hide') { oDiv.style.display = 'none';} 
  } 
</script> 
 <!-- Container -->    
    <div id="container" style="text-align: center;margin-top: 10px;">
          <h3><?php echo ($list["title"]); ?></h3>
            <div style="margin:0 auto;max-width: 1200px;text-align: center;">

             <?php echo (htmlspecialchars_decode($list["content"])); ?>

            </div>
    </div>
    <!-- End Container -->  
    <!--浮动导航-->
    <div class="affix hidden-xs" style="top:50%;right:20px;" role="complementary">
      <ul class="nav_position bs-docs-sidenav navbar-right">
        <li>
              <a class="active" href="#team-section"><label>商业模式</label><span></span></a>
            </li>
            <li><a class="" href="#function-section"><label>功能结构</label><span></span></a></li>
            <li><a class="" href="#b2b2c-section"><label>产品特征</label><span></span></a></li>
        </ul>
    </div>  
<script src="http://www.zzktz.com/statics/js/lxb.js" charset="utf-8"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/bootstrap.js"></script>

<script type="text/javascript" src="http://www.zzktz.com/statics/js/waypoints.js"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/plugins-scroll.js"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="js/respond.min.js"></script>
<![endif]-->
<!-- END REVOLUTION SLIDER -->
<script type="text/javascript" src="http://www.zzktz.com/statics/js/smooth-scroll.js"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/circle-skill.js"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/script.js"></script>    



   <div class="section section4">
    <div class="inner">
      <div class="footer">
        <div class="footer_le fl">
          <p class="p1"><img src="http://www.zzktz.com/statics/images/footer_lelogo.jpg" alt="郑州APP开发"/><span>诚信创未来  服务创品牌</span></p>
          <p><?php echo ($conf["icp"]); ?></p>
          <p class="beian"><a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=41010502002227">豫公网安备 41010502002227号</a></p>
        </div>
        <div class="footer_fr fr">
          <div class="footer_fr1 fl">
            <p><span><?php echo ($conf["phone"]); ?></span></p>
            <p>
            <a href="<?php echo U('About/index');?>" class="a1">关于开拓者</a>|
            <a href="<?php echo U('NewsList/index');?>">成功案例</a>|
            
            </p>
          </div>
          <div class="footer_fr2 fl"><img src="/mymy/Uploads/<?php echo ($conf["weixin_code"]); ?>" alt="" width="108" height="108"/></div>
        </div>             
      </div>
    </div>
    </div> 
   
</div>
</body>
</html>


<!-- 分类 G-->
<div class="gdqy-fr" id="header-wrap">
    <div class="gdqy-frtit">我们的服务</div>
    <div class="gdqy-frct" style="border:none;">
        <ul>
        <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li ><a href="<?php echo U('Product/index',array('id'=>$vo['id']));?>" title="<?php echo ($vo["typename"]); ?>"><i></i><?php echo ($vo["typename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>             
                    
                        
        </ul>
    </div>
   <!--  <div class="gdqy-frtit">电商平台开发</div>
   <div class="gdqy-frct">
       <ul>
                                 
                   
                       
       </ul>
   </div>
   <div class="hyflbot"><a href="#"><i></i><span>TOP</span></a></div>
   </div> -->
<!-- 分类 O-->

 <script type="text/javascript">
  window.onload=function(){
   function adsorption(){
    var headerWrap=document.getElementById('header-wrap');
    var scrollTop=0;
    window.onscroll=function(){
     scrollTop=document.body.scrollTop||document.documentElement.scrollTop;
     if(scrollTop>428){
      headerWrap.className='gdqy-fixed';
     }else{
      headerWrap.className='header-wrap';
     }
    }
   }
   adsorption();
  }
 </script>



</body>
</html>