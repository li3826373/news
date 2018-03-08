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
     <div class="main_top">
          <div class="main_left fl span6">
              <div class="box pr5">
                <div class="box_border">
                  <div class="box_top">
                    <div class="box_top_l fl"><b class="pl15">登录信息</b></div>
                  
                  </div>
                  <div class="box_center">
                  <p> <b><?php echo ($_SESSION['adminuser']['username']); ?>，欢迎使用信息管理系统</b>
    <!-- <a href="">帐号设置</a> --></p>
    
    <p>您上次登录的时间：<?php echo ($_SESSION['adminuser']['last_time']); ?></p>
    
    </div>
                </div>
              </div>
          </div>
          <div class="main_right fr span4">
          
              <div class="box pl5">
                <div class="box_border">
                  <div class="box_top">
                    <div class="box_top_l fl"><b class="pl15">最近报名信息</b></div>
                   <!--  <div class="box_top_r fr pr15"><a href="#" class="color307fb1">更多</a></div> -->
                  </div>
                  <div class="box_center">
                  <ul class="newlist">
                  <?php if(is_array($lastname)): $i = 0; $__LIST__ = $lastname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Bao/look',array('id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?> <?php echo ($vo["phone"]); ?></a><b><?php echo (substr($vo["addtime"],0,10)); ?></b></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>   </div>
                </div>
              </div>
        
          </div>

          <div class="clear"></div>
     </div>
     <div class="main_center">
        <div class="span3 fl pt10">
          <div class="box pr5">
          <div class="box_border">
           <div class="box_top">
                    <div class="box_top_l fl"><b class="pl15">最新新闻</b></div>
                    <div class="box_top_r fr pr15"><a href="<?php echo U('News/index');?>" class="color307fb1">更多</a></div>
                  </div>
            
            <div class="box_center">   <ul class="newlist">
            <?php if(is_array($lastnews)): $i = 0; $__LIST__ = $lastnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/NewsInfo/index',array('articleid'=>$vo['articleid']));?>" target="_blank"><?php echo ($vo["title"]); ?></a><b><?php echo (substr($vo["dateandtime"],0,10)); ?></b></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>   </div>
          </div>
        </div>
        </div>
     
        <div class="span3 fl pt10">
          <div class="box pl5">
          <div class="box_border">
            <div class="box_top">
                    <div class="box_top_l fl"><b class="pl15">信息统计</b></div>
                   
                  </div>
         
            <div class="box_center tjb"><ul class="newlist">
    <li><i>会员数：</a></i><?php echo ($admincount); ?></li>

    <li><i>新闻数：</a></i><?php echo ($newscount); ?></li>
    <li><i>报名数：</a></i><?php echo ($baocount); ?></li>
  
    </ul>       </div>
          </div>
        </div>
        </div>
        <div class="clear"></div>
     </div>  

    
 </body>
 </html>