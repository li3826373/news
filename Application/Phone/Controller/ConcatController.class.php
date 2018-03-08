<?php
namespace Phone\Controller;
use Think\Controller;
class ConcatController extends BaseController{
	   //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	function index(){
		 
          /*联系我们*/
          $contact=M("phonecontent")->where(array("type"=>2,"postion"=>3))->limit(1)->find();
          $this->contact=$contact;

		$this->display();
	}
}
