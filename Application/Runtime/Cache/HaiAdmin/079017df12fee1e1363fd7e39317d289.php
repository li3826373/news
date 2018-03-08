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
                $('#selectAll').click(function () {
                    //全选
                    var ss = $("#selectAll").prop('class');
                    if (ss == 'btn btn82 btn_nochecked') {
                        $('#list :checkbox').prop('checked', true);
                        $("#selectAll").prop('class', 'btn btn82 btn_checked');
                    } else {
                        $('#list :checkbox').prop('checked', false);
                        $("#selectAll").prop('class', 'btn btn82 btn_nochecked');
                    }
                });

                $('#selectdel').click(function () {
                    var valArr = new Array;
                    $('#list :checkbox[checked]').each(function (i) {
                        valArr[i] = $(this).val();
                    });
                    var vals = valArr.join(',');// 方法用于把数组中的所有元素放入一个字符串。//1,2,3
                    if (vals == '') {
                        alert('请选择要删除的记录');
                        return;
                    }
                    
                    //AJAX提交到PHP中处理
                    $.ajax({
                        url: '<?php echo U('News/selectDel');?>',
                        type: 'post',
                        data: {'ids': vals},
                        dataType: 'json',
                        success: function (d) {
                            if (d.state == 1) {
                                //删除成功
                                window.location.reload();//刷新当前页 
                            } else if (d == 2) {
                                //删除失败
                                alert('删除失败');
                            } 
                        }
                    });

                });

            });
        </script>
        <title>Document</title>
    </head>
    <body>

        <div class="container">
            <div id="button" class="mt10">
                 <form  action="<?php echo U('News/index');?>" method="get" style="float: right;margin-right: 300px;">
                    <select class="select" name="typeid">
                    <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($typeid) == $vo["id"]): ?>selected<?php endif; ?>><?php echo ($vo["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="submit" value="搜索" class="btn btn82 btn_save2">
                 </form>
                <table width="50%" border="0" style="float: left;">
                    <tr>

                        <td >    <input type="button" name="button2" class="btn btn82 btn_nochecked" value="全选" id="selectAll">
                            <input type="button" name="button" class="btn btn82 btn_del" value="删除" id="selectdel">
                           
                            <input type="button" name="button" class="btn btn82 btn_add" value="新增" onclick="location.href='<?php echo U('News/add');?>'">
                            
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
                            <th width="40"></th>
                            <th width="80" >编号</th>
                            <th >标题</th>
                            <th>属性</th>
                            <th width="100">分类</th>
                            <th width="200">添加时间</th>

                            <th width="200">操作</th>
                        </tr>
                        <tbody id="list">
                          <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr">
                                <td class="td_center"><input type="checkbox" value="<?php echo ($vo["articleid"]); ?>"></td>
                                <td><?php echo ($vo["articleid"]); ?></td>
                                <td class="td_left"><?php echo ($vo["title"]); ?></td>
                                <td>
                                <?php if(($vo["hot"]) == "1"): ?>首页推荐<?php endif; ?>
                                <?php if(($vo["hot"]) == "2"): ?>精彩视频<?php endif; ?>
                                <?php if(($vo["hot"]) == "4"): ?>首页推荐视频<?php endif; ?>
                                <?php if(($vo["hot"]) == "5"): ?>热门<?php endif; ?>
                                <?php if(($vo["hot"]) == "6"): ?>头条<?php endif; ?>
                                <?php if(($vo["hot"]) == "7"): ?>图片<?php endif; ?>
                                 <?php if(($vo["hot"]) == "0"): ?>常规<?php endif; ?>
                                </td>
                                <td class="td_left"><?php echo ($vo["typename"]); ?></td>
                                <td><?php echo ($vo["dateandtime"]); ?></td>
                                <td><a href="<?php echo U('News/modnews',array('articleid'=>$vo['articleid']));?>">修改</a> <a href="<?php echo U('News/delnews',array('articleid'=>$vo['articleid']));?>">删除</a></td>
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
      $(".pagination div").css("text-align","center");
       $(".pagination div").children().css("padding","0 5px");
       $(".current").css("color","red");
  })
</script>