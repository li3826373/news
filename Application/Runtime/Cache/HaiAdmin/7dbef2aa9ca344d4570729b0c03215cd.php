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
<script type="text/javascript" charset="utf-8" src="/mymy/Public/ueditor/ueditor.all.min.js"> </script>
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
            <div class="box_top"><b class="pl15">添加新闻</b></div>
            <div class="box_center">
                <form action="<?php echo U('News/add');?>" class="jqtransform" method="post" enctype="multipart/form-data">
               <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                   
                   
              <tr>
                  <td class="td_right">标题：</td>
                  <td class=""> 
                       <input type="text" name="title" class="input-text lh30" size="40" onfocus="this.value=''">
                  </td>
              
                </tr>
                <tr>
                  <td class="td_right">新闻类型：</td>
                 <td class=""> 
                      <select name="typeid" class="select"> 
                          <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                  </td>
                  
                </tr>
                <tr class="school">
                  <td class="td_right">校区：</td>
                  <td class=""> 
                      <input type="radio" value="1" name="area">金水区 <input type="radio" value="2" name="area">惠济区  <input type="radio" value="3" name="area">取消
                  </td>  
                </tr>
                <tr class="school">
                  <td class="td_right">公司地址：</td>
                  <td class=""> 
                       <input type="text" name="companyaddr" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                 <tr class="school">
                  <td class="td_right">公司邮箱：</td>
                  <td class=""> 
                       <input type="text" name="companyemail" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                 <tr class="school">
                  <td class="td_right">客服电话：</td>
                  <td class=""> 
                       <input type="text" name="kephone" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                 <tr class="school">
                  <td class="td_right">客服邮箱：</td>
                  <td class=""> 
                       <input type="text" name="keemail" class="input-text lh30" size="40">
                  </td>
              
                </tr>
                <!--  <tr class="school">
                 <td class="td_right">商务电话：</td>
                 <td class=""> 
                      <input type="text" name="shangphone" class="input-text lh30" size="40">
                 </td>
                              
                                </tr>
                <tr class="school">
                 <td class="td_right">商务邮箱：</td>
                 <td class=""> 
                      <input type="text" name="shangemail" class="input-text lh30" size="40">
                 </td>
                              
                                </tr> -->
                  <tr>
                  <td class="td_right">新闻图片(200kb以内)：</td>
                  <td class=""> 
                      <input type='file' name="imagename">
                  </td>  
                </tr>
                <tr class="wudao">
                  <td class="td_right">舞蹈视频(.mp4格式 3M以内)：</td>
                  <td class=""> 
                      <input type='file' name="lookurl">
                  </td>  
                </tr>
                  <tr class="wudao">
                  <td class="td_right">音乐：</td>
                  <td class=""> 
                     <input type="text" name="music" class="input-text lh30" size="30">
                    
                  </td>  
                </tr>
                <tr class="wudao">
                  <td class="td_right">授课老师：</td>
                  <td class=""> 
                     <input type="text" name="teacher" class="input-text lh30" size="30">
                    
                  </td>  
                </tr>
                  <tr>
                  <td class="td_right">自定义属性：</td>
                  <td class=""> 
                      <input type="radio" value="1" name="hot">首页推荐 <input type="radio" value="2" name="hot">精彩视频 <input type="radio" value="4" name="hot">首页推荐视频 <input type="radio" value="5" name="hot">热门 <input type="radio" value="6" name="hot">头条 <input type="radio" value="7" name="hot">图片 <input type="radio" value="3" name="hot">取消
                  </td>  
                </tr>
                  <tr>
                  <td class="td_right">排序：</td>
                  <td class=""> 
                     <input type="text" name="sort" class="input-text lh30" size="10">
                  </td>  
                </tr>
                 <tr>
                  <td class="td_right">点击率：</td>
                  <td class=""> 
                     <input type="text" name="hit" class="input-text lh30" size="10">
                  </td>  
                </tr>
              
                 <tr>
                  <td class="td_right">简介：</td>
                  <td class=""> 
                    <textarea name="describle" rows="5" cols="30"></textarea>
                  </td>  
                </tr>
                
                 <tr>
                  <td class="td_right">内容：</td>
                  <td class="" width="90%"> 
                     <textarea id="content" name="content"></textarea>
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
 <script type="text/javascript">
 $(function(){
    $(".school").hide();
    $(".wudao").hide();
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
  });

   $("form").submit(function(){
           var title=$("input[name='title']").val();
           var type=$("select").val();
             if(title==""){
                 $("input[name='title']").attr("placeholder","请填写标题").css("color","red");
                 $("input[name='title']").focus();
                 return false;
             }else{
                  $("form").submit();
             }
   })


 })
 </script>