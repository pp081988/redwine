<?php

class backfuns extends spController
{

	function __construct()
	{
		parent::__construct();
		$unloginCheck = spClass("backUnloginCheck");
		$unloginCheck->check();
	}

	function activicityList()
	{
		$this->display("back/activicityList.html");
	}

	function activicityAdd()
	{
		$args = spClass("spArgs");
		if($args->get("name")){
			echo "hello";
		}else{
			$this->display("back/activicityAdd.html");
		}
	}
}