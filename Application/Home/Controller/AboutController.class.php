<?php
namespace Home\Controller;
use Think\Conntroller;
class AboutController extends BaseController
{
          //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	function index(){
              /*banner图一张*/
               $banner=M("banner")->where(array("state"=>0,"postion"=>3))->order("sort desc")->limit(1)->find();
               $this->banner=$banner;
               /*关于我们*/
                $about=M("content")->where(array("type"=>1,"postion"=>3))->limit(1)->find();
          $this->about=$about;
     $result=M("newstypes")->where("fid=1")->order("sort desc")->select();
           foreach($result as $k=>$v){
                $v['son']=M("news")->where("typeid=".$v['id'])->order("sort desc")->limit(6)->select();
                $result[$k]=$v;
           }
           $this->result=$result;
		$this->display();
	}
}