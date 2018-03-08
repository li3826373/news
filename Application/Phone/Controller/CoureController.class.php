<?php
namespace Phone\Controller;
use Think\Controller;
class CoureController extends BaseController{
      //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	function index(){
		$id=I("get.id");
               /*查询当前id的新闻分类*/
         $newstype=M("phonenewstypes")->field("typename")->where("id=".$id)->find();
         $this->newstype=$newstype;
       
            /*视频、课程介绍头条1个*/
            $headke=M("phonenews")->where(array("hot"=>6,"typeid"=>$id))->limit(1)->find();
            $this->headke=$headke;
              /*热门视频、课程介绍3个*/
            $hotcoure=M("phonenews")->where(array("hot"=>5,"typeid"=>$id))->order("sort desc")->limit(3)->select();
            $this->hotcoure=$hotcoure;
            /*视频、课程介绍普通*/
            $ke=M("phonenews")->where(array("hot"=>0,"typeid"=>$id))->order("sort desc")->limit(4)->select();

          $this->ke=$ke;
          $this->id=$id;
		$this->display();
	}
	/*更多*/
  function more(){
              $id=I("get.id");
              $pid=I("get.pid");
               /*普通视频、课程5*/
               $start=$pid*4+1;
          $newslist=M("phonenews")->where(array("typeid"=>$id,"hot"=>0))->order("sort desc")->limit($start,4)->select();
          $arr="";
          if(count($newslist)){
            foreach ($newslist as $k=> $vo) {
             $arr.=' <li class="col-xs-6">
		        <img src="'.__ROOT__.'/Uploads/'.$vo["imagename"].'">
		        <h5>'.$vo["title"].'</h5>
		        <p>'.substr($vo['dateandtime'],0,10).'</p>
		      </li>';
               }
          }else{
              $arr="";
          }
       
        echo $arr;  
        }
}