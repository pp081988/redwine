<?php

class siteCommentLinker extends spModel
{
	public $pk = "id";
	public $table = "site_comment";

	var $linker = array(
			array(
				'type' => 'hasone',   // 关联类型，这里是一对一关联
				'map' => "usersDetail",    // 关联的标识
				'mapkey' => 'username', // 本表与对应表关联的字段名
				'fclass' => "siteUserDetail", // 对应表的类名
				'fkey' => 'username',    // 对应表中关联的字段名
				'enabled' => true     // 启用关联
			)
		);
}