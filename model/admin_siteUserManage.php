<?php

class admin_siteUserManage extends spController
{
	private $fields = "id,create_time,username,email,phone,sex,age,years_of_drinking,deactivat";
	public $var;
	private $userDB;
	private $siteUsersLinker;
	public $date;
	private $delUserDB;

	function __construct()
	{
		parent::__construct();
		$this->var = spClass("variable");
		$this->userDB = new db("site_users","id");
		$this->siteUsersLinker = spClass("siteUsersLinker");
		$this->date = date("Y-m-d H:i:s");
		$this->delUserDB = new db("admin_users_del","id");
	}

	function allUsers()
	{
		$args = spClass("spArgs");
		$startTime = $args->get('startTime');
		$endTime = $args->get('endTime');
		if($startTime && $endTime){
			$conditions = "deactivat = 0 AND create_time BETWEEN '".$startTime." 00:00:00' AND '".$endTime." 23:59:59'";
		}else{
			$conditions = null;
		}
		if($res = $this->siteUsersLinker->spLinker()->findAll($conditions,"id DESC",$this->fields)){
			foreach ($res as $key => $value) {
				$res[$key]['sex'] = $this->var->SEX[$value['sex']];
				$res[$key]['age'] = $this->var->AGE[$value['age']];
				$res[$key]['years_of_drinking'] = $this->var->DRINKING[$value['years_of_drinking']];
			}
		}
		return $res;
	}

	function userDeactivat($operation,$id)
	{
		switch ($operation) {
			case 'stop':
				if($this->userDB->updateField(Array("id"=>$id),"deactivat",1)){
					die("done");
				}
				break;
			case 'start':
				if($this->userDB->updateField(Array("id"=>$id),"deactivat",0)){
					die("done");
				}
				break;
		}
	}

	function deleteUser($id)
	{
		$conditions = Array("id"=>$id);
		$userInfo = $this->userDB->find($conditions);
		$delInfo = [
			"id"				=>	$userInfo['id'],
			"del_time"			=>	$this->date,
			"username"			=>	$userInfo['username'],
			"contact"			=>	$userInfo['email'].$userInfo['phone'],
			"admin_username"	=>	$_SESSION['admin_username']
		];
		if($this->delUserDB->create($delInfo)){
			if($this->siteUsersLinker->spLinker()->delete($conditions)){
				die("done");
			}
		}
	}

	function delUserInfo()
	{
		$args = spClass("spArgs");
		$startTime = $args->get('startTime');
		$endTime = $args->get('endTime');
		if($startTime && $endTime){
			$conditions = "del_time BETWEEN '".$startTime." 00:00:00' AND '".$endTime." 23:59:59'";
		}else{
			$conditions = null;
		}
		if($res = $this->delUserDB->findAll($conditions)){
			return $res;
		}
	}
}