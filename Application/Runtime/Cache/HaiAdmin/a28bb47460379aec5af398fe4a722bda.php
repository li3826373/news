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
            <div id="button" class="mt10">

                <input type="button" value="新增" class="btn btn82 btn_add" onclick="location.href = '<?php echo U('Banner/addbanner');?>'">



            </div>
            <div id="table" class="mt10">
                <div class="box span10 oh">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                        <tr>

                            <th width="80" >ID</th>
                            <th >标题 </th>
                            <th width="480">图片 </th>
                            <th width="180">URL </th>  
                            <th width="220">操作</th>
                        </tr>
                        <tbody id="list">


                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="tr">
                                <td><?php echo ($v["id"]); ?></td>
                                <td ><?php echo ($v["title"]); ?></td>
                                <td ><img src="/mymy/Uploads/<?php echo ($v["imagename"]); ?>" width="200" height="100"></td>
                                 <td ><?php echo ($v["link"]); ?></td>
                                <td><a href="<?php echo U('Banner/addbanner',array('id'=>$v['id']));?>">修改</a> 　 <a href="javascript:void()" onclick="del($(this),<?php echo ($v['id']); ?>)">删除</a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                        </tbody>
                    </table>
                    <div class="page mt10">
                        <div class="pagination">                         
                            <?php echo ($pagesize); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>
<script type="text/javascript">
  $(function(){
     $(".pagination").find("div").css("text-align","center");
     $(".pagination").find("div").find("a").css("margin-left","5px");

  })
function del(obj,id){
    $.ajax({
    "url":"<?php echo U('Banner/del');?>",
    "type":"post",
    "data":{"id":id},
    "dataType":"json",
    "error":function(){alert('删除失败')},
    "success":function(re){
           if(re.state==1){
            obj.parent().parent().remove();
           }
           alert(re.msg);

    }
 

    });

}
</script>