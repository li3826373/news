<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>国惠</title>
<link rel="stylesheet" type="text/css" href="/diandeng/Public/Home/Assets/css/reset.css"/>
<script type="text/javascript" src="/diandeng/Public/Home/Assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/diandeng/Public/Home/Assets/js/js_z.js"></script>
<script type="text/javascript" src="/diandeng/Public/Home/Assets/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="/diandeng/Public/Home/Assets/css/thems.css">

</head>

<body>
<!--头部-->
<div class="head clearfix">
    <div class="logo"><a href=""><img src="/diandeng/Public/Home/Assets/images/logo.jpg" alt="国惠"/></a></div>
    <div class="head_r">
      <div class="search">
          <input name="" type="text" placeholder="请输入您想查找的内容">
            <input name="" type="submit" value="" class="btn">
        </div>
        <ul class="nav clearfix">
            <li class="now"><a href="<?php echo U('Index/index');?>">首页</a></li>
            <?php if(is_array($header)): $i = 0; $__LIST__ = $header;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <?php if($vo["id"] == 3): ?><a href="<?php echo U('About/index');?>"><?php echo ($vo["typename"]); ?></a>
             <?php elseif($vo["id"] == 2): ?>
             <a href="<?php echo U('Product/index');?>"><?php echo ($vo["typename"]); ?></a>
              <?php elseif($vo["id"] == 1): ?>
             <a href="<?php echo U('NewsList/index');?>"><?php echo ($vo["typename"]); ?></a>
             <?php elseif($vo["id"] == 11): ?>
             <a href="<?php echo U('Company/index');?>"><?php echo ($vo["typename"]); ?></a>
             <?php elseif($vo["id"] == 6): ?>
             <a href="<?php echo U('Contact/index');?>"><?php echo ($vo["typename"]); ?></a>
             <?php else: endif; ?>
              
                <ul class="ej">
                <?php if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i; if($vo["id"] == 3): ?><li><a href="<?php echo U('About/index',array('id'=>$vv['id']));?>"><?php echo ($vv["typename"]); ?></a></li>
                  <?php elseif($vo["id"] == 2): ?>
                   <li><a href="<?php echo U('Product/index',array('id'=>$vv['id']));?>"><?php echo ($vv["typename"]); ?></a></li>
                    <?php elseif($vo["id"] == 1): ?>
                   <li><a href="<?php echo U('NewsList/index',array('id'=>$vv['id']));?>"><?php echo ($vv["typename"]); ?></a></li>
                <?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
           
        </ul>
    </div>
</div>
<!--头部-->
<!--幻灯片-->
<div class="banner banner_s">
    <img src="/diandeng/Public/Home/Assets/upload/banner_a.jpg" alt=""/>
</div>
<!--幻灯片-->
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="scd_l">
        <div class="title">
            <b>联系我们</b>
            <span>CONTACT US</span>
        </div>
       <!--  <ul class="sidenav">
       <?php if(is_array($newstypes)): $i = 0; $__LIST__ = $newstypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if(($id) == $vo['id']): ?>class="now"<?php endif; ?>><a href="<?php echo U('About/index',array('id'=>$vo['id']));?>"><?php echo ($vo["typename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
       </ul> -->
        <div class="space_hx">&nbsp;</div>
        <dl class="tel clearfix">
            <dt><img src="/diandeng/Public/Home/Assets/images/tel.png" alt=""/></dt>
            <dd>
                <p>24小时免费咨询热线</p>
                <b><?php echo ($conf["phone"]); ?></b>
            </dd>
        </dl>
    </div>
    <div class="scd_r">
        <div class="pst">
            当前位置：<a href="<?php echo U('Index/index');?>">首页</a>>><a href="javascript:void();">联系我们</a>
        </div>
        <div class="scd_rm">
            <div class="about">
               <?php echo (htmlspecialchars_decode($contact["content"])); ?>
            </div>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具" />
<meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图" />
<title>百度地图API自定义地图</title>
<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>

<body>
  <!--百度地图容器-->
  <div style="width:697px;height:550px;border:#ccc solid 1px;" id="dituContent"></div>
</body>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(113.689799,34.759401);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
    var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
    map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
    var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
    map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"我的标记",content:"我的备注",point:"113.689813|34.759245",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
         ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
            
            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
</html>
        </div>
    </div>
</div>
<div class="space_hx">&nbsp;</div>
<!--底部-->
<div class="f_nbg">
  <ul class="f_nav clearfix">
      <li>
          <b>关于我们</b>
            <p><a href="">公司简介</a></p>
            <p><a href="">企业文化</a></p>
            <p><a href="">企业愿景</a></p>
            <p><a href="">荣誉资质</a></p>
            <p><a href="">公司视频</a></p>
        </li>
        <li>
          <b>产品展示</b>
            <p><a href="">LED工矿灯</a></p>
            <p><a href="">LED横插灯</a></p>
            <p><a href="">LED玉米灯</a></p>
        </li>
        <li>
          <b>案例展示</b>
            <p><a href="">户外案例</a></p>
            <p><a href="">户内案例</a></p>
        </li>
        <li>
          <b>技术支持</b>
            <p><a href="">服务理念</a></p>
            <p><a href="">资料下载</a></p>
            <p><a href="">常见问题</a></p>
            <p><a href="">信息反馈</a></p>
        </li>
        <li>
          <b>联系我们</b>
            <p><a href="">联系方式</a></p>
            <p><a href="">人才招聘</a></p>
        </li>
        <li class="ct">
          <b>深圳市国惠照明</b>
            <p>地址：深圳市龙岗区南联社区向银路71-3号汇川科技园1栋</p>
            <p>座机：0755-89728329/89728339</p>
            <p>手机：18823712618/1598933559</p>
            <p>邮箱：1782800180@qq.com</p>
        </li>
    </ul>
</div>
<div class="foot_bg">
  <div class="foot">
      <p>Copyright@215 - 2025 深圳国惠照明 All Rights Reserved版权所有</p>
        <a href="">网站地图</a>|
        <a href="">联系我们</a>|
        <a href="">人才招聘</a>
    </div>
</div>
<!--底部-->
</body>
</html>