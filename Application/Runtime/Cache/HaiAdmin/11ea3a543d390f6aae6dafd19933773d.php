<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
 <html lang="zh-CN">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="/mymy/Public/css/common.css">
   <link rel="stylesheet" href="/mymy/Public/css/main.css">
   <script type="text/javascript" src="/mymy/Public/js/jquery.min.js"></script>
   <script type="text/javascript" src="/mymy/Public/js/colResizable-1.3.min.js"></script>
   <script type="text/javascript" src="/mymy/Public/js/common.js"></script>
   
   
   <script type="text/javascript" charset="utf-8" src="/mymy/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/mymy/Public/ueditor/ueditor.all.js"> </script>
<script type="text/javascript" charset="utf-8" src="/mymy/Public/ueditor/lang/zh-cn/zh-cn.js"></script>

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
            <div class="box_top"><b class="pl15">修改新闻</b></div>
            <div class="box_center">
                <form action="<?php echo U('News/modnews');?>" class="jqtransform" method="post" enctype="multipart/form-data">
               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                   
                   
              <tr>
                  <td class="td_right">标题：</td>
                  <td class=""> 
                       <input type="text" name="title" class="input-text lh30" size="40" value="<?php echo ($info["title"]); ?>">
                  </td>
              
                </tr>
                <tr>
                  <td class="td_right">新闻类型：</td>
                 <td class=""> 
                      <select name="typeid" class="select"> 
                          <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>" <?php if(($v["id"]) == $info["typeid"]): ?>selected<?php endif; ?>><?php echo ($v["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                  </td>
              
                </tr>
                <tr class="school">
                  <td class="td_right">校区：</td>
                  <td class=""> 
                      <input type="radio" value="1" name="area" <?php if(($info["area"]) == "1"): ?>checked<?php endif; ?>>金水区 <input type="radio" value="2" name="area" <?php if(($info["area"]) == "2"): ?>checked<?php endif; ?>>惠济区  <input type="radio" value="3" name="area">取消
                  </td>  
                </tr>
                 <tr class="school">
                  <td class="td_right">公司地址：</td>
                  <td class=""> 
                       <input type="text" name="companyaddr" class="input-text lh30" size="40" value="<?php echo ($info["companyaddr"]); ?>">
                  </td>
              
                </tr>
                 <tr class="school">
                  <td class="td_right">公司邮箱：</td>
                  <td class=""> 
                       <input type="text" name="companyemail" class="input-text lh30" size="40" value="<?php echo ($info["companyemail"]); ?>">
                  </td>
              
                </tr>
                 <tr class="school">
                  <td class="td_right">客服电话：</td>
                  <td class=""> 
                       <input type="text" name="kephone" class="input-text lh30" size="40" value="<?php echo ($info["kephone"]); ?>">
                  </td>
              
                </tr>
                 <tr class="school">
                  <td class="td_right">客服邮箱：</td>
                  <td class=""> 
                       <input type="text" name="keemail" class="input-text lh30" size="40" value="<?php echo ($info["keemail"]); ?>">
                  </td>
              
                </tr>
               <!--   <tr class="school">
                <td class="td_right">商务电话：</td>
                <td class=""> 
                     <input type="text" name="shangphone" class="input-text lh30" size="40" value="<?php echo ($info["shangphone"]); ?>">
                </td>
                             
                               </tr>
               <tr class="school">
                <td class="td_right">商务邮箱：</td>
                <td class=""> 
                     <input type="text" name="shangemail" class="input-text lh30" size="40"
                     value="<?php echo ($shangemail); ?>">
                </td>
                             
                               </tr> -->
                  <tr>
                  <td class="td_right">新闻图片(200kb以内)：</td>
                  <td class=""> 
                      <input type='file' name="imagename"><img src="/mymy/Uploads/<?php echo ($info["imagename"]); ?>" width="100" height="100">
                  </td>  
                </tr>
                 <tr class="wudao">
                  <td class="td_right">视频(.mp4格式3M以内)：</td>
                  <td class=""> 
                     <input type="file" name="lookurl" class="input-text lh30" size="30">
                    
                  </td>  
                </tr>
                <tr class="wudao">
                  <td class="td_right">音乐：</td>
                  <td class=""> 
                     <input type="text" name="music" class="input-text lh30" size="30" value="<?php echo ($info["music"]); ?>">
                    
                  </td>  
                </tr>
                <tr class="wudao">
                  <td class="td_right">授课老师：</td>
                  <td class=""> 
                     <input type="text" name="teacher" class="input-text lh30" size="30" value="<?php echo ($info["teacher"]); ?>">
                    
                  </td>  
                </tr>
                  <tr>
                  <td class="td_right">推荐位：</td>
                  <td class=""> 
                      <input type="radio" value="1" name="hot" <?php if(($info["hot"]) == "1"): ?>checked<?php endif; ?>>首页推荐 <input type="radio" value="2" name="hot" <?php if(($info["hot"]) == "2"): ?>checked<?php endif; ?>>精彩视频 <input type="radio" value="4" name="hot" <?php if(($info["hot"]) == "4"): ?>checked<?php endif; ?>>首页推荐视频 
                      <input type="radio" value="5" name="hot" <?php if(($info["hot"]) == "5"): ?>checked<?php endif; ?>>热门 <input type="radio" value="6" name="hot" <?php if(($info["hot"]) == "6"): ?>checked<?php endif; ?>>头条 <input type="radio" value="7" name="hot" <?php if(($info["hot"]) == "7"): ?>checked<?php endif; ?>>图片
                      <input type="radio" value="3" name="hot">取消
                  </td>  
                </tr>
                  <tr>
                  <td class="td_right">排序：</td>
                  <td class=""> 
                     <input type="text" name="sort" class="input-text lh30" size="10" value="<?php echo ($info["sort"]); ?>">
                  </td>  
                </tr>
                 <tr>
                  <td class="td_right">点击率：</td>
                  <td class=""> 
                     <input type="text" name="hit" class="input-text lh30" size="10" value="<?php echo ($info["hit"]); ?>">
                  </td>  
                </tr>
                
                 <tr>
                  <td class="td_right">简介：</td>
                  <td class=""> 
                    <textarea name="describle" rows="5" cols="30"><?php echo ($info["describle"]); ?></textarea>
                  </td>  
                </tr>
                
                 <tr>
                  <td class="td_right">内容：</td>
                  <td class="" width="90%"> 
                     <textarea id="content" name="content"><?php echo ($info["content"]); ?></textarea>
                  </td>
              
                </tr>
                
               
                
                 <tr>
                   <td class="td_right">&nbsp;</td>
                   <td class="">
                  
                         <input type="hidden" name="articleid"  value="<?php echo ($info["articleid"]); ?>"> 
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
  <script type="text/javascript">
 $(function(){
    $(".school").hide();
    $(".wudao").hide();
    var d=$(".select").val();
    if(d==11){
        $(".school").show(); 
    }
    if(d==9){
        $(".wudao").show();
    }
  $(".select").change(function(){

       var id=$(this).val();
         if(id==11){
              $(".school").show();
         }else{
          $(".school").hide();
         }

         if(id==9){
             $(".wudao").show();
         }else{
              $(".wudao").hide();
         }
  })


 })
 </script>