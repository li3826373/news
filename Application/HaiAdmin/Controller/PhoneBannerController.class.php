<?php
namespace HaiAdmin\Controller;
use Think\Controller;
class PhoneBannerController extends BaseController 
{

  function index(){
   /*分页查询banner图*/
    $count      = M("phonebanner")->count();// 查询满足要求的总记录数
    $Page       = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
      $Page->setConfig('header','共 %TOTAL_ROW% 条记录');
       $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
         $Page->setConfig('first','首页');
         $Page->setConfig('last','%尾页%');
          $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
    $show       = $Page->show();// 分页显示输出
     $list = M("phonebanner")->order('sort desc')->limit($Page->firstRow.','.$Page->listRows)->select();
  
   $this->list=$list;
   $this->pagesize=$show;
  	$this->display();
  }
/*添加或者修改banner图*/
 function addbanner(){
 	    $path=__APP__;
 	     $id=I("id",0,"intval");
	        if(IS_POST){
	        	  $data=array(
	                 "title"=>I("post.title",""),
	                 "link"=>I("post.link",""),
	                 "sort"=>I("post.sort",0),
	                 "state"=>I("post.state",0),
	                 "postion"=>I("post.postion",1),
	            	);
	            /*上传图片*/
	           $img=uploadimg($_FILES['imagename']);

	            if($img){
	            	 $size=$img['size'];
              
		              if($size>'307200'){
		                   echo  '<meta charset="UTF-8">';
		                echo "<script>
		                           alert('请上传小于300kb的图片');
		                           location.href='{$path}/HaiAdmin/PhoneBanner/index';
		                    </script>";
		                    
		                    exit;
		              }
	            	  $data['imagename']=ltrim($img['savepath'].$img['savename'],"./");
	            	 
	            }
	             if(empty($id)){
	             	$result=M("phonebanner")->add($data);
	             }else{
	             	 $result=M("phonebanner")->where("id=".$id)->save($data);
	             }

              if($result){
                  echo  '<meta charset="UTF-8">';
			        echo "<script>
	                       alert('操作成功');
	                       location.href='{$path}/HaiAdmin/PhoneBanner/index';
			          	</script>";
              } else{
              	   echo  '<meta charset="UTF-8">';
			        echo "<script>
	                       alert('操作失败');
	                       location.href='{$path}/HaiAdmin/PhoneBanner/index';
			          	</script>"; 
              }
	          

	        }else{
              $this->info=M("phonebanner")->where("id=".$id)->find();
	 	     $this->display();
	 	}
 }
/*删除banner*/
function del(){
   $id=I("post.id",0,"intval");
   if(empty($id)){
   	   $data=array(
        "state"=>0,
        "msg"=>"数据丢失",
   	   	);
   	   $this->ajaxReturn($data);
   }
   $info=M("phonebanner")->find($id);
   $imagename=$info['imagename'];
   $re=M("phonebanner")->where("id=".$id)->delete();
		   if($re){
		   	  unlink("./Uploads/{$imagename}");
		   	   $data=array(
		        "state"=>1,
		        "msg"=>"删除成功",
		   	   	);
		   	   $this->ajaxReturn($data);

		   }else{
		   	   $data=array(
		        "state"=>2,
		        "msg"=>"删除失败",
		   	   	);
		   	   $this->ajaxReturn($data);

		   }
  }
}