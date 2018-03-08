<?php
namespace Phone\Controller;
use Think\Controller;
class IndexController extends BaseController {
   //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
    public function index(){
             /*轮播图*/
        $banner=M("phonebanner")->where(array("state"=>0,"postion"=>1))->order("sort desc")->limit(1)->find();
          $this->banner=$banner;
           /*关于我们*/
          $aboutus=M("content")->where(array("type"=>1,"postion"=>1))->limit(1)->find();
           $this->aboutus=$aboutus;
          /*师资团队4个*/
        $teacher=M("phonenews")->where("hot=1 and typeid=6")->order("sort desc")->limit(3)->select();
           $this->teacher=$teacher;        
          /*精彩视频3*/
        $video=M("phonenews")->where("hot =2 and typeid=9")->order("sort desc")->limit(3)->select();
     
          $this->video=$video;
           /*学员风采4个*/
       $student=M("phonenews")->where("hot=1 and typeid=3")->order("sort desc")->limit(10)->select();

       $this->student=$student;
        /*新闻动态4*/
       $news=M("phonenews")->where("hot=1 and typeid=1")->order("sort desc")->limit(4)->select();
     
         $this->news=$news;

      $this->display();
    }
}