<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
 <html lang="zh-CN">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="/shafa/Public/css/common.css">
   <link rel="stylesheet" href="/shafa/Public/css/main.css">
   <script type="text/javascript" src="/shafa/Public/js/jquery.min.js"></script>
   <script type="text/javascript" src="/shafa/Public/js/colResizable-1.3.min.js"></script>
   <script type="text/javascript" src="/shafa/Public/js/common.js"></script>
   
   
   <script type="text/javascript" charset="utf-8" src="/shafa/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/shafa/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/shafa/Public/ueditor/lang/zh-cn/zh-cn.js"></script>

   <script type="text/javascript">
      $(function(){  
        $(".list_table").colResizable({
          liveDrag:true,
          gripInnerHtml:"<div class='grip'></div>", 
          draggingClass:"dragging", 
          minWidth:30
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
            <div class="box_top"><b class="pl15">修改信息</b></div>
            <div class="box_center">
                <form action="<?php echo U('Content/edit');?>" class="jqtransform" method="post" enctype="multipart/form-data">
               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                   
                   
              <tr>
                  <td class="td_right">标题：</td>
                  <td class=""> 
                      <input type="text" name="title" class="input-text lh30" size="40" value="<?php echo ($info["title"]); ?>">
                  </td>
              
                </tr>
                 <tr>
                  <td class="td_right">电话：</td>
                  <td class=""> 
                       <input type="text" name="phone" value="<?php echo ($info["phone"]); ?>" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                 <tr>
                  <td class="td_right">邮箱：</td>
                  <td class=""> 
                       <input type="text" name="email" value="<?php echo ($info["email"]); ?>" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                 <tr>
                  <td class="td_right">地址：</td>
                  <td class=""> 
                       <input type="text" name="address" value="<?php echo ($info["address"]); ?>" class="input-text lh30" size="40">
                  </td>
                   <tr>
                  <td class="td_right">图片：</td>
                  <td class=""> 
                       <img src="/shafa/Uploads/<?php echo ($info["imagename"]); ?>" width="100" height="100" />
                       <input type="file" name="imagename" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                </tr>
                 <tr>
                  <td class="td_right">内容：</td>
                  <td class="" width="90%"> 
                     <textarea id="content" name="content"><?php echo ($info["content"]); ?></textarea>
                  </td>
              
                </tr>
                <tr>
                  <td class="td_right">类型：</td>
                  <td class="" width="90%"> 
                      <input type="radio" value="1" name='type' <?php if(($info['type']) == "1"): ?>checked<?php endif; ?>>关于我们 <input type="radio" value="2" name='type' <?php if(($info['type']) == "2"): ?>checked<?php endif; ?>>联系我们 <input type="radio" value="3" name='type' <?php if(($info['type']) == "3"): ?>checked<?php endif; ?>>企业文化 <input type="radio" value="4" name='type' <?php if(($info['type']) == "4"): ?>checked<?php endif; ?>>团队介绍
                  </td>
              
                </tr>
               <tr>
                  <td class="td_right">位置：</td>
                  <td class="" width="90%"> 
                      <input type="radio" value="1" name='postion' <?php if(($info['postion']) == "1"): ?>checked<?php endif; ?>>首页 <input type="radio" value="2" name='postion' <?php if(($info['postion']) == "2"): ?>checked<?php endif; ?>>底部
                      <input type="radio" value="3" name='postion' <?php if(($info['postion']) == "3"): ?>checked<?php endif; ?>>单页
                  </td>
              
                </tr>
                 <tr>
                   <td class="td_right">&nbsp;</td>
                   <td class="">
                  
                       <input type="hidden" name='id' value="<?php echo ($info["id"]); ?>"> 
                     <input type="submit" name="button" class="btn btn82 btn_save2" value="保存"> 
                    <input type="reset" name="button" class="btn btn82 btn_res" value="重置"> 
                   </td>
                 </tr>
               </table>
               </form>
            </div>
          </div>
        </div>
     </div>
   </div> 
     <script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('content');
</script>
 </body>
 </html>