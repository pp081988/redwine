<?php

class frequently
{
	function check($time,$interval)
	{
		if(!isset($_SESSION['frequently'])){
			$_SESSION['frequently'] = $time;
			return true;
		}else{
			if($time - $_SESSION['frequently'] < $interval){
				return false;
			}else{
				$_SESSION['frequently'] = $time;
				return true;
			}
		}
	}
}