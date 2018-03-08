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
				<form action="<?php echo U('index');?>" method="post">
					<div id="login_tip">
						用户登录&nbsp;&nbsp;UserLogin  
					</div>
					<div><input type="text" class="username" name="username"></div>
					<div><input type="text" class="pwd" name="password"></div>
					<div id="btn_area">
						<input type="submit" name="submit" id="sub_btn" value="登&nbsp;&nbsp;录">&nbsp;&nbsp;
						<input type="text" class="verify" name="verify" onfocus="this.value=''">
						<img src="<?php echo U('Login/verify');?>" alt="" width="80" height="40" onclick="change(this)" style="cursor: pointer;">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="login_bottom">
		版权所有
	</div>
</body>
</html>
<script type="text/javascript">
     $(function(){
          $("form").submit(function(){
                  var username=$(".username").val();
                  var password=$(".pwd").val();
                  var verify=$(".verify").val();

                  if(username==""){
                  
                       $(".username").css("color","red").val('请输入用户名');
                       return false;
                  }else if(password=="") {
                  	   $(".pwd").css("color","red").val('请输入密码');
                       return false;
                  }else if(verify==""){
                         $(".verify").css("color","red").val('请输入验证码');
                       return false;
                  }
                  else{

                  	    $("form").submit();
                  }
                
          })

     })


</script>