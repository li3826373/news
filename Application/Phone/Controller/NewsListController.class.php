<?php
namespace Phone\Controller;
use Think\Controller;
class NewsListController extends BaseController{

  //空方法, 访问不存在的方法时执行
    public function _empty() {
        $this->redirect("Index/index");
    }

	public function index(){
         $id=I("get.id");
         /*查询当前id的新闻分类*/
         $newstype=M("phonenewstypes")->field("typename")->where("id=".$id)->find();
         $this->newstype=$newstype;
       
          /*普通新闻5*/
          $newslist=M("phonenews")->where(array("typeid"=>$id,"hot"=>0))->order("sort desc")->limit(0,5)->select();
          

       
          $this->newslist=$newslist;
          $this->id=$id;
          $this->display();
	}
  /*更多*/
  function more(){
              $id=I("get.id");
              $pid=I("get.pid");
               /*普通新闻5*/
               $start=$pid*5+1;
          $newslist=M("phonenews")->where(array("typeid"=>$id,"hot"=>0))->order("sort desc")->limit($start,5)->select();
          $arr="";
          if(count($newslist)){
            foreach ($newslist as $k=> $vo) {
              $arr.=' <li class="row" onclick="location.href='.U('NewsInfo/Index',array('articleid'=>$vo['articleid'])).'">
          <div class="news-img col-xs-4">
            <img src="'.__ROOT__.'/Uploads/'.$vo["imagename"].'">
          </div>
          <div class="news-txt col-xs-8">
            <h5>'.$vo["title"].'</h5>
            <p>'.mb_substr(strip_tags(htmlspecialchars_decode($vo["describle"])),0,15,'UTF-8').'..</p>
          </div>
        </li>';
            }
          }else{
              $arr="";
          }
       
        echo $arr;  
        

  }
}