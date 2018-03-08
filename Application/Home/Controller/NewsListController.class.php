<?php
namespace Home\Controller;
use Think\Controller;
class NewsListController extends BaseController{

  //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }

	public function index(){
            /*分页查询产品*/
            
         
          $types=M("newstypes")->where("fid=11")->order("sort desc")->select();
         $this->types=$types;
       $arr=array();
       foreach ($types as $k => $v) {
          $arr[]=$v['id'];
       }
          $condition['typeid']=$arr[0];
            $id=I("get.id");
            if($id!="all" && $id){
                $condition['typeid']=$id;
                 $typename=M("newstypes")->where("id=".$id)->find();
                $this->typename=$typename;
            }else{
              $condition['typeid']=array("in",$arr);
            }
              $p=isset($_GET['p'])?$_GET['p']:0;
           $count=M("news")->where($condition)->count();
           $page=query($count,4);
           $show=$page->show();
           $list=M("news")->where($condition)->order("sort desc")->page($p.',4')->select();

           $this->assign("list",$list);
           $this->assign("pagesize",$show);
           $this->id=$condition['typeid'];
          $this->display();
        
	}
}