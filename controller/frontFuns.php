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
		$columnNum = $conversion->conversion($column);
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
		$this->display("forumadd1.html");
	}
}