<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/mymy/Public/css/common.css">
        <link rel="stylesheet" href="/mymy/Public/css/main.css">
        <script type="text/javascript" src="/mymy/Public/js/jquery.min.js"></script>
        <script type="text/javascript" src="/mymy/Public/js/colResizable-1.3.min.js"></script>
        <script type="text/javascript" src="/mymy/Public/js/common.js"></script>
        
    

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
            <div class="box_top"><b class="pl15">修改</b></div>
            <div class="box_center">
                <form action="<?php echo U('Friend/editor');?>" class="jqtransform" method="post" enctype="multipart/form-data">
               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                   
                 <tr>
                  <td class="td_right">名称：</td>
                  <td class=""> 
                    <input type="text" name="title" class="input-text lh30 username" size="40" value='<?php echo ($info["title"]); ?>'>
                  </td>
                </tr>
                
                   <tr>
                  <td class="td_right">链接：</td>
                  <td class=""> 
                    <input type="text" name="link" class="input-text lh30 pwd" size="40" value="<?php echo ($info["link"]); ?>">
                  </td>
                </tr>
                
                  <tr>
                  <td class="td_right">图片：</td>
                  <td class=""> 
                    <input type="file" name="imagename" class="input-text lh30 pwd" size="40">
                    <img src="/mymy/Uploads/<?php echo ($info["imagename"]); ?>">
                  </td>
                </tr>
                
                 <tr>
                   <td class="td_right">&nbsp;</td>
                   <td class="">
                       <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>"> 
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