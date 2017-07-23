<?php

require_once(APP_PATH."/model/upload.php");
require_once(APP_PATH."/model/variable.php");
require_once(APP_PATH."/model/unloginCheck.php");

class backFuns extends spController
{
	private $close;
	private $var;

	function __construct()
	{
		parent::__construct();
		$unloginCheck = spClass("unloginCheck");
		$unloginCheck->adminCheck();
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
		$post = spClass("spArgs");
		$this->articleId = $post->get("articleId");
		$this->columnId = $post->get("columnId");
		if($post->get("dataAssign")){
			$ob = new db("site_".$this->columnId,"id");
			$res = $ob->find(Array("id"=>$this->articleId));
			echo json_encode($res);
		}else{
			$this->mode = "edit";
			$this->title = "修改文章";
			$this->display("back/article-add.html");
		}		
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
			if($args->get("mode") == "edit"){
				$articleId = $args->get("articleId");
				$conditions['update_time'] = date("Y-m-d H:i:s");
				unset($conditions['create_time']);
				unset($conditions['creator']);
				if($thumbnails == ""){
					unset($conditions['thumbnails']);
				}
				if($ob->update(Array("id"=>$articleId),$conditions)){
					echo $this->close->close("alert('修改成功！');");
				}else{
					echo "error";
				}
			}else{
				if($ob->create($conditions)){			
					echo $this->close->close("alert('提交成功！');");
				}else{
					echo "error";
				}
			}

			// echo "<script>alert('fuck')</script>";
			// echo $this->closeWindow;
		}else{
			$this->columnId = $_GET['id'];
			if($this->columnId == "video"){
				$this->title = "新增視頻 - ".$_GET['title'];
				$this->display("back/video-add.html");
			}else{
				$this->title = "新增文章 - ".$_GET['title'];
				$this->display("back/article-add.html");
			}
		}
	}

	function videoList()
	{
		$this->title = $_GET['title'];
		$this->column = $this->var->COLUMNS[$_GET['id']];
		$this->display("back/video-list.html");
	}
}