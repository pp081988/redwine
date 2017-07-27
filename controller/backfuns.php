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
		$this->close = spClass("closewindow");
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
					echo $this->close->closeIframe("alert('修改成功！');");
				}else{
					echo "error";
				}
			}else{
				if($ob->create($conditions)){			
					echo $this->close->closeIframe("alert('提交成功！');");
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

	function pageIndex()
	{
		$post = spClass("spArgs");
		$pageName = $post->get("page").".html";
		$this->display("back\/".$pageName);
	}

	function categoryData()
	{
		$db = new db("admin_product_category","id");
		$category = $db->findAll();
		echo json_encode($category);
	}

	function productCategoryIfame()
	{
		$post = spClass("spArgs");
		$this->id = $post->get("id");
		$this->pId = $post->get("pId");
		$this->display("back\product-category-add.html");
	}

	function category()
	{
		$post = spClass("spArgs");
		$id = $post->get("id");
		$pId = $post->get("pId");
		if($id == "" || $pId == ""){echo "10013";exit;}
		$type = $post->get("type");
		$name = $post->get("name");
		$remark = $post->get("remark");
		switch ($type) {
			case 'product':
				$dbname = "admin_product_category";
				break;
		}
		$db = new db($dbname,"id");
		$checkResult = $db->findSql('SELECT MAX(id) as id FROM admin_product_category WHERE pId = "'.$id.'"');
		$newrow = [
			"id"		=>	$id.intval(str_replace($id,"",$checkResult[0]['id']))+1,
			"pId"		=>	$id,
			"name"		=>	$name,
			"remark"	=>	$remark
		];
		if(!$db->create($newrow)){
			echo "10014";
			exit;
		}
		
		//var_dump($checkResult[0]['id']);
		//echo $remark;
	}

	function productIframe()
	{
		$get = spClass("spArgs");
		$this->category_id = $get->get("category_id");
		$this->category_pId = $get->get("category_pId");
		$this->category_name = $get->get("category_name");
		$this->display("back\product-list-iframe.html");
	}

	function productAddPage()
	{
		$get = spClass("spArgs");
		$this->category_id = $get->get("category_id");
		$this->category_pId = $get->get("category_pId");
		$this->display("back\product-wine-add.html");
	}

	function product()
	{
		$post = spClass("spArgs");
		$newrow = [];
		foreach ($post->get() as $key => $value) {
			if($key != "c" && $key != "a" && $key !="file"){
				$newrow[$key] = $value;
			}
		}
		$db = new db("admin_product_wine","id");
		if(!$db->create($newrow)){
			die("10015");
		}
		$this->success('提交成功！', spUrl('backFuns','pageIndex',Array("page"=>"product-list")));
	}

	function productQuery()
	{
		$post = spClass("spArgs");
		$category_id = $post->get("category_id");
		$category_pId = $post->get("category_pId");
		$db = new db("admin_product_wine","id");
		if($category_id == "" && $category_pId == ""){
			$res = $db->findAll();
			echo json_encode($res);
		}else{
			$res = $db->findAll(Array("category_id"=>$category_id,"category_pId"=>$category_pId));
			if(count($res) == 0){
				die("");
			}
			echo json_encode($res);
		}
	}

	
}