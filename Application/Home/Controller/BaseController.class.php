<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller
{
      //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	public function _initialize() {
           /*查询头部菜单*/
           $header=M("newstypes")->where("state=1")->order("sort desc")->limit(7)->select();
          foreach ($header as $k => $v) {
               $v['son']=M("newstypes")->where("fid=".$v['id'])->order("sort desc")->select();
               $header[$k]=$v;
          }
           $this->header=$header;
             /*查询配置表*/
           $conf=M("config")->find(1);
           
           $this->conf=$conf;
           /*关于我们*/
               $about=M("content")->where(array("type"=>1,"postion"=>3))->find();
               $this->about=$about;
           

	}
}