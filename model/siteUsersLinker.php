<?php

class siteUsersLinker extends spModel
{
	public $pk = "id";
	public $table = "site_users";

	var $linker = array(
			array(
				'type' => 'hasone',   // 关联类型，这里是一对一关联
				'map' => "activate",    // 关联的标识
				'mapkey' => 'username', // 本表与对应表关联的字段名
				'fclass' => "siteActivate", // 对应表的类名
				'fkey' => 'username',    // 对应表中关联的字段名
				'field' => 'is_vaild',
				'enabled' => true     // 启用关联
			)
		);
}