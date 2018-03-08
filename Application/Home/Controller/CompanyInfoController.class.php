<?php
namespace Home\Controller;
use Think\Controller;
class CompanyInfoController extends BaseController{
	   //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
	function index(){
            $types=M("newstypes")->where("fid=1")->order("sort desc")->select();
         $this->types=$types;

          $articleid=I("get.articleid");
          $info=M("news")->join("newstypes on news.typeid=newstypes.id")->field("news.*,newstypes.id")->where("articleid=".$articleid)->find();
           /*更新点击量*/
           M("news")->where("articleid=".$articleid)->setInc("hit");
            /*上一篇*/
            $first=M("news")->where("articleid<".$articleid." and typeid=".$info['typeid'])->limit(1)->find();
          /*下一篇*/
          $next=M("news")->where("articleid>".$articleid." and typeid=".$info['typeid'])->limit(1)->find();
        
         
          $this->next=$next;
            $this->first=$first;
          $this->info=$info;

           $result=M("newstypes")->where("fid=1")->order("sort desc")->select();
           foreach($result as $k=>$v){
                $v['son']=M("news")->where("typeid=".$v['id'])->order("sort desc")->limit(6)->select();
                $result[$k]=$v;
           }
           $this->result=$result;
          $this->display();

	}
}