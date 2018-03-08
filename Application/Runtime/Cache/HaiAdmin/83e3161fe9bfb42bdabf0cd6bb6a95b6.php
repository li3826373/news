<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
 <html lang="zh-CN">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="/mymy/Public/css/common.css">
   <link rel="stylesheet" href="/mymy/Public/css/main.css">
   <script type="text/javascript" src="/mymy/Public/js/jquery.min.js"></script>
   <title>Document</title>
 </head>
 <body>
   <div class="container">
 <div class="box_border">
            <div class="box_top"><b class="pl15">配置信息</b></div>
            <div class="box_center">
                <form action="<?php echo U('Index/config');?>" class="jqtransform" method="post" enctype="multipart/form-data">
               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
               
                 <tr>
                  <td class="td_right">标题 ：</td>
                  <td class=""> 
                    <input type="text" name="title" class="input-text lh30" size="40" value='<?php echo ($info["title"]); ?>'>
                  </td>
                  
                </tr>
                 <tr>
                  <td class="td_right">联系方式 ：</td>
                  <td class=""> 
                    <input type="text" name="phone" class="input-text lh30" size="40" value='<?php echo ($info["phone"]); ?>'>
                  </td>
                  
                </tr>
                 <tr>
                  <td class="td_right">邮箱：</td>
                  <td class=""> 
                    <input type="text" name="email" class="input-text lh30" size="40" value='<?php echo ($info["email"]); ?>'>
                  </td>
                  
                </tr>
                 <tr>
                  <td class="td_right">地址 ：</td>
                  <td class=""> 
                    <input type="text" name="address" class="input-text lh30" size="40" value='<?php echo ($info["address"]); ?>'>
                  </td>
                  
                </tr>
                <?php if(empty($info["weixin_code"])): ?><tr>
                  <td class="td_right">头部二维码(88px*88px) ：</td>
                  <td class=""> 
                    <input type="file" name="weixin_code" class="input-text lh30" size="40">
                  </td>
                  
                </tr>
                <?php else: ?>
                <tr>
                  <td class="td_right">头部二维码(88px*88px) ：</td>
                  <td class=""> 
                    <img src="/mymy/Uploads/<?php echo ($info["weixin_code"]); ?>" width="100" height="100">
                    <span style="cursor: pointer;" onclick="change($(this))">更换二维码</span>
                  </td>
                  
                </tr><?php endif; ?>
                <?php if(empty($info["foot_code"])): ?><tr>
                  <td class="td_right">底部二维码(150px*150px) ：</td>
                  <td class=""> 
                    <input type="file" name="foot_code" class="input-text lh30" size="40">
                  </td>
                  
                </tr>
                <?php else: ?>
                <tr>
                  <td class="td_right">底部二维码(150px*150px) ：</td>
                  <td class=""> 
                    <img src="/mymy/Uploads/<?php echo ($info["foot_code"]); ?>" width="100" height="100">
                    <span style="cursor: pointer;" onclick="change1($(this))">更换二维码</span>
                  </td>
                  
                </tr><?php endif; ?>
                <tr>
                  <td class="td_right">logo(500px*96px) ：</td>
                  <td class=""> 
                    <img src="/mymy/Uploads/<?php echo ($info["logo"]); ?>" width="300" height="100">
                    <input type="file" name="logo">
                  </td>
                  
                </tr>
                 <tr>
                  <td class="td_right">关键字 ：</td>
                  <td class=""> 
                    <input type="text" name="keyword" class="input-text lh30" size="40" value='<?php echo ($info["keyword"]); ?>'>
                  </td>
                  
                </tr>
                <tr>
                  <td class="td_right">咨询qq ：</td>
                  <td class=""> 
                    <input type="text" name="qq" class="input-text lh30" size="40" value='<?php echo ($info["qq"]); ?>'>
                  </td>
                  
                </tr>
                 <tr>
                  <td class="td_right">icp ：</td>
                  <td class=""> 
                    <input type="text" name="icp" class="input-text lh30" size="40" value='<?php echo ($info["icp"]); ?>'>
                  </td>
                  
                </tr>
                <tr>
                  <td class="td_right">优酷client_id ：</td>
                  <td class=""> 
                    <input type="text" name="client_id" class="input-text lh30" size="40" value='<?php echo ($info["client_id"]); ?>'>
                  </td>
                  
                </tr>
                <tr>
                  <td class="td_right">优酷access_token ：</td>
                  <td class=""> 
                    <input type="text" name="access_token" class="input-text lh30" size="40" value='<?php echo ($info["access_token"]); ?>'>
                  </td>
                  
                </tr>
                <tr>
                  <td class="td_right">描述 ：</td>
                  <td class=""> 
                   <textarea name="describle" id="" cols="30" rows="10" class="textarea"><?php echo ($info["describle"]); ?></textarea>
                  </td>
                  
                </tr>
              
                 
                
                 <tr>
                   <td class="td_right">&nbsp;</td>
                   <td class="">
                       <input type="hidden" name="id" value='<?php echo ($info["id"]); ?>'>
                     <input type="submit" name="button" class="btn btn82 btn_save2" value="保存"> 
                
                   </td>
                 </tr>
               </table>
               </form>
            </div>
          </div>
     </div>
 
 </body>
 </html>
 <script type="text/javascript">
   //更换二维码
   function change(obj){
       obj.parent().html(' <input type="file" name="weixin_code" class="input-text lh30" size="40">') ;
     
   }
   //更换二维码
   function change1(obj){
       obj.parent().html(' <input type="file" name="foot_code" class="input-text lh30" size="40">') ;
     
   }
 </script>