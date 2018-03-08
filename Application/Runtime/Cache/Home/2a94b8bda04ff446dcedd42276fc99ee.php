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
<link href="http://www.zzktz.com/statics/css/index_2016.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/jquery.SuperSlide.2.1.js"></script>
<script language="javascript" type="text/javascript">
function setTab(name,cursel,n){
 for(i=1;i<=n;i++){
  var menu=document.getElementById(name+i);
  var con=document.getElementById("con_"+name+"_"+i);
  menu.className=i==cursel?"hover":"";
  con.style.display=i==cursel?"block":"none";
 }
}
</script>
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
/*(function(W){
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
})(window);*/
</script>
</head>
<body>

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




<div id="scrollpage">
  <div class="section section1">
      <div class="inner">
            <div class="head">
                <div class="logo fl"><a href="http://www.zzktz.com/"><img src="/mymy/Uploads/<?php echo ($conf["logo"]); ?>" alt="郑州APP开发" /></a></div>
                <div class="headri fl"><img src="http://www.zzktz.com/statics/images/header_img1.gif" alt="郑州APP开发"/></div>
                <div class="head_ri fr">
                <div class="call"><img src="http://www.zzktz.com/statics/images/head_call.png" alt="郑州APP开发电话"/></div>
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
            <div class="in_ban">               
                <div class="bd">
          <ul>
              <?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url(/mymy/Uploads/<?php echo ($vo["imagename"]); ?>) center 0 no-repeat;"><a target="_blank" href="http://www.dzswedu.com/"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    
          </ul>
        </div>    
        <div class="hd"><ul></ul></div>
            </div>
            <script type="text/javascript">
        jQuery(".in_ban").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });
      </script>
      <div class="in_nav">
        <div class="servicesBox">
            <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="serBox">
            <div id="Div1" class="serBox1" onclick="serFocus(1)">
              <div class="serBoxOn"></div>
              <div class="pic2 mypng"><a href="<?php echo U('Product/index',array('id'=>$vo['id']));?>" target="_blank"><img src="/mymy/Uploads/<?php echo ($vo["imagecate"]); ?>" alt="<?php echo ($vo["typename"]); ?>"></a></div>
              <div class="pic1 mypng"> <img src="/mymy/Uploads/<?php echo ($vo["imagecate"]); ?>" alt="<?php echo ($vo["typename"]); ?>"> </div>
            </div>
            <div class="txt1"> 
              <a href="<?php echo U('Product/index',array('id'=>$vo['id']));?>" target="_blank" class="a_jump">
                <span class="tit"><?php echo ($vo["typename"]); ?></span>
                <p><?php echo ($vo["describle"]); ?></p>
              </a> 
            </div>
           
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        <script type="text/javascript" src="http://www.zzktz.com/statics/js/index.js"></script>       
      </div>
        </div>
  </div>
  <div class="section section2">
    <div class="inner">
      <div class="in_alzs">
        <div class="in_alzs1"><a href="http://www.zzktz.com/cases/list_2"><img src="http://www.zzktz.com/statics/images/in_alzstit.png" alt="郑州APP开发"/></a></div>
        <div class="in_alzs2"><div class="des">在多年来的发展探索中，开拓者科技秉承“帮助客户创造价值”的理念，致力于信息化建设及品牌营销的领域，提供企业形象管理、视觉创意设计、网站建设与维护、电商平台开发、APP及微信平台开发等服务</div></div>
       
        <div class="in_alzs4">
          <ul id="con_one_1">
          <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <a href="<?php echo U('NewsInfo/index',array('articleid'=>$vo['articleid']));?>" title="<?php echo ($vo["title"]); ?>">
                  <img src="/mymy/Uploads/<?php echo ($vo["imagename"]); ?>" width="285" height="176" alt="<?php echo ($vo["title"]); ?>"/>
                </a>
                <div class="licov">
                    <a href="<?php echo U('NewsInfo/index',array('articleid'=>$vo['articleid']));?>" title="<?php echo ($vo["title"]); ?>">
                    <p class="p1"><?php echo ($vo["title"]); ?></p>
                  <p class="p2">www</p>
                    </a>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>           
                                  
              
          </ul> 
      
        </div>
        <div class="in_alzs5">
          <a href="<?php echo U('NewsList/index');?>">更多案例</a>
        </div>              
            </div>
    </div>
    </div>
  <div class="section section3">
      <div class="inner">
      <div class="in_serv">  
        <div class="in_alzs1"><a href="http://www.zzktz.com/solution/list_5"><img src="http://www.zzktz.com/statics/images/in_servtit.png" alt="郑州APP开发客户"/></a></div>
        <div class="in_serv2">
          <ul>
             <?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["link"]); ?>" title=""><img src="/mymy/Uploads/<?php echo ($vo["imagename"]); ?>" width="220" height="70" alt=""/></a></li><?php endforeach; endif; else: echo "" ;endif; ?>     
                        
          </ul>
        </div>
            </div>
            <div class="in_new">
              <div class="in_news">
              <?php if(is_array($re)): $k = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="in_news1 fl" <?php if(($k) == "1"): ?>style="margin-left: 0;"<?php endif; ?>>
                  <div class="in_news1tit">
                    <div class="in_news1tit1 fl"><a href="<?php echo U('Company/index',array('id'=>$vo['id']));?>"><?php echo ($vo["typename"]); ?></a></div>
                    <div class="in_news1tit2 fr"><a href="<?php echo U('Company/index',array('id'=>$vo['id']));?>">更多&gt;</a></div>
                  </div>
                
                  <div class="img">             
                              
              <a href="<?php echo U('CompanyInfo/index',array('articleid'=>$vo['son']['articleid']));?>" title="<?php echo ($vo['son']["title"]); ?>"><img src="/mymy/Uploads/<?php echo ($vo['son']["imagename"]); ?>" width="346" height="220" alt="<?php echo ($vo['son']["title"]); ?>"/></a>
                    </div>
                  
                  <div class="ct">
                    <ul>
              </ul>
                  </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
         

              </div>
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