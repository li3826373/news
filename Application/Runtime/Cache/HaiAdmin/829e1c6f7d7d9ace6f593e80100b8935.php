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
                <table width="100%" border="0">
                    <tr>

                        <td > 
                            <input type="button" name="button" class="btn btn82 btn_add" value="新增" onclick="location.href='<?php echo U('Content/add');?>'"></td>

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
                            <th width="80">类型</th>
                            <th>位置</th>
                            <th width="280">添加时间</th>

                            <th>操作</th>
                        </tr>
                        <tbody id="list">

                            
                            
                            <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr">

                                <td><?php echo ($vo["id"]); ?></td>
                                <td class="td_left"><?php echo ($vo["title"]); ?></td>
<td class="td_left"><?php if(($vo['type']) == "1"): ?>关于我们<?php endif; if(($vo['type']) == "2"): ?>联系我们<?php endif; if(($vo['type']) == "3"): ?>企业文化<?php endif; if(($vo['type']) == "4"): ?>团队介绍<?php endif; ?></td>
                                <td>
                               <?php if(($vo["postion"]) == "1"): ?>首页<?php endif; ?>
                               <?php if(($vo["postion"]) == "2"): ?>底部<?php endif; ?>
                               <?php if(($vo["postion"]) == "3"): ?>单页<?php endif; ?>

                                </td>
                                <td><?php echo ($vo["addtime"]); ?></td>

                                <td><a href="<?php echo U('Content/edit',array('id'=>$vo['id']));?>">修改</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Content/del',array('id'=>$vo['id']));?>">删除</a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            
                            


                        </tbody>
                    </table>

                </div>
            </div>
        </div> 
    </body>
</html>