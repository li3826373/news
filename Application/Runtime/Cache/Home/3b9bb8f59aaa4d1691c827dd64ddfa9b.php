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
<script type="text/javascript" src="http://www.zzktz.com/statics/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript">
function setCookie(c_name,value,expiredays)
{
var exdate=new Date()
exdate.setDate(exdate.getDate()+expiredays)
document.cookie=c_name+ "=" +escape(value)+
((expiredays==null) ? "" : ";expires="+exdate.toGMTString())+";path=/;domain=zzktz.com"; 
}
function getCookie(c_name)
{
if (document.cookie.length>0)
  {
  c_start=document.cookie.indexOf(c_name + "=")
  if (c_start!=-1)
    { 
    c_start=c_start + c_name.length+1 
    c_end=document.cookie.indexOf(";",c_start)
    if (c_end==-1) c_end=document.cookie.length
    return unescape(document.cookie.substring(c_start,c_end))
    } 
  }
return ""
}
(function(W){
    var site = getCookie('domain');
    if(window.location.search.length&&window.location.search.indexOf("from=mobile")!=-1) return;
    if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent.toLowerCase())){
        if(site==''){
            W.location.href = "http://m.zzktz.com/";
        }else{
          if(site!='www'){
             window.location.href="http://"+site+".zzktz.com/";
          } 
         }
    }
})(window);
</script>
</head>
<body>
<div id="scrollpage">
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
                                <div class="list_ban1 ban_me"></div>
                            </div>
        </div>
    </div>



<div class="section section_me">
    <div class="me_ct"> 
        <div class="me_le fl">
               <?php echo (htmlspecialchars_decode($about["content"])); ?>
            <div style="height: 120px;"></div>
        </div>
        <div class="me_ri fr">
          <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="me_ri5"><a href="http://www.zzktz.com/news/list_10">&gt;&nbsp;<?php echo ($vo["typename"]); ?></a></div>
        <div class="showcase_ri6">
            <ul>
                  <?php if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><li><a href="http://www.zzktz.com/news/10_507" title="<?php echo ($vv["title"]); ?>"><?php echo ($vv["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>                                            
            </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                     
            <div style="height: 60px;"></div>
        </div>          
    </div>  
</div>
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