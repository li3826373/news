<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="/mymy/Public/css/login.css">
    <script type="text/javascript" src="/mymy/Public/js/jquery.min.js"></script>
	<title>后台登陆</title>
	<script type="text/javascript">
    function change(obj){
         obj.src="/mymy/index.php/HaiAdmin/Login/verify/id/"+Math.random();
       
    }
	</script>
</head>
<body>
	<div id="login_top">
		<div id="welcome">
			欢迎使用信息管理系统
		</div>
		<div id="back">
			<a href="/">返回首页</a>
			
		</div>
	</div>
	<div id="login_center">
		<div id="login_area">
			<div id="login_form">
			 <div style="width: 150px;height: 150px;margin-top: 110px;margin-left: 55px;">
			          <h3 style="margin: 10px auto;"><?php echo ($msgTitle); ?></h3>
             <p>
                <?php if(($status) == "1"): echo ($message); ?>
                <?php else: ?>
                <?php echo ($error); endif; ?>
                 <br>将在 <font id="second"></font> 秒后 <a href="<?php echo ($jumpUrl); ?>">返回上一页</a></p>
               </div>
			</div>
		</div>
	</div>
	<div id="login_bottom">
		版权所有
	</div>
</body>
</html>
<!--信息提示 end-->
<script>
function countDown(time,url){
　　$("#second").html(time);//<span>中显示的内容值
　　
　　if(--time>0){
　　   setTimeout("countDown("+time+",'"+url+"')",1000);//设定超时时间
　　}else{
         location.href=url;
       }
　　
　　}

   countDown(<?php echo ($waitSecond); ?>,'<?php echo ($jumpUrl); ?>');
</script>