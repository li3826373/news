<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
 <html lang="zh-CN">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="/hong/Public/css/common.css">
   <link rel="stylesheet" href="/hong/Public/css/main.css">
   <script type="text/javascript" src="/hong/Public/js/jquery.min.js"></script>
   <script type="text/javascript" src="/hong/Public/js/colResizable-1.3.min.js"></script>
   <script type="text/javascript" src="/hong/Public/js/common.js"></script>
   
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
       <input type="button" name="button" class="btn btn82 btn_add" value="新增" onclick="location.href='<?php echo U('AdminUser/add');?>'"> 
        
     </div>
        <div id="table" class="mt10">
      <div class="box span10 oh ">
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                   <th width="100">ID</th>
                   <th >管理员</th>             
                   <th>操作</th>
                 </tr>
                    <tbody id="list">
              <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr">
                   <td class="td_center"><?php echo ($vo["id"]); ?></td>
                   <td><?php echo ($vo["username"]); ?></td>              
                   <td>
                   <?php if(($vo["state"]) == "0,1,2,3,4,5"): ?>超级管理员 <a href="<?php echo U('AdminUser/edit',array('id'=>$vo['id']));?>">修改</a>
                   <?php else: ?>
                   <a href="<?php echo U('AdminUser/edit',array('id'=>$vo['id']));?>">修改</a>
                      <a href="<?php echo U('AdminUser/del',array('id'=>$vo['id']));?>">删除</a><?php endif; ?>
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