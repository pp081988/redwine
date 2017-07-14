<?php

require_once(APP_PATH."/model/upload.php");
require_once(APP_PATH."/model/variable.php");

class backfuns extends spController
{
	

	function __construct()
	{
		parent::__construct();
		$unloginCheck = spClass("backUnloginCheck");
		$unloginCheck->check();
	}

	function articleList()
	{
		$this->display("back/article-list.html");
	}

	function themeAdd()
	{
		$args = spClass("spArgs");
		if($args->get("articletitle")){
			$articletitle = $args->get("articletitle");
			$articletitle2 = $args->get("articletitle2");
			$articlecolumn = $args->get("articlecolumn");
			$articletype = $args->get("articletype");
			$articlesort = $args->get("articlesort");
			$keywords = $args->get("keywords");
			$abstract = $args->get("abstract");
			$author = $args->get("author");
			$allowcomments = $args->get("allowcomments");
			$file = $_FILES['file'];
			$thumbnails = "";
			$editorCont = $args->get("editorCont");

			$var = spClass("variable");

			if($file['name'] != ""){
				$upload = spClass("upload");
				$thumbnails = $upload->upload($file,$var->COLUMNS[$articlecolumn]);
			}

			$conditions = [
				"create_time" 		=>	date("Y-m-d H:i:s"),
				"article_title"		=>	$articletitle,
				"article_title2"	=>	$articletitle2,
				"article_column"	=>	$articlecolumn,
				"article_type"		=>	$articletype,
				"article_sort"		=>	$articlesort,
				"keywords"			=>	$keywords,
				"abstract"			=>	$abstract,
				"author"			=>	$author,
				"allowcomments"		=>	$allowcomments,
				"thumbnails"		=>	$thumbnails,
				"editorCont"		=>	$editorCont,
				"username"			=>	$_SESSION['admin_username']
			];
			$gb = new user("site_activicity","id");
			if($gb->create($conditions)){
				$close = spClass("closeIframe");
				echo $close->close("alert('提交發佈完成！')");
			}else{
				echo "error";
			}

			// echo "<script>alert('fuck')</script>";
			// echo $this->closeWindow;
		}else{
			$this->display("back/article-add.html");
		}
	}
}