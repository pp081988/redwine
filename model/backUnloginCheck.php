<?php

class backUnloginCheck extends spController
{
	function check(){
		if(!$_SESSION['admin_username']){
			$this->jump(spUrl('back', 'loginIndex'));
			exit;
		}
	}
}