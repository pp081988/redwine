<?php

require_once(APP_PATH."/model/variable.php");

class getProduct extends spController
{
	function wineInfo($id)
	{
		$db = new db("admin_product_wine","id");
		$res = $db->find(Array("id"=>$id),null,"images,name,id");
		if($res){
			if($res['images'] == ""){
				$res['images'] == "noproductimg.png";
			}
			return $res;
		}
	}

	function foodInfo($id)
	{
		$db = new db("admin_product_food","id");
		$res = $db->find(Array("id"=>$id),null,"images,name,id");
		if($res){
			if($res['images'] == ""){
				$res['images'] == "noproductimg.png";
			}
			return $res;
		}
	}
}