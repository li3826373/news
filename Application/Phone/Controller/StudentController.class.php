<?php
namespace Phone\Controller;
use Think\Controller;
class StudentController extends BaseController{
      //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	function index(){
		$id=I("get.id");
		 /*查询当前id的新闻分类*/
         $newstype=M("phonenewstypes")->field("typename")->where("id=".$id)->find();
         $this->newstype=$newstype;
          /*banner*/
          $banner=M("phonebanner")->where(array("state"=>0,"postion"=>4))->limit(1)->find();
          $this->banner=$banner;
          /*学员风采头条1个*/
          $headstudent=M("phonenews")->where(array("typeid"=>$id,"hot"=>6))->order("sort desc")->limit(1)->find();
          $this->headstudent=$headstudent;
        
           /*学员风采普通新闻*/
           $result=M("phonenews")->where(array("typeid"=>$id,"hot"=>0))->order("sort desc")->limit(3)->select();
        
        $this->result=$result;
        $this->id=$id;
		$this->display();
	}
	 /*更多*/
  function more(){
              $id=I("get.id");
              $pid=I("get.pid");
               /*普通新闻5*/
               $start=$pid*3;
          $newslist=M("phonenews")->where(array("typeid"=>$id,"hot"=>0))->order("sort desc")->limit($start,3)->select();
          $arr="";
          if(count($newslist)){
            foreach ($newslist as $k=> $vo) {
              $arr.=' <li class="row" onclick="location.href='.U('NewsInfo/Index',array('articleid'=>$vo['articleid'])).'">
          <div class="news-img col-xs-4">
            <img src="'.__ROOT__.'/Uploads/'.$vo["imagename"].'">
          </div>
          <div class="news-txt col-xs-8">
            <h5>'.$vo["title"].'</h5>
            <p>'.mb_substr(strip_tags(htmlspecialchars_decode($vo["describle"])),0,15,'UTF-8').'..</p>
          </div>
        </li>';
            }
          }else{
              $arr="";
          }
       
        echo $arr;  
        

  }
}