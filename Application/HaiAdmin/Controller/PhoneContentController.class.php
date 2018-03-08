<?php
namespace HaiAdmin\Controller;
use Think\Controller;
class PhoneContentController extends BaseController{

	public function index(){
        /*查询单页面*/
        $result=M("phonecontent")->select();
      
       $this->result=$result;
		$this->display();
	}
	/*添加*/
	function add(){
		$path=__APP__;
      if(IS_POST){
      	$title=I("post.title");
      	$content=I("post.content");
      	$type=I("post.type",0,"intval");
      	$postion=I("post.postion",0);
      	$phone=I("post.phone");
        $phone2=I("post.phone2");
      	$email=I("post.email");
     
      	$address=I("post.address");
        $address2=I("post.address2");
        $qq=I("post.qq");
      

      	 $data=array(
             "title"=>$title,
             "content"=>$content,
             "type"=>$type,
             "postion"=>$postion,
             "phone"=>$phone,
             "phone2"=>$phone2,
             "email"=>$email,
           
             "address2"=>$address2,
             "address"=>$address,
             "qq"=>$qq,
            
      	 	);
         $img=uploadimg($_FILES['imagename']);
       if($img){
             $size=$img['size'];
              
                  if($size>'204800'){
                       echo  '<meta charset="UTF-8">';
                    echo "<script>
                               alert('请上传小于200kb的图片');
                               location.href='{$path}/HaiAdmin/PhoneContent/index';
                        </script>";
                        
                        exit;
                  }
          $data['imagename']=ltrim($img['savepath'].$img['savename'],"./");
          }
      	 $re=M("phonecontent")->add($data);
      	 if($re){
                echo  '<meta charset="UTF-8">';
			        echo "<script>
	                       alert('添加成功');
	                       location.href='{$path}/HaiAdmin/PhoneContent/index';
			          	</script>";
      	 }else{
      	 	   echo  '<meta charset="UTF-8">';
			        echo "<script>
	                       alert('添加失败');
	                       location.href='{$path}/HaiAdmin/PhoneContent/add';
			          	</script>";
      	 }
      }else{

		$this->display();
	  }
	}
	/*修改*/
	function edit(){
		$path=__APP__;
		if(IS_POST){
              $id=I("post.id");
              $title=I("post.title");
              $content=I("post.content");
              $type=I("post.type",0,"intval");
              $postion=I("post.postion",0);
             $phone=I("post.phone");
              $phone2=I("post.phone2");
              $email=I("post.email");
             
              $address=I("post.address");
              $address2=I("post.address2");
              $qq=I("post.qq");
             
               $data=array(
                   "title"=>$title,
                   "content"=>$content,
                   "type"=>$type,
                   "postion"=>$postion,
                    "phone"=>$phone,
                   "phone2"=>$phone2,
                   "email"=>$email,
                  
                   "address2"=>$address2,
                   "address"=>$address,
                   "qq"=>$qq,
                   
                );
               $img=uploadimg($_FILES['imagename']);
            if($img){
                 $size=$img['size'];
              
                  if($size>'204800'){
                       echo  '<meta charset="UTF-8">';
                    echo "<script>
                               alert('请上传小于200kb的图片');
                               location.href='{$path}/HaiAdmin/PhoneContent/index';
                        </script>";
                        
                        exit;
                  }
              $data['imagename']=ltrim($img['savepath'].$img['savename'],"./");
                /*如果上传了删除之前的图片*/
                $oldimg=M("phonecontent")->field("imagename")->where("id=".$id)->find();
                unlink("./Uploads/{$oldimg['imagename']}");
            }
              $re=M("phonecontent")->where("id=".$id)->save($data);
              if($re){
              	echo  '<meta charset="UTF-8">';
			        echo "<script>
	                       alert('修改成功');
	                       location.href='{$path}/HaiAdmin/PhoneContent/index';
			          	</script>";
              }else{
              	   echo  '<meta charset="UTF-8">';
			        echo "<script>
	                       alert('修改失败');
	                       location.href='{$path}/HaiAdmin/PhoneContent/index';
			          	</script>";
              }

		}else{


      $id=I("get.id");
      $info=M("phonecontent")->find($id);

      $this->info=$info;
      $this->display();
      }

	}
	/*删除*/
	function del(){
		$path=__APP__;
         $id=I("get.id",0,"intval");
         $re=M("content")->where("id=".$id)->delete();
         if($re){
              echo  '<meta charset="UTF-8">';
			        echo "<script>
	                       alert('删除成功');
	                       location.href='{$path}/HaiAdmin/PhoneContent/index';
			          	</script>";

         }else{
         	 echo  '<meta charset="UTF-8">';
			        echo "<script>
	                       alert('删除失败');
	                       location.href='{$path}/HaiAdmin/PhoneContent/index';
			          	</script>";
 
         }

	}
}