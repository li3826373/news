<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/hong/Public/css/common.css">
        <link rel="stylesheet" href="/hong/Public/css/main.css">
        <script type="text/javascript" src="/hong/Public/js/jquery.min.js"></script>
        <script type="text/javascript" src="/hong/Public/js/colResizable-1.3.min.js"></script>
        <script type="text/javascript" src="/hong/Public/js/common.js"></script>
        
    

        <script type="text/javascript">
            $(function () {
                $(".list_table").colResizable({
                    liveDrag: true,
                    gripInnerHtml: "<div class='grip'></div>",
                    draggingClass: "dragging",
                    minWidth: 30
                });

            });
        </script>
        <title>Document</title>
    </head>
    <body>
        <div class="container">
         <div id="forms" class="mt10">
        <div class="box">
          <div class="box_border">
            <div class="box_top"><b class="pl15">添加</b></div>
            <div class="box_center">
                <form action="<?php echo U('AdminUser/add');?>" class="jqtransform" method="post">
               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                   
                 <tr>
                  <td class="td_right">用户名：</td>
                  <td class=""> 
                    <input type="text" name="username" class="input-text lh30 username" size="40" onfocus="this.value=''">
                  </td>
                </tr>
                
                   <tr>
                  <td class="td_right">密码：</td>
                  <td class=""> 
                    <input type="text" name="password" class="input-text lh30 password" size="40" onfocus="this.value=''">
                  </td>
                </tr>
          
                 <tr>
                  <td class="td_right">权限：</td>
                  <td class=""> 
                    <input type="checkbox" name="state[]" class="lh30" value="0">新闻管理
                    <input type="checkbox" name="state[]" class="lh30" value="1">报名管理
                    <input type="checkbox" name="state[]" class="lh30" value="2">其他管理
                     <input type="checkbox" name="state[]" class="lh30" value="3">系统设置
                      <input type="checkbox" name="state[]" class="lh30" value="4">移动端新闻管理
                       <input type="checkbox" name="state[]" class="lh30" value="5">移动端其他管理
                  </td>
                </tr>
                
                
                 <tr>
                   <td class="td_right">&nbsp;</td>
                   <td class="">
                       
                     <input type="submit" name="button" class="btn btn82 btn_save2" value="保存"> 
                     <input type="button" name="button" class="btn btn82 btn_res" value="返回" onclick="history.go(-1)"> 
                   </td>
                 </tr>
               </table>
               </form>
            </div>
          </div>
        </div>
     </div>
        </div> 
        
        

    </body>
</html>
<script type="text/javascript">
     $(function(){
            $("form").submit(function(){
                var username=$(".username").val();
                 var password=$(".pwd").val();
                  var reg=/\w/;
                  if(username==""){
                  
                       $(".username").css("color","red").val('请输入用户名');
                       return false;
                  }else if(reg.test(username)==false){
                      $(".username").css("color","red").val('用户名格式为数字字母下划线');
                      return false;
                  }
                  else if(password=="") {
                       $(".pwd").css("color","red").val('请输入密码');
                       return false;
                  }else if(reg.test(password)==false) {
                       $(".pwd").css("color","red").val('密码格式为数字字母下划线');
                       return false;
                  }
                  else{

                        $("form").submit();
                  }


            })


     })


</script>