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
		$this->display("index.html");
	}

	function activicity(){
		$this -> display("activicity.html");
	}

	function listData()
	{
		$post = spClass("spArgs");
		$columnId = $this->filter->filter($post->get("columnId"));
		$limit = $this->filter->filter($post->get("limit"));
		echo json_encode($this->data->briefData($columnId,$limit));
	}

	function forum(){
		$this -> display("forum.html");
	}

	function video(){
		$this -> display("video.html");
	}

	function tellyou(){
		$this -> display("tellyou.html");
	}

	function introduction(){
		$this -> display("introduction.html");
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
		if($data['update_time'] == null){
			$this->update_time = "無";
		}
		$this->author = $data['author'];

		$this->favorite = "<img src='images/unlike.png'>加入喜愛";

		if($_SESSION['favorite'] && $_SESSION['favorite'] != ""){
			$favoriteCheck = spClass("frontFuns");
			if($favoriteCheck->favoriteCheck($column,$id)){
				$this->favorite = "<img src='images/like.png'>I Like it!";
			}
		}

		$this->display("articleDetail.html");
	}
}	