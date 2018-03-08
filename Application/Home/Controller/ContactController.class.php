<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends BaseController{
	      //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	function index(){
		  /*banner图一张*/
               $banner=M("banner")->where(array("state"=>0,"postion"=>2))->order("sort desc")->limit(1)->find();
               $this->banner=$banner;
             
          /*联系我们*/
          $contact=M("content")->where(array("type"=>2,"postion"=>3))->limit(1)->find();
          $this->contact=$contact;

		$this->display();
	}
}