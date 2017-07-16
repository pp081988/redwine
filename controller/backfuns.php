<?php

require_once(APP_PATH."/model/upload.php");
require_once(APP_PATH."/model/variable.php");

class backfuns extends spController
{
	private $close;
	private $var;

	function __construct()
	{
		parent::__construct();
		$unloginCheck = spClass("backUnloginCheck");
		$unloginCheck->check();
		$this->close = spClass("closeIframe");
		$this->var = spClass("variable");
	}

	function articleList()
	{
		$this->title = $_GET['title'];
		$this->column = $this->var->COLUMNS[$_GET['id']];
		// $ob = new db("site_".$this->column,"create_time");
		// $this->count = $ob->findCount();
		$this->display("back/article-list.html");
	}

	function articleDataHandle()
	{
		$column = $_POST['id'];	
		$ob = new db("site_".$column,"create_time");
		$res = $ob->findAll();
		echo json_encode($res);
	}

	function articleDataEdit()
	{

	}

	function articleDelete()
	{
		$post = spClass("spArgs");
		$column = $post->get("column");
		$id = $post->get("id");
		$ob = new db("site_".$column,"id");
		$conditions = ["id"=>$id];
		if($ob->delete($conditions)){
			echo "done";
		}
	}

	function displaySwitch()
	{
		$id = $_POST['id'];
		$act = $_POST['act'];
		$column = $_POST['column'];
		$ob = new db("site_".$column,"create_time");
		$conditions = ["id"=>$id];
		$rows = ["display"=>$act];
		if($ob->update($conditions,$rows)){
			echo "ok";
		}
	}

	function themeAdd()
	{
		$args = spClass("spArgs");
		if($args->get("articletitle")){
			$column = "site_".$args->get("theme");
			$articletitle = $args->get("articletitle");
			$articletitle2 = $args->get("articletitle2");
			$theme = $args->get("theme");
			$articletype = $args->get("articletype");
			$articlesort = $args->get("articlesort");
			$keywords = $args->get("keywords");
			$abstract = $args->get("abstract");
			$author = $args->get("author");
			$allowcomments = $args->get("allowcomments");
			$file = $_FILES['file'];
			$thumbnails = "";
			$editorCont = $args->get("editorCont");

			

			if($file['name'] != ""){
				$upload = spClass("upload");
				$thumbnails = $upload->upload($file,$theme);
			}

			$conditions = [
				"create_time" 		=>	date("Y-m-d H:i:s"),
				"article_title"		=>	$articletitle,
				"article_title2"	=>	$articletitle2,
				"article_type"		=>	$articletype,
				"article_sort"		=>	$articlesort,
				"keywords"			=>	$keywords,
				"abstract"			=>	$abstract,
				"author"			=>	$author,
				"allowcomments"		=>	$allowcomments,
				"thumbnails"		=>	$thumbnails,
				"editorCont"		=>	$editorCont,
				"creator"			=>	$_SESSION['admin_username']
			];
			$ob = new db($column,"id");
			if($ob->create($conditions)){
				
				echo $this->close->close("alert('提交發佈完成！');");
			}else{
				echo "error";
			}

			// echo "<script>alert('fuck')</script>";
			// echo $this->closeWindow;
		}else{
			$this->columnId = $_GET['id'];
			$this->title = $_GET['title'];
			$this->display("back/article-add.html");
		}
	}
}