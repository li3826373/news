<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends BaseController {
   //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
    public function index(){
      
          $types=M("newstypes")->where("fid=2")->order("sort desc")->select();
         $this->types=$types;
       $arr=array();
       foreach ($types as $k => $v) {
          $arr[]=$v['id'];
       }
          $condition['typeid']=$arr[0];
            $id=I("get.id");
            if($id){
                $condition['typeid']=$id;
                 $typename=M("newstypes")->where("id=".$id)->find();
                $this->typename=$typename;
            }
        
           $list=M("news")->where($condition)->order("sort desc")->limit(1)->find();

           $this->assign("list",$list);
          
           $this->id=$condition['typeid'];
          $this->display();
        }
    

  }