<?php
require(APP_PATH."/controller/frontFuns.php");
require(APP_PATH."/model/email.php");
require(APP_PATH."/model/articleData.php");
class main extends spController
{

	private $data;
	private $filter;

	function __construct(){
		parent::__construct();
		$this->data = new articleData();
		$this->filter = spClass("filter");
	}
	
	function index(){
		$this->activicityData = json_encode($this->data->briefData("activicity","2"));
		$this->introductionData = json_encode($this->data->briefData("introduction","4"));
		$this->video = $this->showVideo()['editorCont'];
		$this->banners = "";
		$funs = new frontFuns();
		if($bans =  $funs->banner()){
			foreach ($bans as $key => $value) {
				$this->banners .= '
									<div data-link="'.$value['link'].'" data-src="'.$value['image'].'">
                						<div class="caption wow fadeInUp">'.$value['title'].'</div>
              						</div>';
			}
		}
		$this->display("index.html");
	}

	function activicity(){
		$this->totailNum = $this->rowsTotal("activicity");
		$this -> display("activicity.html");

	}

	function listData()
	{
		$post = spClass("spArgs");
		$columnId = $this->filter->filter($post->get("columnId"));
		$current = $this->filter->filter($post->get("current"));
		$count = $this->filter->filter($post->get("count"));
		$start = ($current - 1) * $count;
		$end = $current * $count - 1;
		echo json_encode($this->data->briefData($columnId,$start.",".$end));
		//echo $this->data->briefData($columnId,$start.",".$end);
	}

	function forum(){
		$this -> display("forum.html");
	}

	function video(){
		$this->totailNum = $this->rowsTotal("video");
		$this -> display("video.html");
	}

	function tellyou(){
		$this->totailNum = $this->rowsTotal("tellyou");
		$this -> display("tellyou.html");
	}

	function introduction(){
		$this->totailNum = $this->rowsTotal("introduction");
		$this -> display("introduction.html");
	}

	private function rowsTotal($event)
	{
		switch ($event) {
			case 'activicity':
				$dbName = "site_activicity";
				break;
			case 'video':
				$dbName = "site_video";
				break;
			case 'tellyou':
				$dbName = "site_tellyou";
				break;
			case 'introduction':
				$dbName = "site_introduction";
				break;
		}
		$db = new db($dbName,"id");
		return $db->findCount();
	}

	function mail(){
		$email = spClass("email");
		$email->send();
	}

	function aboutus(){
		$this->display("aboutus.html");
	}

	function articleDetail()
	{
		$param = spClass("spArgs");
		$column = $param->get("column");
		$id = $param->get("id");
		$data = $this->data->detailData($column,$id);
		$this->article_title = $data['article_title'];
		$this->article_title2 = $data['article_title2'];
		$this->editorCont = $data['editorCont'];
		$this->create_time = $data['create_time'];
		$this->update_time = $data['update_time'];
		$this->likeNum = $data['like_num'];
		$this->dislikeNum = $data['dislike_num'];
		if($data['update_time'] == null){
			$this->update_time = "無";
		}
		$this->author = $data['author'];

		// $this->favorite = "<img src='images/unlike.png'>加入喜愛";

		// if($_SESSION['favorite'] && $_SESSION['favorite'] != ""){
		// 	$favoriteCheck = spClass("frontFuns");
		// 	if($favoriteCheck->favoriteCheck($column,$id)){
		// 		$this->favorite = "<img src='images/like.png'>I Like it!";
		// 	}
		// }

		if($_SESSION['avatar']){
			$this->avatar = "<img src='".$_SESSION['avatar']."'>";
		}else{
			$this->avatar = "<img src='images/defaultAvatar.png'>";
		}

		$this->display("articleDetail.html");
	}

	function searching()
	{
		$this->display("search.html");
	}

	function showVideo()
	{
		$db = new db("site_video","id");
		return $db->find(null,"id DESC","editorCont");
	}

	function tou()
	{
		$touDB = new db("site_tou","id");
		$res = $touDB->find();
		$this->content = $res['content'];
		$this->display("tou.html");
	}
}	