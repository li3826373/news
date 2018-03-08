<?php
namespace Home\Controller;
use Think\Controller;
class ProductInfoController extends BaseController{
	   //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
    
     public function index(){
        $types=M("newstypes")->where("fid=2")->order("sort desc")->select();
         $this->types=$types;
     	    $articleid=I("get.articleid");
     	     $info=M("news")->join
             ("newstypes on news.typeid=newstypes.id")->field("news.*,newstypes.id")->where("articleid=".$articleid)->find();

     	     $this->info=$info;

     	  $this->display();
     }



   }
