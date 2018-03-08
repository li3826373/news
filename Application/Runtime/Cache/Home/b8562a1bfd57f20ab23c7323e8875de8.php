<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title><?php echo ($conf["title"]); ?></title>
<meta name="keywords" content="<?php echo ($conf["keywords"]); ?>">
<meta name="description" content="<?php echo ($conf["desrible"]); ?>">
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
                                <div class="list_ban1"></div>
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
<script type="text/javascript" src="http://www.zzktz.com/statics/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/jquery.masonry.js"></script>
<script type="text/javascript" src="http://www.zzktz.com/statics/js/jquery.infinitescroll.js"></script>
<script type="text/javascript">
var isWidescreen=screen.width>=1048; 
if(isWidescreen){document.write("<style type='text/css'>.waterfall{width:1048px;}</style>");}
</script>

<script type="text/javascript">
function item_masonry(){ 
    $('.item img').load(function(){ 
        $('.infinite_scroll').masonry({ 
            itemSelector: '.masonry_brick',
            columnWidth:0,
            gutterWidth:0                               
        });     
    });
        
    $('.infinite_scroll').masonry({ 
        itemSelector: '.masonry_brick',
        columnWidth:0,
        gutterWidth:0                               
    }); 
}

$(function(){
    function item_callback(){       
        $('.item').mouseover(function(){
            $(this).css('box-shadow', '0 1px 5px rgba(35,25,25,0.5)');
            $('.btns',this).show();
        }).mouseout(function(){
            $(this).css('box-shadow', '0 1px 3px rgba(34,25,25,0.2)');
            $('.btns',this).hide();         
        });     
        item_masonry(); 
    }

    item_callback(); 
    $('.item').fadeIn();
    var sp = 1
    
    $(".infinite_scroll").infinitescroll({
        navSelector     : "#more",
        nextSelector    : "#more a",
        itemSelector    : ".item",
        
        loading:{
            img: "http://www.zzktz.com/statics/images/masonry_loading_1.gif",
            msgText: ' ',
            finishedMsg: '没有了',
            finished: function(){
                sp++;
                if(sp>=5){ //到第5页结束事件
                    $("#more").remove();
                    $("#infscr-loading").hide();
                    $("#pages").show();
                    $(window).unbind('.infscr');
                }
            }   
        },errorCallback:function(){ 
            $("#pages").hide();
        }
        
    },function(newElements){
        var $newElems = $(newElements);
        $('.infinite_scroll').masonry('appended', $newElems, false);
        $newElems.fadeIn();
        item_callback();
        return;
    });

});
</script>
<div class="section section2">
    <div class="list_nav1"><div class="list_nav1a">功能分类<i><img src="http://www.zzktz.com/statics/images/list_jiantou.png"/></i></div></div>
    <div class="list_nav2">
        <ul>
            <li><a href="<?php echo U('NewsList/index',array('id'=>'all'));?>" <?php if(($_GET['id']) == "all"): ?>class="hover"<?php endif; ?>>全部</a></li>
            <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('NewsList/index',array('id'=>$vo['id']));?>" <?php if(($id) == $vo['id']): ?>class="hover"<?php endif; ?>><?php echo ($vo["typename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>        
                
        </ul>
    </div>
    <div class="list_ct1">  
                            <div class="waterfall infinite_scroll">   
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item masonry_brick">
                    <div class="itemtit"> <a target="_blank" href="http://www.zzktz.com/cases/2_33" class="title"><?php echo ($vo["title"]); ?></a></div>
                    <div class="itembox">
                        <a target="_blank" href="http://www.zzktz.com/cases/2_33"><img src="/mymy/Uploads/<?php echo ($vo["imagename"]); ?>" style="opacity: 1; display: block;max-width: 100%;" original="http://www.zzktz.com/statics/images/caseimg1.jpg" class="wfimg"></a> 
                    </div>
                    <div class="itemdes">
                        <a target="_blank" href="http://www.zzktz.com/cases/2_33"><?php echo ($vo["describle"]); ?>...</a> 
                    </div>
                    <div class="itemtips">
                        <p><a target="_blank" href="http://www.zzktz.com/cases/2_33"><?php echo ($vo["title"]); ?></a></p>
                        <div class="sign"><a target="_blank" href="http://www.zzktz.com/cases/2_33" class="title"><img src="http://www.zzktz.com/statics/images/icon_link.png" alt=""></a></div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    
            </div>
            <div class="h30"></div>
            <div id="more"><a href="#"></a></div>
            <div id="pages" class="list-page" style="display: block;"><?php echo ($pagesize); ?></div>  
            <div class="h30"></div> 
            </div>  
</div>
<!-- 行业分类 G-->

<!-- 行业分类 O-->

<script>
$(function(){       
    $('.hyflbot').click(function() {
        $('body,html').animate({scrollTop:'0px'},500);
        return false;
    });
}); 
</script>
 <script type="text/javascript">
  window.onload=function(){
   function adsorption(){
    var headerWrap=document.getElementById('hyfl-wrap');
    var scrollTop=0;
    window.onscroll=function(){
     scrollTop=document.body.scrollTop||document.documentElement.scrollTop;
     if(scrollTop>428){
      headerWrap.className='hyfl-fixed';
     }else{
      headerWrap.className='hyfl-wrap';
     }
    }
   }
   adsorption();
  }
 </script>
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