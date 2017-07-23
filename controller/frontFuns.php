<?php
require_once(APP_PATH."/model/siteCommentLinker.php");
require_once(APP_PATH."/model/unloginCheck.php");
require_once(APP_PATH."/model/frequently.php");

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

	function favoriteSwitch()
	{
		if(!$this->unloginCheck->userLoginCheck()){		//未登陆判断
			exit;
		}
		$frequently = spClass("frequently");
		if(!$frequently->check(time(),2)){	//频繁判断
			echo "10001";
			exit;
		}
		$post = spClass("spArgs");
		$column = $post->get("column");
		$id = $post->get("id");
		$db = spClass("db",Array("site_users","id"));
		$conversion = spClass("variable");
		$columnNum = $conversion->conversion($column);
		$oldFavorite = $db->find(Array("id"=>$_SESSION['userid']),null,"favorite");
		if($this->favoriteCheck($column,$id)){
			if($db->update(Array("id"=>$_SESSION['userid']),Array("favorite"=>$newFavorite = str_replace("|".$columnNum.",".$id,"",$oldFavorite['favorite'])))){
				echo "1";
			}
		}else{
			if($db->update(Array("id"=>$_SESSION['userid']),Array("favorite"=>$newFavorite = $oldFavorite['favorite']."|".$columnNum.",".$id))){
				echo "0";
			}
		}
		$_SESSION['favorite'] = explode("|",substr($newFavorite,1));
	}

	function favoriteCheck($column,$id)
	{
		$favorite_arr = $_SESSION['favorite'];
		for($i=0;$i<count($favorite_arr);$i++){
			$favorite_split = explode(",",$favorite_arr[$i]);
			$columns = spClass("variable");
			if($columns->COLUMNS[$favorite_split[0]] == $column && $favorite_split[1] == $id){
				return true;
			}
		}
	}

	function commentQuery()
	{
		// if(!$this->unloginCheck->userLoginCheck()){		//未登陆判断
		// 	exit;
		// }
		
		$post = spClass("spArgs");
		$column = $this->filter->filter($post->get("column"));
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
		$column = $this->filter->filter($post->get("column"));
		$id = $this->filter->filter($post->get("id"));
		$content = $this->filter->filter($post->get("content"));
		$commentDB = new db("site_comment","id");
		$createTime = time();
		$conditions = [
			"create_time"	=>	$createTime,
			"content"		=>	$content,
			"username"		=>	$_SESSION['username']
		];
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
		$this->display("forumadd1.html");
	}
}