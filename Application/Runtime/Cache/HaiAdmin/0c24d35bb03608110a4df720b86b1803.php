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
                <table width="100%" border="0">
                    <tr>

                        <td > 
                            <input type="button" name="button" class="btn btn82 btn_add" value="新增" onclick="location.href='<?php echo U('News/addtype');?>'">
                            &nbsp;&nbsp;
                        
                        </td>

                        <td width="35%">
                        </td>

                    </tr>
                </table>



            </div>
            <div id="table" class="mt10">
                <div class="box span10 oh">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                        <tr>

                            <th width="150" >ID</th>
                            <th width="350">标题</th>
                            <th width="100">显示在导航菜单</th>
                            <th>操作</th>
                        </tr>
                        <tbody id="list">

                            
                            
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr">

                                <td><?php echo ($vo["id"]); ?></td>
                                <td class="td_left"><?php echo ($vo["typename"]); ?></td>
                              <td class="td_left"><?php if(($vo["state"]) == "1"): ?>显示<?php endif; if(($vo["state"]) == "2"): ?>不显示<?php endif; ?></td>
                               
                              <td><a href="<?php echo U('News/edit',array('id'=>$vo['id']));?>">修改</a> <a href="<?php echo U('News/deltype',array('id'=>$vo['id']));?>">删除</a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            
                            


                        </tbody>
                    </table>

                </div>
            </div>
        </div> 
    </body>
</html>