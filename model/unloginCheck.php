<?php

class unloginCheck extends spController
{
	function adminCheck()
	{
		if(!$_SESSION['admin_username']){
			$this->jump(spUrl('back', 'loginIndex'));
			exit;
		}
	}

	function userLoginCheck()
	{
		if(!$_SESSION['username']){
			echo "false";
			return false;
		}else{
			echo "true";
			return true;
		}
	}

	function userActivateCheck()
	{
		if(!$_SESSION['activate']){
			echo "false";
			return false;
		}else{
			echo "true";
			return true;
		}
	}
}