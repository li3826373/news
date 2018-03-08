<?php
namespace Phone\Controller;
use Think\Controller;
class NewsInfoController extends BaseController{
	    //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	function index(){
          $articleid=I("get.articleid");
          $info=M("phonenews")->where("articleid=".$articleid)->find();
           /*更新点击量*/
           M("phonenews")->where("articleid=".$articleid)->setInc("hit");

          $this->info=$info;
          $this->display();

	}
}
