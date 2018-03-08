<?php
namespace HaiAdmin\Controller;
use Think\Controller;
use Think\Upload;
class IndexController extends BaseController {


    public function index(){
     
     
      $this->display();

        }
     function main(){
             /*最新新闻*/
      $lastnews=M("news")->where("typeid=1")->order("dateandtime desc")->limit(7)->select();
      $this->lastnews=$lastnews;
      /*最近报名*/
      $lastname=M("baoming")->order("addtime desc")->limit(7)->select();
      $this->lastname=$lastname;
      /*新闻数量*/
      $newscount=M("news")->count();
      $this->newscount=$newscount;
      /*报名数*/
      $baocount=M("baoming")->count();
      $this->baocount=$baocount;
      /*管理员数*/
      $admincount=M("admin")->count();
       $this->admincount=$admincount;

     	  $this->display();
     }   
     /*推出登录*/
     function logout(){
         session("adminuser",null);
         session("state",null);
         $this->redirect('Login/index');

     }
     /*会员管理*/
     function user(){

        $this->display();
     }
     /*系统设置*/
     function config(){
            if(IS_POST){
                $old=M("config")->find(1);
                $title=I("post.title");
                $phone=I("post.phone");
                $describle=I("post.describle");
                $keyword=I("post.keyword");
                $access_token=I("post.access_token");
                $client_id=I("post.client_id");
                $qq=I("post.qq");
                $icp=I("post.icp");
                $email=I("post.email");
                $address=I("post.address");

                /*文件上传*/
                $upload = new \Think\Upload();// 实例化上传类   
                $upload->maxSize = 3145728 ;// 设置附件上传大小  
                $upload->exts  = array('jpg', 'gif', 'png', 'jpeg');
                $upload->autoSub=false;
                $upload->savePath  = './Uploads/'; 
                $info= $upload->uploadOne($_FILES['weixin_code']);   
                if($info){
                    $weixin_code=ltrim($info['savepath'].$info['savename'],'./');
                      /*把原先的图片删除掉*/
                     unlink("./Uploads/{$old['weixin_code']}");
                    }else{
                        $weixin_code=$old['weixin_code'];
                    }
                    $foot_code=uploadimg($_FILES['foot_code']);
                    if($foot_code){
                          $footcode=ltrim($foot_code['savepath'].$foot_code['savename'],'./');
                           /*把原先的图片删除掉*/
                     unlink("./Uploads/{$old['foot_code']}");
                    }else{
                          $footcode=$old['foot_code'];
                    }
                     $logoimg=uploadimg($_FILES['logo']);
                      if($logoimg){
                          $logo=ltrim($logoimg['savepath'].$logoimg['savename'],'./');
                           /*把原先的图片删除掉*/
                     unlink("./Uploads/{$old['logo']}");
                    }else{
                          $logo=$old['logo'];
                    }
                $data=array(
                     "title"=>$title,
                     "phone"=>$phone,
                     "describle"=>$describle,
                     "keyword"=>$keyword,
                     "weixin_code"=>$weixin_code,
                     "foot_code"=>$footcode,
                     "logo"=>$logo,
                      "access_token"=>$access_token,
                      "client_id"=>$client_id,
                      "qq"=>$qq,
                      "icp"=>$icp,
                      "email"=>$email,
                      "address"=>$address
                    );
                   $result=M("config")->where("id=1")->save($data);
                   
                   $this->redirect('Index/config');

            }else{
               /*查询配置表*/
               $info=M("config")->find(1);
               $this->info=$info;
               $this->display();
          }
                
     }
     
   
}