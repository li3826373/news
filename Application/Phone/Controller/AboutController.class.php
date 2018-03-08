<?php
namespace Phone\Controller;
use Think\Conntroller;
class AboutController extends BaseController
{
      //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	function index(){
              
               /*关于我们*/
               $about=M("phonecontent")->where(array("type"=>1,"postion"=>3))->find();
               $this->about=$about;
               /*企业文化*/
               $culture=M("phonecontent")->where(array("type"=>3,"postion"=>3))->limit(1)->find();
               $this->culture=$culture;
            
		$this->display();
	}
}