<?php

class articleData extends spController
{

	function briefData($column,$limit)
	{
		$db = new db("site_".$column,"id");
		$res = $db->findAll(Array("display"=>1),null,"id,thumbnails,article_title,article_title2",$limit);
		foreach ($res as $key => $value) {
			$res[$key]['url'] = spUrl("main","articleDetail",Array("column"=>$column,"id"=>$value['id']));
		}
		return $res;
	}

	function detailData($column,$id)
	{
		$db = new db("site_".$column,"id");
		$res = $db->find(Array("id"=>$id),null,"article_title,article_title2,editorCont,create_time,update_time,author");
		return $res;
	}
}