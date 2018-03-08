<?php
namespace Phone\Controller;
use Think\Controller;
class TeacherController extends BaseController{
        //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	function index(){
		   $id=I("get.id");
             /*查询当前id的新闻分类*/
         $newstype=M("phonenewstypes")->field("typename")->where("id=".$id)->find();
         $this->newstype=$newstype;
            /*师资*/
            $teacher=M("phonenews")->where(array("typeid"=>$id,"hot"=>0))->order("sort desc")->limit(0,5)->select();

            $this->teacher=$teacher;
            $this->id=$id;
		       $this->display();
	}
  /*更多*/
  function more(){
              $id=I("get.id");
              $pid=I("get.pid");
               /*普通新闻5*/
               $start=$pid*5+1;
          $newslist=M("phonenews")->where(array("typeid"=>$id,"hot"=>0))->order("sort desc")->limit($start,5)->select();
          $arr="";
          if(count($newslist)){
            foreach ($newslist as $k=> $vo) {
              $arr.='<div class="row" onclick="location.href='.U('NewsInfo/Index',array('articleid'=>$vo['articleid'])).'">
                <div class="teach-img col-xs-4">
                  <img src="'.__ROOT__.'/Uploads/'.$vo["imagename"].'">
                </div>
                <div class="teach-txt col-xs-8">
                  <h4>'.$vo["title"].'</h4>
                  <h3>'.$vo["teacher"].'</h3>
                  <p>'.mb_substr(strip_tags(htmlspecialchars_decode($vo["describle"])),0,15,'UTF-8').'...</p>
                </div>
              </div>';
            }
          }else{
              $arr="";
          }
         
        echo $arr;  
      }
}