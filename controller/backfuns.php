<?php
require_once(APP_PATH."/model/forumData.php");
require_once(APP_PATH."/model/upload.php");
require_once(APP_PATH."/model/variable.php");
require_once(APP_PATH."/model/unloginCheck.php");

class backFuns extends spController
{
	private $close;
	private $var;
	private $exists;

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

	function forumFoodOptionData()
	{
		$db = new db("admin_forum_food_option","id");
		$option = $db->findAll();
		echo json_encode($option);
	}

	function forumFoodOptionIfame()
	{
		$post = spClass("spArgs");
		$this->id = $post->get("id");
		$this->pId = $post->get("pId");
		$this->display("back\\forum-food-option-add.html");
	}

	function categoryData($sql)
	{
		$db = new db("admin_product_category","id");
		if(!$sql){
			$category = $db->findAll();
			echo json_encode($category);
		}else{
			$category = $db->findSql($sql);
			return json_encode($category);
		}
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
			case 'forum_food_option':
				$dbname = "admin_forum_food_option";
				break;
		}
		$db = new db($dbname,"id");
		$checkResult = $db->findSql('SELECT MAX(id) as id FROM '.$dbname.' WHERE pId = "'.$id.'"');
		var_dump($checkResult);
		$newrow = [
			"id"		=>	$id.intval(str_replace($id,"",$checkResult[0]['id']))+1,
			"pId"		=>	$id,
			"name"		=>	$name,
			"remark"	=>	$remark,
			"open"		=>	"true"
		];
		if($id == "1"){
			$checkNum = substr($checkResult[0]['id'],0,1);
			$newrow['id'] = (intval($checkNum) +1) * 10 + 1;
		}
		//echo $id.intval(str_replace($id,"",$checkResult[0]['id']))+1;
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
		switch (substr($this->category_id,0,1)){
			case '1':
				$this->display("back\product-list-iframe_wine.html");
				break;
			case '2':
				$this->display("back\product-list-iframe_food.html");
				break;
		}
	}

	function productAddPage()
	{
		$get = spClass("spArgs");
		$this->category_id = $get->get("category_id");
		$this->category_pId = $get->get("category_pId");
		switch (substr($this->category_id,0,1)){
			case '1':
				$this->display("back\product-wine-add.html");
				break;
			case '2':
				$this->display("back\product-food-add.html");
				break;
		}
	}

	function product()
	{
		$post = spClass("spArgs");
		$newrow = [];
		$category_id = $post->get("category_id");
		switch (substr($category_id,0,1)){
			case '1':
				$dbName = "admin_product_wine";
				break;
			case '2':
				$dbName = "admin_product_food";
				break;
		}
		foreach ($post->get() as $key => $value) {
			if($key != "c" && $key != "a" && $key !="file"){
				$newrow[$key] = $value;
			}
		}
		$db = new db($dbName,"id");
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
		$dbName = "";
		switch (substr($category_id,0,1)){
			case '1':
				$dbName = "admin_product_wine";
				break;
			case '2':
				$dbName = "admin_product_food";
				break;
		}
		$db = new db($dbName,"id");
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
		//echo $category_id." ".$dbName;
	}

	function forumData()
	{
		$limit = $_GET['limit'];
		$forumData = spClass("forumData");
		echo json_encode($forumData->coverData($limit));
	}

	function productMatchingAdd()
	{
		$get = spClass("spArgs");
		$this->type = $get->get("type");
		$name = $get->get("name");
		$this->id = ",".$get->get("id");
		$this->category_id = $get->get("category_id");
		if($this->type == "wine"){
			$this->wineName = $name;
		}
		if($this->type == "food"){
			$this->foodName = $name;
		}
		$this->display("back\product-matching-add.html");
	}

	function productMatchingSelect()
	{
		$get = spClass("spArgs");
		$id = $get->get("id");
		$this->type = $get->get("type");
		switch ($this->type) {
			case 'selectFood':
				$condition = "2__%";
				break;
			case 'selectWine':
				$condition = "1__%";
				break;
		}
		$_SESSION['existsSelect'] = $get->get("exists");
		$sql = "SELECT * FROM admin_product_category WHERE id LIKE '".$condition."'";
		$this->category = json_encode($this->categoryData($sql));
		$this->display("back\product-matching-select.html");
	}

	function productMatchingSelectIframe()
	{
		$get = spClass("spArgs");
		$this->id = $get->get("id");
		$this->type = $get->get("type");
		$this->existsSelect = $_SESSION['existsSelect'];
		$this->display("back\product-matching-select-iframe.html");
	}

	function productMatchingSelectQuery()
	{
		$post = spClass("spArgs");
		$type = $post->get("type");
		$id = $post->get("id");
		switch ($type) {
			case 'selectFood':
				$dbName = "admin_product_food";
				break;
			case 'selectWine':
				$dbName = "admin_product_wine";
				break;
		}
		$condition = "";
		if($id){
			$condition['category_id'] = $id;
		}
		
		$db = new db($dbName,"id");
		$res = $db->findAll($condition);
		if($res){
			die(json_encode($res));
		}
	}

	function productMatching()
	{
		$get = spClass("spArgs");
		$conditions = [];
		foreach ($get->get() as $key => $value) {
			if($key != "c" && $key != "a"){
				$conditions[$key] = $value;
			}
		}
		$conditions['create_time'] = date("Y-m-d H:i:s");
		$conditions['creator'] = $_SESSION['admin_username'];
		$db = new db("admin_product_matching","id");
		$res = $db->create($conditions);
		if(!$res){
			die("10018");
		}else{
			die("ok");
		}
	}
}