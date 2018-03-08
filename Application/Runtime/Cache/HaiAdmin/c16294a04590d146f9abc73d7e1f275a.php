<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
 <html lang="zh-CN">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="/hong/Public/css/common.css">
   <link rel="stylesheet" href="/hong/Public/css/main.css">
   <script type="text/javascript" src="/hong/Public/js/jquery.min.js"></script>
   <script type="text/javascript" src="/hong/Public/js/colResizable-1.3.min.js"></script>
   <script type="text/javascript" src="/hong/Public/js/common.js"></script>
   
   
   <script type="text/javascript" charset="utf-8" src="/hong/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/hong/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/hong/Public/ueditor/lang/zh-cn/zh-cn.js"></script>

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
            <div class="box_top"><b class="pl15">添加信息</b></div>
            <div class="box_center">
                <form action="<?php echo U('Content/add');?>" class="jqtransform" method="post" enctype="multipart/form-data">
               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                   
                   
              <tr>
                  <td class="td_right">标题：</td>
                  <td class=""> 
                       <input type="text" name="title" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                 <tr>
                  <td class="td_right">电话：</td>
                  <td class=""> 
                       <input type="text" name="phone" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                 <tr>
                  <td class="td_right">邮箱：</td>
                  <td class=""> 
                       <input type="text" name="email" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                 <tr>
                  <td class="td_right">地址：</td>
                  <td class=""> 
                       <input type="text" name="address" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                 <tr>
                  <td class="td_right">图片：</td>
                  <td class=""> 
                       <input type="file" name="imagename" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                 <tr>
                  <td class="td_right">内容：</td>
                  <td class="" width="90%" style="height: 380px;display: inline-block;"> 
                     <textarea id="content" name="content" style="height: 240px;"></textarea>
                  </td>
              
                </tr>
                
               
                  <tr>
                  <td class="td_right">类型：</td>
                  <td class="" width="90%"> 
                      <input type="radio" value="1" name='type'>关于我们 <input type="radio" value="2" name='type'>联系我们 <input type="radio" value="3" name='type'>企业文化 <input type="radio" value="4" name='type'>团队介绍 
                  </td>
              
                </tr>
                
                  <tr>
                  <td class="td_right">位置：</td>
                  <td class="" width="90%"> 
                      <input type="radio" value="1" name='postion'>首页 <input type="radio" value="2" name='postion'>底部
                      <input type="radio" value="3" name='postion'>单页
                  </td>
              
                </tr>
                
                 <tr>
                   <td class="td_right">&nbsp;</td>
                   <td class="">
                  
                       
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