<?php

class articleData extends spController
{

	function briefData($column,$limit)
	{
		$db = new db("site_".$column,"id");
		$res = $db->findAll(Array("display"=>1),"create_time desc","id,thumbnails,article_title,article_title2",$limit);
		foreach ($res as $key => $value) {
			if($res[$key]['thumbnails'] == ""){
				$res[$key]['thumbnails'] = "images/nopic.png";
			}
			$res[$key]['url'] = spUrl("main","articleDetail",Array("column"=>$column,"id"=>$value['id']));
		}
		return $res;
	}

	function detailData($column,$id)
	{
		$db = new db("site_".$column,"id");
		$res = $db->find(Array("id"=>$id),null,"article_title,article_title2,editorCont,create_time,update_time,author,like_num,dislike_num");
		return $res;
	}
}