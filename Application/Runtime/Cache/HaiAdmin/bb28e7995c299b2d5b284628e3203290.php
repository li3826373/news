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
      
      <div id="button" class="mt10">
       <input type="button" name="button" class="btn btn82 btn_add" value="新增" onclick="location.href='<?php echo U('Friend/add');?>'"> 
        
     </div>
        <div id="table" class="mt10">
      <div class="box span10 oh ">
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                   <th width="100">ID</th>
                   <th >名称</th>             
                   <th>操作</th>
                 </tr>
                    <tbody id="list">
              <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr">
                   <td class="td_center"><?php echo ($vo["id"]); ?></td>
                   <td><?php echo ($vo["title"]); ?></td>              
                   <td>
                  
                   <a href="<?php echo U('Friend/editor',array('id'=>$vo['id']));?>">修改</a>
                      <a href="<?php echo U('Friend/del',array('id'=>$vo['id']));?>">删除</a>
                
                   </td>            
                 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
              </table>
              <div class="page mt10">
                <div class="pagination">
                  <?php echo ($page); ?>
                </div>

              </div>
        </div>   
        </div>
  </div>
 </body>
 </html>