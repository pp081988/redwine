<?php
require_once(APP_PATH."/model/variable.php");

class forumData extends spController
{
	function data($theme,$display,$id,$lilmit)
	{
		$forumDB = new db("site_forum","id");
		$conditions = Array();
		if($id != ""){
			$conditions["id"] = $id;
		}
		if($display == "1"){
			$conditions["display"] = "1";
		}
		if($id == "" && $display == ""){
			$conditions = "";
		}
		//return $conditions;
		$forumRes = $forumDB->findAll($conditions,"create_time DESC",null,$lilmit);
		$foodOptionDB = new db("admin_forum_food_option","id");
		$foodOptionRes = $foodOptionDB->findAll();
		$var = spClass("variable");
		foreach ($forumRes as $key => $value) {
			$forumRes[$key]["wine_category"] = $var->WINE[$value["wine_category"]];
			$forumRes[$key]["wine_price"] = $var->PRICE[$value["wine_category"]];
			$forumRes[$key]["theme_color"] = $var->COLOR[$value["theme_color"]];
			$forumRes[$key]["food_origin"] = $this->option($foodOptionRes,$value["food_origin"]);
			$forumRes[$key]["food_type"] = $this->option($foodOptionRes,$value["food_type"]);
			$forumRes[$key]["food_name"] = $this->option($foodOptionRes,$value["food_name"]);
			$forumRes[$key]["food_method"] = $this->option($foodOptionRes,$value["food_method"]);
			$forumRes[$key]["food_taste"] = $this->option($foodOptionRes,$value["food_taste"]);
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
}