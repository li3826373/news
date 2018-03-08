<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/shafa/Public/css/common.css">
        <link rel="stylesheet" href="/shafa/Public/css/main.css">
        <script type="text/javascript" src="/shafa/Public/js/jquery.min.js"></script>
        <script type="text/javascript" src="/shafa/Public/js/colResizable-1.3.min.js"></script>
        <script type="text/javascript" src="/shafa/Public/js/common.js"></script>

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
            <div id="button" class="mt10">
            </div>
            <div id="table" class="mt10">
                <div class="box span10 oh">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                        <tr>

                            <th width="150" >ID</th>
                            <th width="80">姓名</th>
                            <th width="150">电话</th>
                            <th width="280">时间</th>

                            <th>操作</th>
                        </tr>
                        <tbody id="list">

                            
                            
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr">

                                <td><?php echo ($vo["id"]); ?></td>
                                <td class="td_left"><?php echo ($vo["name"]); ?></td>
                                 <td class="td_left"><?php echo ($vo["phone"]); ?></td>
                                 <td><?php echo ($vo["addtime"]); ?></td>

                                <td><a href="<?php echo U('Bao/look',array('id'=>$vo['id']));?>">查看</a>&nbsp;&nbsp;&nbsp;<a href="javascript:void()" onclick="del($(this),<?php echo ($vo["id"]); ?>)">删除</a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            
                            


                        </tbody>
                    </table>
                    <?php echo ($pagesize); ?>
                </div>
            </div>
        </div> 
    </body>
</html>
<script type="text/javascript">
 function del(obj,id){
        $.post("<?php echo U('Bao/delete');?>",{"id":id},function(re){
                if(re.state==1){
                      obj.parents(".tr").remove(); 
                }else{
                     alert(re.msg);
                }

        },"json");

 }
</script>