<?php
namespace HaiAdmin\Controller;
use Think\Controller;
class FriendController extends BaseController 
{
    public function index(){
           //所有友情链接
          $result=M("friend")->select();
         
      $this->result=$result;

    	   $this->display();
    }
/*添加*/
public function add(){
	$path=__APP__;
	if(IS_POST){
      $title=I("post.title");
      $link=I("post.link");
      $data=array("title"=>$title,"link"=>$link);
         /*上传图片*/
	           $img=uploadimg($_FILES['imagename']);

	            if($img){
	            	     $size=$img['size'];
              
		              if($size>'507200'){
		                   echo  '<meta charset="UTF-8">';
		                echo "<script>
		                           alert('请上传小于500kb的图片');
		                           location.href='{$path}/HaiAdmin/Banner/index';
		                    </script>";
		                    
		                    exit;
		              }
	            	  $data['imagename']=ltrim($img['savepath'].$img['savename'],"./");
	            }
      $re=M("friend")->add($data);
         if($re){
        	  	  echo  '<meta charset="UTF-8">';
			        echo "<script>
	                       alert('添加成功');
	                       location.href='{$path}/HaiAdmin/Friend/add';
			          	</script>";
        	  }else{
        	  	   echo  '<meta charset="UTF-8">';
			        echo "<script>
	                       alert('添加失败');
	                       location.href='{$path}/HaiAdmin/Friend/add';
			          	</script>";
        	  }
      }else{

      	 $this->display();
      }




}
   /*管理员删除*/
     function del(){
         $path=__APP__;
          $id=I("get.id",0,'intval');
          if(empty($id)){
             	echo  '<meta charset="UTF-8">';
			          	echo "<script>
	                       alert('参数丢失');
	                       location.href='{$path}/HaiAdmin/Friend/index';
			          	</script>";
          }
          $re=M("friend")->where("id=".$id)->delete();
          if($re){

          	  $this->redirect('Friend/index');
          }else{

          	echo  '<meta charset="UTF-8">';
			          	echo "<script>
	                       alert('删除失败');
	                       location.href='{$path}/HaiAdmin/Friend/index';
			          	</script>";
          }

     }

     /*管理员编辑*/
     function editor(){
		     	if(IS_POST){
		     	 $path=__APP__;
		     	    $title=I("post.title");
				      $link=I("post.link");
				      $id=I("post.id");
				      $data=array("title"=>$title,"link"=>$link,"id"=>$id);
		     	      /*上传图片*/
	           $img=uploadimg($_FILES['imagename']);

	            if($img){
	            	     $size=$img['size'];
              
		              if($size>'507200'){
		                   echo  '<meta charset="UTF-8">';
		                echo "<script>
		                           alert('请上传小于500kb的图片');
		                           location.href='{$path}/HaiAdmin/Banner/index';
		                    </script>";
		                    
		                    exit;
		              }
	            	  $data['imagename']=ltrim($img['savepath'].$img['savename'],"./");
	            }
		           $re=M("friend")->save($data);
					       if($re){

			          	  $this->redirect('Friend/index');
			          }else{

			          	echo  '<meta charset="UTF-8">';
						          	echo "<script>
				                       alert('修改失败');
				                       location.href='{$path}/HaiAdmin/Friend/index';
						          	</script>";
			          }

		     	}else{

				        $id=I("get.id");
				        $info=M("friend")->where("id=".$id)->find();
               
				        $this->info=$info;
				        $this->display();
		        }
     }
}