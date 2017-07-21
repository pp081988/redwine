<?php
require_once(APP_PATH."/model/siteUser.php");
require_once(APP_PATH."/model/unloginCheck.php");

class frontFuns extends spController
{
	private $userCheck;
	private $unloginCheck;

	function __construct(){
		parent::__construct();
		$this->userCheck = spClass("siteUser");
		$this->unloginCheck = spClass("unloginCheck");
	}

	function favoriteSwitch()
	{
		if(!$this->unloginCheck->userLoginCheck()){
			echo "unlogin";
			exit;
		}

		$post = spClass("spArgs");
		$column = $post->get("column");
		$id = $post->get("id");

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
}