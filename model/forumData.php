<?php
require_once(APP_PATH."/model/variable.php");

class forumData extends spController
{
	function data($theme,$display,$id,$lilmit)
	{
		$forumDB = new db("site_forum","id");
		$conditions = Array();
		if($id == "" && $display == ""){
			$conditions = "";
		}
		if($theme == "forum_chat"){
			$conditions["wine_name"] = "";
		}
		if($id != ""){
			$conditions["id"] = $id;
		}
		if($display == "1"){
			$conditions["display"] = "1";
		}
		//return $conditions;
		$forumRes = $forumDB->findAll($conditions,"create_time DESC",null,$lilmit);
		$foodOptionDB = new db("admin_product_category","id");
		$foodOptionRes = $foodOptionDB->findAll();
		$var = spClass("variable");
		foreach ($forumRes as $key => $value) {
			$forumRes[$key]["wine_category"] = $var->WINE[$value["wine_category"]];
			$forumRes[$key]["wine_price"] = $var->PRICE[$value["wine_category"]];
			$forumRes[$key]["theme_color"] = $var->COLOR[$value["theme_color"]];
			$forumRes[$key]["food_category"] = $this->option($foodOptionRes,$value["food_category"]);
			$forumRes[$key]["food_type"] = $this->option($foodOptionRes,$value["food_type"]);
			//$forumRes[$key]["food_name"] = $this->option($foodOptionRes,$value["food_name"]);
			// $forumRes[$key]["food_method"] = $this->option($foodOptionRes,$value["food_method"]);
			$forumRes[$key]["food_taste"] = $var->TASTE[$value["food_taste"]];
		}
		return $forumRes;
	}

	function option($resultArray,$val)
	{
		foreach ($resultArray as $key => $value) {
			if($resultArray[$key]['id'] == $val){
				return $resultArray[$key]['name'];
			}
		}
	}

	function coverData($limit)
	{
		$forumDB = new db("site_forum","id");
		$foodDB = new db("admin_product_food","id");
		$res = $forumDB->findAll(null,"create_time DESC",null,$limit);
		foreach ($res as $key => $value) {
			if($res[$key]['food_name'] != 0){
				$res[$key]['food_name'] = $foodDB->find(Array("id"=>$res[$key]['food_name']))['name'];
			}
		}
		return $res;
	}
}