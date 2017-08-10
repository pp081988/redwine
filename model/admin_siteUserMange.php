<?php

class admin_siteUserMange extends spController
{
	private $fields = "id,create_time,username,email,phone,sex,age,years_of_drinking,deactivat";
	public $var;
	private $userDB;
	private $siteUsersLinker;

	function __construct()
	{
		parent::__construct();
		$this->var = spClass("variable");
		$this->userDB = spClass("db",Array("site_users","id"));
		$this->siteUsersLinker = spClass("siteUsersLinker");
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
			default:
				# code...
				break;
		}
	}

	function deleteUser($id)
	{
		$conditions = Array("id"=>$id);
		if($this->siteUsersLinker->spLinker()->delete($conditions)){
			die("done");
		}
	}
}