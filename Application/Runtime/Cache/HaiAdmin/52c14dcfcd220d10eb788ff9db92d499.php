<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
 <html lang="zh-CN">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="/mymy/Public/css/common.css">
   <link rel="stylesheet" href="/mymy/Public/css/main.css">
   <script type="text/javascript" src="/mymy/Public/js/jquery.min.js"></script>
   <script type="text/javascript" src="/mymy/Public/js/colResizable-1.3.min.js"></script>
   <script type="text/javascript" src="/mymy/Public/js/common.js"></script>
   
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
            <div class="box_top"><b class="pl15">菜单</b></div>
            <div class="box_center">
                <form action="<?php echo U('News/edit');?>" class="jqtransform" method="post" enctype="multipart/form-data">
               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                  <td class="td_right">分类名称：</td>
                  <td class=""> 
                    <input type="text" name="typename" class="input-text lh30" size="40" value="<?php echo ($info["typename"]); ?>">
                  </td>
              
                </tr>
                 <tr>
                  <td class="td_right">分类图片：</td>
                  <td class=""> 
                    <input type="file" name="imagecate" class="input-text lh30" size="40">
                    <img src="/mymy/Uploads/<?php echo ($info["imagecate"]); ?>">
                  </td>
              
                </tr>
                <tr>
                  <td class="td_right">分类简介：</td>
                  <td class=""> 
                    <input type="text" name="describle" class="input-text lh30" size="100">
                  </td>
              
                </tr>
                  <tr>
                  <td class="td_right">排序：</td>
                  <td class=""> 
                    <input type="text" name="sort" class="input-text lh30" size="10" value="<?php echo ($info["sort"]); ?>">
                  </td>
              
                </tr>
                <tr>
                  <td class="td_right">显示在导航菜单：</td>
                  <td class=""> 
                    <input type="radio" value="1" name="state" <?php if(($info["state"]) == "1"): ?>checked<?php endif; ?>>显示在导航菜单 <input type="radio" value="2" name="state" <?php if(($info["state"]) == "2"): ?>checked<?php endif; ?>>不显示在导航菜单
                  </td>
              
                </tr>
                  <tr>
                  <td class="td_right">上级分类：</td>
                  <td class=""> 
                      <select name="fid" class="select"> 
                          <option value="0">一级分类</option> 
                          <?php if(is_array($re)): $i = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>" <?php if(($v["id"]) == $info["fid"]): ?>selected<?php endif; ?>><?php echo ($v["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                  </td>
              
                </tr>
                 <tr>
                   <td class="td_right">&nbsp;</td>
                   <td class="">
                       <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
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
 </body>
 </html>