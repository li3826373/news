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
            <div class="box_top"><b class="pl15">Banner信息</b></div>
            <div class="box_center">
                <form action="<?php echo U('Banner/addbanner');?>" class="jqtransform" method="post" enctype="multipart/form-data">
               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
               
                 <tr>
                  <td class="td_right">标题 ：</td>
                  <td class=""> 
                      <input type="text" name="title" class="input-text lh30" size="40" value="<?php echo ($info["title"]); ?>" >
                  </td>
                  
                </tr>
               <tr>
                  <td class="td_right">链接 ：</td>
                  <td class=""> 
                    <input type="text" name="link" class="input-text lh30" size="40" value="<?php echo ($info["link"]); ?>" placeholder="输入连接地址">
                  </td>
                  
                </tr>
                 <tr>
                  <td class="td_right">状态 ：</td>
                  <td class=""> 
                   <input type="radio" name="state" value="0" <?php if(($info["state"]) == "0"): ?>checked<?php endif; ?>>显示
                   <input type="radio" name="state" value="1" <?php if(($info["state"]) == "1"): ?>checked<?php endif; ?>>隐藏
                  </td>
                  
                </tr>
                 <tr>
                  <td class="td_right">显示位置：</td>
                  <td class=""> 
                   <input type="radio" name="postion" value="1" <?php if(($info["postion"]) == "1"): ?>checked<?php endif; ?>>首页
                   <input type="radio" name="postion" value="2" <?php if(($info["postion"]) == "2"): ?>checked<?php endif; ?>>联系我们
                   <input type="radio" name="postion" value="3" <?php if(($info["postion"]) == "3"): ?>checked<?php endif; ?>>关于我们
                   <input type="radio" name="postion" value="4" <?php if(($info["postion"]) == "4"): ?>checked<?php endif; ?>>学员风采
                     <input type="radio" name="postion" value="5" <?php if(($info["postion"]) == "5"): ?>checked<?php endif; ?>>教师团队
                      <input type="radio" name="postion" value="6" <?php if(($info["postion"]) == "6"): ?>checked<?php endif; ?>>课程介绍
                      <input type="radio" name="postion" value="7" <?php if(($info["postion"]) == "7"): ?>checked<?php endif; ?>>校区分布
                  </td>
                  
                </tr>
                <tr>
                  <td class="td_right">排序 ：</td>
                  <td class=""> 
                  <input type="text" name="sort" class="input-text lh30" size="2" value="<?php echo ($info["sort"]); ?>">
                  </td>
                  
                </tr>
               <tr>
                  <td class="td_right">图片(300kb以内) ：</td>
                  <td class=""> 
                      <input type="file" name="imagename" class="input-text lh30" size="10">
                  </td>
                  
                </tr>
                
                 <tr>
                   <td class="td_right">&nbsp;</td>
                   <td class="">
                       <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                     <input type="submit" name="button" class="btn btn82 btn_save2" value="保存"> 
                  <input type="button" value="返回" onclick="location.href='javascript:history.go(-1)'" class="ext_btn">
                   </td>
                 </tr>
               </table>
               </form>
            </div>
          </div>
     
  </div>
 </body>
 </html>