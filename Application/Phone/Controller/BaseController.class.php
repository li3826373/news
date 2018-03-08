<?php
namespace Phone\Controller;
use Think\Controller;
class BaseController extends Controller
{
         //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	public function _initialize() {
           /*查询头部菜单*/
           $header=M("phonenewstypes")->where("state=1")->order("sort desc")->limit(6)->select();

           $this->header=$header;
             /*查询配置表*/
           $conf=M("config")->find(1);
           
           $this->conf=$conf;
           /*联系我们我们底部*/
           $footus=M("content")->where(array("type"=>2,"postion"=>2))->find();
           $this->footus=$footus;
           

	}
}