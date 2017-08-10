<?php

class admin_siteUserMange extends spController
{
	private $fields = "id,create_time,username,email,phone,sex,age,years_of_drinking";
	public $var;

	function __construct()
	{
		parent::__construct();
		$this->var = spClass("variable");
	}

	function allUsers()
	{
		$args = spClass("spArgs");
		$startTime = $args->get('startTime');
		$endTime = $args->get('endTime');
		if($startTime && $endTime){
			$conditions = "deactivat = 0 AND create_time BETWEEN '".$startTime." 00:00:00' AND '".$endTime." 23:59:59'";
		}else{
			$conditions = Array("deactivat"=>0);
		}
		$siteUsersLinker = spClass("siteUsersLinker");
		if($res = $siteUsersLinker->spLinker()->findAll($conditions,"id DESC",$this->fields)){
			foreach ($res as $key => $value) {
				$res[$key]['sex'] = $this->var->SEX[$value['sex']];
				$res[$key]['age'] = $this->var->AGE[$value['age']];
				$res[$key]['years_of_drinking'] = $this->var->DRINKING[$value['years_of_drinking']];
			}
		}
		return $res;
	}
}