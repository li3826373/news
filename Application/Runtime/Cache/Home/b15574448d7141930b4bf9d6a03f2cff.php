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
<h3 class="side_title"><i>a</i><span>在线留言<em>Online Message</em></span></h3>
<ul>

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
<h3 class="title_2"><span>您现在的位置：首页>在线留言</span>在线留言</h3>
<ul>
<form method="post" action="<?php echo U('Index/bao');?>">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="80" height="45" align="right">留言主题：</td>
      <td width="20">&nbsp;</td>
      <td><input type="text"  class="bd_1" name="title" id="title"/></td>
    </tr>
    <tr>
      <td height="45" align="right">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</td>
      <td></td>
      <td><input type="radio" name="sex" value="先生" checked="checked" /> 先生&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="女生" />女士 </td>
    </tr>
    <tr>
      <td height="45" align="right">联系电话：</td>
      <td>&nbsp;</td>
      <td><input type="text"  class="bd_1" name="phone" id="phone"/></td>
    </tr>
    <tr>
      <td height="45" align="right">联系人: </td>
      <td>&nbsp;</td>
      <td><input type="text" class="bd_1" name="name" id="name"/></td>
    </tr>

    <tr>
      <td height="45" align="right" valign="top">留言内容：</td>
      <td>&nbsp;</td>
      <td style="line-height:8px;"><br /><textarea class="bd_2 content" name="content"></textarea></td>
    </tr>
    <tr>
      <td height="60">&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="image" src="/earth/Public/Home/images/Sign_up_03.jpg" class="button" /></td>
    </tr>
  </tbody>
</table></form>
</ul>
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
<script type="text/javascript">
$(function(){

 $(".button").click(function(){
        var title=$("#title").val();
           title=$.trim(title);
        var name=$("#name").val();
           name=$.trim(name);
        var sex= $(":radio").val();
       var phone=$("#phone").val();
        var content=$(".content").val();
             content=$.trim(content);
        var reg=/^1(3|5|7|8)\d{9}$/;
        if(title==""){
              $("#title").val("请填写留言主题").css("color","red");
              return false;
            }else if(name==""){
              $("#name").val("请填写姓名").css("color","red");
              return false;
            }else if(phone==""){
                $("#phone").val("请填写手机号").css("color","red");
              return false;
            }else if(!reg.test(phone)){
                 $("#phone").val("请填写正确的手机号").css("color","red");
              return false;
            }
            else if(content==""){
              $(".content").val("请填写留言内容").css("color","red");
              return false;
            }else{
                $.ajax({
                     "url":"<?php echo U('Index/bao');?>",
                     "type":"post",
                     "dataType":"json",
                     "data":{"name":name,"phone":phone,"content":content,"title":title,"sex":sex},
                     "error":function(){alert("报名失败")},
                     "success":function(re){
                             if(re.state==1){
                                 alert(re.msg);
                                 $("form input:text").val("");
                             }else{
                                 alert(re.msg);
                             }
                     }

                });
                return false;
              }
        });
});

</script>