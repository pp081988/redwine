<?php
require_once(APP_PATH."/model/siteCommentLinker.php");
require_once(APP_PATH."/model/unloginCheck.php");
require_once(APP_PATH."/model/frequently.php");
require_once(APP_PATH."/model/compare.php");
require_once(APP_PATH."/model/getProduct.php");

class frontFuns extends spController
{
	private $userCheck;
	private $unloginCheck;
	private $db;
	private $filter;

	function __construct(){
		parent::__construct();
		$this->unloginCheck = spClass("unloginCheck");
		$this->filter = spClass("filter");
	}

	function likeOrDislike()
	{
		if(!$this->unloginCheck->userLoginCheck()){		//未登陆判断
			exit;
		}
		$frequently = spClass("frequently");
		if(!$frequently->check(time(),1)){	//频繁判断
			echo "10001";
			exit;
		}
		$post = spClass("spArgs");
		$column = $post->get("column");
		$id = $post->get("id");
		$type = $this->filter->filter($post->get("type"));
		$otherType = "";
		$thisType = "";
		switch ($type) {
			case 'like':
				$otherType = 'dislike_column';
				$thisType = 'like_column';
				break;
			
			case 'dislike':
				$otherType = 'like_column';
				$thisType = 'dislike_column';
				break;
		}
		
		$db = spClass("db",Array("site_users","id"));
		$conversion = spClass("variable");
		$columnNum = $conversion->conversion($column,"COLUMNS");
		$otherColumn = $db->find(Array("id"=>$_SESSION['userid']),null,$otherType);
		if($this->likeCheck($column,$id,$otherColumn,$otherType)){
			echo "10008";
			exit;
		}else{
			$thisTypeColumn = $db->find(Array("id"=>$_SESSION['userid']),null,$thisType);
			if($this->likeCheck($column,$id,$thisTypeColumn,$thisType)){
				$oldLikeOrDislike = $db->find(Array("id"=>$_SESSION['userid']),null,$thisType);
				$newLikeOrDislike = $this->valueRecombine($oldLikeOrDislike,$thisType,$columnNum.",".$id);
				if(!$db->update(Array("id"=>$_SESSION['userid']),Array($thisType=>$newLikeOrDislike))){
					echo "10009";
					exit;
				}else{
					$this->articleLikeOrDislike($column,$id,$type,"reduce");
					echo "reduce";
				}
			}else{
				if(!$db->update(Array("id"=>$_SESSION['userid']),Array($thisType=>$thisTypeColumn[$thisType]."|".$columnNum.",".$id))){
					echo "10010";
					exit;
				}else{
					$this->articleLikeOrDislike($column,$id,$type,"add");
					echo "add";
				}
			}
		}

	}

	function valueRecombine($ResultSet,$type,$parameter)
	{
		$result;
		
		$arr = explode("|",substr($ResultSet[$type],1));
		for($i=0;$i<count($arr);$i++){
			$separator = "|";
			if($arr[$i] == $parameter){
				$arr[$i] = "";
				$separator = "";
			}
			$result .= $separator.$arr[$i];
		}
		return $result;
	}

	function likeCheck($column,$id,$likeOrDislikeColumn,$type)
	{
		$arr = explode("|",substr($likeOrDislikeColumn[$type],1));
		for($i=0;$i<count($arr);$i++){
			$arr_split = explode(",",$arr[$i]);
			$columns = spClass("variable");
			if($columns->COLUMNS[$arr_split[0]] == $column && $arr_split[1] == $id){
				return true;
			}
		}
	}

	function articleLikeOrDislike($column,$id,$type,$algorithm)
	{
		$db = new db("site_".$column,"id");
		switch ($algorithm) {
			case 'add':
				if(!$db->incrField(array('id'=>$id),$type."_Num")){
					echo "10007";
					exit;
				}
				break;
			case 'reduce':
				if(!$db->decrField(array('id'=>$id),$type."_Num")){
					echo "10011";
					exit;
				}
				break;
		}
	}

	function commentQuery()
	{
		// if(!$this->unloginCheck->userLoginCheck()){		//未登陆判断
		// 	exit;
		// }
		
		$post = spClass("spArgs");
		$column = $post->get("column");
		$id = $this->filter->filter($post->get("id"));
		$db = spClass("db",Array("site_".$column,"id"));
		$res = $db->find(Array("id"=>$id),null,"comment");
		if($res['comment'] != ""){
			$commentId = substr($res['comment'],1);
			$siteCommentLinker = spClass("siteCommentLinker");
			$comment = $siteCommentLinker->spLinker()->findAll(" id in(".$commentId.") ","create_time desc");
			echo json_encode($comment);
		}else{
			echo "empty";
		}
	}

	function commentInsert()
	{
		$frequently = spClass("frequently");
		if(!$frequently->check(time(),5)){	//频繁判断
			echo "10001";
			exit;
		}
		if(!$this->unloginCheck->userLoginCheck()){		//未登陆判断
			exit;
		}
		$post = spClass("spArgs");
		$column = $post->get("column");
		$id = $this->filter->filter($post->get("id"));
		$content = $this->filter->filter($post->get("content"));
		if($content == ""){
			echo "10012";
			exit;
		}
		$replyUser = $this->filter->filter($post->get("replyUser"));
		$commentDB = new db("site_comment","id");
		$createTime = time();
		$conditions = [
			"create_time"	=>	$createTime,
			"content"		=>	$content,
			"username"		=>	$_SESSION['username']
		];
		if($replyUser != ""){
			$userDB = new db("site_users","id");
			if($userDB->find(Array("username"=>$replyUser))){
				$conditions['reply'] = $replyUser;
			}else{
				echo "10006";
				exit;
			}
		}
		if(!$commentDB->create($conditions)){
			echo "10002";
			exit;
		}
		$thisComment = $commentDB->find(Array("create_time"=>$createTime),null,"id");
		$columnDB = new db("site_".$column,"id");
		$oldCommentId = $columnDB->find(Array("id"=>$id),null,"comment");
		if(!$columnDB->update(Array("id"=>$id),Array("comment"=>$oldCommentId['comment'].",".$thisComment['id']))){
			echo "10003";
			exit;
		}
		echo "ok";
	}

	function thumbsUp()
	{
		// $frequently = spClass("frequently");
		// if(!$frequently->check(time(),3600)){	//频繁判断
		// 	echo "10001";
		// 	exit;
		// }
		if(!$this->unloginCheck->userLoginCheck()){		//未登陆判断
			exit;
		}
		$post = spClass("spArgs");
		$commentId = $this->filter->filter($post->get("id"));
		$commentDB = new db("site_comment","id");
		$res = $commentDB->find(" id = ".$commentId." AND thumbs_up_user LIKE '%,".$_SESSION['userid'].",%'");
		if(!$res){
			$oldthumbs_up_user = $commentDB->find(Array("id"=>$commentId),null,"thumbs_up_user");
			if(!$commentDB->update(Array('id'=>$commentId),Array("thumbs_up_user"=>$oldthumbs_up_user['thumbs_up_user'].",".$_SESSION['userid'].","))){
				echo "10004";
				exit;
			}
			if(!$commentDB->incrField(Array('id'=>$commentId), 'thumbs_up')){
				echo "10005";
				exit;
			}
			echo "ok";
		}
	}

	function addForumIndex()
	{
		$this->options = $this->forumOptionQuery();
		$variable = new variable();
		foreach ($variable->WINE as $key => $value) {
			$this->wineCategory .= "<option value='".$key."'>".$value."</option>";
		}
		foreach ($variable->PRICE as $key => $value) {
			$this->price .= "<option value='".$key."'>".$value."</option>";
		}
		$this->display("forumtheme1.html");
	}

	function pageIndex()
	{
		$post = spClass("spArgs");
		$pageName = $post->get("page").".html";
		$this->display($pageName);
	}

	function productDetial()
	{
		$get = spClass("spArgs");
		$var = spClass("variable");
		$id = $this->filter->filter($get->get("id"));
		$type = $this->filter->filter($get->get("type"));
		$product = $this->filter->filter($get->get("product"));
		switch ($product){
			case 'wine':
				$db = new db("admin_product_wine","id");
				if($type == "forum"){
					$imgName = $this->filter->filter($get->get("condition"));
					if($res = $db->find("images like '%".$imgName."%'",null,"id,name")){
						die(json_encode($res));
					}else{
						die("10016");
					}
				}
				$res = $db->find(Array("id"=>$id));
				$this->name = $res['name'];
				$this->origin = $res['origin'];
				$this->winery = $res['winery'];
				$this->winery_site = $res['winery_site'];
				$this->grape = $res['grape'];
				$this->year = $res['year'];
				$this->best_year = $res['best_year'];
				$this->price = $var->PRICE[$res['price']];
				$this->food = $var->FOOD[$res['food']];
				$this->supplier = $res['supplier'];
				$this->supplier_site = "有興趣尋找代理商(在香港/中國/其他亞洲地區)";
				if($res['supplier_site'] != ""){
					$this->supplier_site = $res['supplier_site'];
				}
				$this->keyword = $res['keyword'];
				$imgArray = explode(",",substr($res['images'],1));
				if($res['images'] == ""){
					$this->fristImage = "images/noproductimg.png";
				}else{
					$this->fristImage = "images/product/".$imgArray[0];
					foreach ($imgArray as $key => $value) {
						$onclick = '';
						if($key == "0"){
							$onclick = 'id="onlickImg"';
						}
						$this->images .= '<li '.$onclick.'><img src="images/product/'.$value.'" width="68" height="68" alt="'.$res['name'].'"/></li>';
					}
				}
				//$this->images = $images;
				// echo count($imgArray);
				//var_dump($res['images']);
				$page = "productWineDetail.html";
				//$this->display($page);
				break;
			case 'food':
				$db = new db("admin_product_food","id");
				$res = $db->find(Array("id"=>$id));
				$this->name = $res['name'];
				$this->origin = $res['origin'];
				$this->type = $res['type'];
				$this->method = $res['method'];
				$this->taste = $res['taste'];
				$this->keyword = $res['keyword'];
				$imgArray = explode(",",substr($res['images'],1));
				$page = "productFoodDetail.html";
				
				break;
		}
		if($res['images'] == ""){
			$this->fristImage = "images/noproductimg.png";
		}else{
			$this->fristImage = "images/product/".$imgArray[0];
			foreach ($imgArray as $key => $value) {
				$onclick = '';
				if($key == "0"){
					$onclick = 'id="onlickImg"';
				}
				$this->images .= '<li '.$onclick.'><img src="images/product/'.$value.'" width="68" height="68" alt="'.$res['name'].'"/></li>';
			}
		}
		$this->display($page);
	}

	function forumImgUpload()
	{
		if(!$this->unloginCheck->userLoginCheck()){		//未登陆判断
			exit;
		}
		$file = $_FILES['file'];
		$order = $_POST['order'];
		if($file['name'] != ""){
			$upload = spClass("upload");
			$res = $upload->upload($file,$theme);
			if($order == 1){	
				die(json_encode(Array("uploadImg"=>$res,"compareImg"=>$this->compareImg($res))));
			}else{
				die($res);
			}
			
		}
	}

	function compareImg($img1)
	{
		$result = [];
		$compare = new compare($img1);
		$productImgs = scandir("images/product");
		foreach ($productImgs as $key => $value) {
			if($key != "0" && $key != "1"){
				$result[$value] = $compare->check($img1,"images/product/".$value);
			}
		}
		$pos = array_search(min($result), $result);
		if($result[$pos] < 8){
			return $pos;
		}
	}

	function forumOptionQuery()
	{
		$db = new db("admin_product_category","id");
		$res = $db->findAll("id LIKE '2__%'");
		return json_encode($res);
	}

	function forumFoodQuery()
	{
		$id = $_GET['id'];
		
	}

	function forumSecondPage()
	{
		$this->wineImg = $_SESSION['forumWineThemeFormData']['wine_img'];
		$this->foodImg = $_SESSION['forumWineThemeFormData']['food_img'];
		$this->display("forumadd1.html");
	}

	function forum()
	{
		if(!$this->unloginCheck->userLoginCheck()){		//未登陆判断
			$this->error('請先登錄', spUrl('frontFuns', 'addForumIndex')); 
			exit;
		}
		$get = spClass("spArgs");
		// if($themeType = $get->get("themeType"))
		// switch ($themeType) {
		// 	case 'matching':
		// 		$DBname = "site_forum_matching";
		// 		break;
		// 	case 'chat':
		// 		$DBname = "site_forum_chat";
		// 		break;
		// }
		$conditions = [];
		foreach ($get->get() as $key => $value) {
			if($key != "c" && $key != "a" && $key != "themeType"){
				$conditions[$key] = $this->filter->filter($value);
			}
		}
		$conditions['create_time'] = time();
		$conditions['username'] = $_SESSION['username'];
		$conditions['display'] = 1;
		$db = new db("site_forum","id");
		//var_dump($DBname);

		$result = $db->create($conditions);
		if(!$result){
			die("10017");
		}
		$this->success('提交完成，管理員審核后將會顯示', spUrl('main', 'forum'));
	}

	function forumData()
	{
		$limit = $_GET['limit'];
		$forumData = spClass("forumData");
		echo json_encode($forumData->coverData($limit));
	}

	function forum_matching_detail()
	{
		$theme = $_GET['theme'];
		$id = $_GET['id'];
		$forumData = spClass("forumData");
		$res = $forumData->data("site_forum","",$id);
		$this->create_time = $res[0]['create_time'];
		$this->wine_name = $res[0]['wine_name'];
		$this->wine_year = $res[0]['wine_year'];
		$this->food_name = $res[0]['food_name'];
		$this->username = $res[0]['username'];
		$this->wine_category = $res[0]['wine_category'];
		$this->wine_price = $res[0]['wine_price'];
		$this->food_category = $res[0]['food_category'];
		$this->custom_food_name = $res[0]['custom_food_name'];
		$this->food_type = $res[0]['food_type'];
		$this->food_method = $res[0]['food_method'];
		$this->food_taste = $res[0]['food_taste'];
		$this->matching = $res[0]['matching'];
		$this->detail_content = $res[0]['detail_content'];
		$this->wine_img = $res[0]['wine_img'];
		$this->food_img = $res[0]['food_img'];
		$this->like_num = $res[0]['like_num'];
		$this->dislike_num = $res[0]['dislike_num'];
		$this->short_comment = $res[0]['short_comment'];
		if($this->food_name != null){
			$productFood = new db("admin_product_food","id");
			$this->food_name = $productFood->find(Array("id"=>$this->food_name),null,"name")['name'];
		}
		if($_SESSION['avatar']){
			$this->avatar = "<img src='".$_SESSION['avatar']."'>";
		}else{
			$this->avatar = "<img src='images/defaultAvatar.png'>";
		}
		if($theme == "forum_matching"){
			$this->display("forum1.html");
		}else{
			$this->display("forum2.html");
		}
		//var_dump($this->food_name);
	}

	function foodToWine()
	{
		$this->display("search1.html");
	}

	function wineToFood()
	{
		$this->display("search2.html");
	}

	function getFoodName()
	{
		$post = spClass("spArgs");
		$id = $post->get("id");
		$db = new db("admin_product_food","id");
		$res = $db->findAll(Array("category_id"=>$id),null,"name,id");
		if($res)echo json_encode($res);
	}

	function searchSelectResult()
	{
		$get = spClass("spArgs");
		$pId = $get->get("pId");
		$Id = $get->get("Id");
		$theme = $get->get("theme");
		if($theme == "food"){
			$dbName = "admin_product_food";
		}
		$db = new db("admin_product_category","id");
		$this->category = $db->find(Array("id"=>$pId))['name'];
		$this->subClass = $db->find(Array("id"=>$Id))['name'];
		$this->id = $Id;
		$this->theme = $theme;
		$productDB = new db($dbName,"id");
		$this->totailNum = $productDB->findCount();
		//var_dump($productDB->findCount());

		$this->display("search-select-result.html");
	}

	function searchSelectData()
	{
		$get = spClass("spArgs");
		$id = $get->get("id");
		$theme = $get->get("theme");
		$current = $get->get("current");
		$count = $get->get("count");
		$start = ($current - 1) * $count;
		$end = $current * $count - 1;
		if($theme == "food"){
			$dbName = "admin_product_food";
		}
		$db = new db($dbName,"id");
		$res = $db->findAll(Array("category_id"=>$id),"id DESC",null,$start.",".$end);
		if($res){
			die(json_encode($res));
		}
	}

	function searchSelectMatching()
	{
		$get = spClass("spArgs");
		$this->id = $get->get("id");
		$this->name = $get->get("name");
		$this->theme = $get->get("theme");
		if($this->theme == "food"){
			$column = "food";
			$reColumn = "wine";
		}elseif($this->theme == "wine"){
			$column = "wine";
			$reColumn = "food";
		}
		$back = new db("admin_product_matching","id");
		$front = new db("site_forum","id");
		$getProduct = new getProduct();
		$suggestType = $get->get("suggestType");
		switch ($suggestType) {
			case 'supplier':
				$supplierSuggest = $back->find($column."_id LIKE '_".$this->id."%' AND suggest_type = 0 ");
				if($supplierSuggest){
					$result = [];
					$reColumn = $reColumn."_id";
					$resArr = explode(",",substr($supplierSuggest[$reColumn],1));
					foreach ($resArr as $value) {
						if($reColumn == "food_id"){
							$result[] = $getProduct->foodInfo($value);
						}elseif($reColumn == "wine_id"){
							$result[] = $getProduct->wineInfo($value);
						}
					}
					echo json_encode($result);
				}
				break;
			case 'wineTaster':
				$wineTasterSuggest = $back->find($column."_id LIKE '_".$this->id."%' AND suggest_type = 1 ");
				if($wineTasterSuggest){
					$result = [];
					$reColumn = $reColumn."_id";
					$resArr = explode(",",substr($wineTasterSuggest[$reColumn],1));
					foreach ($resArr as $value) {
						if($reColumn == "food_id"){
							$result[] = $getProduct->foodInfo($value);
						}elseif($reColumn == "wine_id"){
							$result[] = $getProduct->wineInfo($value);
						}
						//echo $value;
					}
					echo json_encode($result);
				}
				break;
			case 'epal':
				if($this->theme == "food"){
					$value = $this->id;
				}elseif($this->theme == "wine"){
					$value = $this->name;
				}
				$epalSuggest = $front->findAll($column."_name = '".$value."'");
				if($epalSuggest){
					$result = [];
					$reColumn = $reColumn."_name";
					//$db = new db("admin_product_wine","id");
					foreach ($epalSuggest as $key => $value) {
						if($reColumn == "food_name"){
							if($value['food_name'] != "0"){
								//echo $value['food_name'];
								$epalSuggest[$key]['food_name'] = $getProduct->foodInfo($value['food_name'])['name'];
								//var_dump($value['food_name']);
								//echo "hao";
							}
							// $name = $value[$reColumn];
							// $res = $db->find(Array("name"=>$name));
							// $res['forumId'] = $epalSuggest[0]['id'];
							// $result[] = $res;
						}
					}
					echo json_encode($epalSuggest);
					//var_dump($result);
				}
				//var_dump($this->name);
				break;
			default:
				$this->display("search-select-matching.html");
				break;
		}
	}

	function productDetailPage()
	{
		$get = spClass("spArgs");
		$this->id = $get->get("id");
		$this->product = $get->get("product");
		$this->display("product.html");
	}
}