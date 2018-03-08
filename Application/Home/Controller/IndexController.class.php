<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
   //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }
    public function index(){
           /*新闻中心*/
             $re=M("newstypes")->where("fid=1")->order("sort desc")->select();
             foreach($re as $k=>$v){
                     $v['son']=M("news")->where("typeid=".$v['id'])->order("sort desc")->limit(1)->find();
                     $re[$k]=$v;
             }
             $this->re=$re;
        /*成功案例*/
        $newstypes=M("newstypes")->where("fid=11")->order("sort desc")->select();
       $this->newstypes=$newstypes;
       $brr=array();
       foreach ($newstypes as $k => $v) {
          $brr[]=$v['id'];
       }
       $condition['typeid']=array('in',$brr);
       $news= M("news")->where($condition)->order("sort desc")->limit(8)->select();

        $this->assign("news",$news);
       /*产品展示*/
       $types=M("newstypes")->where("fid=2")->order("sort desc")->select();
       $this->types=$types;
       $arr=array();
       foreach ($types as $k => $v) {
          $arr[]=$v['id'];
       }
       $this->id=$arr[0];
       $condition['typeid']=$arr[0];
       $product=M("news")->where($condition)->order("sort desc")->limit(6)->select();
       $this->assign("product",$product);
         /*轮播图*/
         $banner=M("banner")->order("sort desc")->limit(3)->select();
         $this->assign("banner",$banner);
      
                 /*联系我们*/
               $contact=M("content")->where(array("type"=>2,"postion"=>3))->find();
               $this->contact=$contact;
          /*友情链接*/
          $link=M("friend")->select();
           $this->link=$link;
       
       $this->display();
    }
    /*获取上传的视频信息接口*/
    function getinfo(){
             $url="https://api.youku.com/videos/by_me.json?client_id=4d358b560d580dd0&&access_token=3916f5a35d2d4e0e4108fa14c815e8f2&&state=published";

              $res=CURLSend($url,"GET");
             $res=json_decode($res,true);
             dump($res);


    }
    /*报名*/
    function bao(){
       if(IS_POST){
          $name=trim(I("post.name"));
         
           $phone=I("post.phone");
           $content=trim(I("post.content"));
         
           $data=array("name"=>$name,"phone"=>$phone,"content"=>$content);
           $re=M("baoming")->add($data);
           if($re){
                $msg=array("state"=>1,"msg"=>"留言成功");
                $this->ajaxReturn($msg);
           }else{
                 $msg=array("state"=>2,"msg"=>"留言失败");
                $this->ajaxReturn($msg);
           }
       }else{
           $this->display();
       }

      

    }
    /*搜索*/
     public function search(){
          $keyword=I("get.keyword");
           $p=isset($_GET['p'])?$_GET['p']:0;
          $count=M("news")->where("title like '%{$keyword}%'")->count();
           $page=query($count,4);
           $show=$page->show();
           $result=M("news")->where("title like '%{$keyword}%'")->page($p.',4')->select();
           
           $this->assign("pagesize",$show);
           $this->assign("result",$result);
           $this->assign("keyword",$keyword);
           $this->display();

     }   
 }