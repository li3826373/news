<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>新闻中心 - 郑州APP开发,郑州APP制作,郑州APP定制,郑州网站建设,郑州微信开发 - 郑州开拓者电子科技有限公司</title>
<meta name="keywords" content="郑州APP开发,郑州APP制作,郑州APP定制,郑州网站建设,郑州微信开发">
<meta name="description" content="开拓者科技是一家专业的网络开发公司。联系电话：0371-86662825 主营：郑州APP开发,郑州APP制作,郑州APP定制,微信开发,网站建设,网络服务等，具备多项领先网站建设技术，为众多知名企业提供过高品质的郑州网站建设等服务。">
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
                                <div class="list_ban1 ban_news"></div>
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
 <div class="section section_news">
    <div class="news_ct">
        <div class="news_le fl">
            <div class="news_le1">
                <ul>                
                                        
            <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Company/index',array('id'=>$vo['id']));?>"  <?php if(($id) == $vo["id"]): ?>id="now_index"<?php endif; ?>><?php echo ($vo["typename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>                          
                                      
        </ul>
            </div>
            <div class="news_le2">
                                <ul>
                                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <div class="img fl"><a href="<?php echo U('CompanyInfo/index',array('articleid'=>$vo['articleid']));?>" title="<?php echo ($vo["title"]); ?>"><img  src="/mymy/Uploads/<?php echo ($vo["imagename"]); ?>" alt="<?php echo ($vo["title"]); ?>" width="206" height="143" /></a></div>
                        <div class="info fl">
                            <h1><a href="<?php echo U('CompanyInfo/index',array('articleid'=>$vo['articleid']));?>" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a><span><?php echo (substr($vo["dateandtime"],0,10)); ?></span></h1>
                            <p><?php echo ($vo["describle"]); ?>...</p>
                            <p class="p2"><span class="views"><?php echo ($vo["hit"]); ?></span><a href="<?php echo U('CompanyInfo/index',array('articleid'=>$vo['articleid']));?>" title="<?php echo ($vo["title"]); ?>" class="xq">阅读全文>></a></p>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                           
                                    </ul>
                <div class="h30"></div>
                                    
                <div id="pages" class="page"><?php echo ($pagesize); ?></div>    
                <div class="h30"></div>             
                                        
            </div>
        </div>  
        <div class="news_ri fr">
    <div class="news_ri1">   
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
</div>
<div style="height: 20px;"></div>
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