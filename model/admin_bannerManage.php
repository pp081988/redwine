<?php
require_once(APP_PATH."/model/upload.php");

class admin_bannerManage extends spController
{
	private $bannerDB;
	private $args;

	function __construct()
	{
		parent::__construct();
		$this->bannerDB = new db("site_banner","id");
		$this->args = spClass("spArgs");
	}

	public function allBanner()
	{
		$condition = null;
		if($this->args->get('vaild')){
			$condition = Array("is_vaild"=>1);
		}
		if($res = $this->bannerDB->findAll($condition)){
			return $res;
		}
	}

	public function addBanner()
	{
		$file = $_FILES['file'];
		if($file['name'] != ""){
			$upload = spClass("upload");
			$image = $upload->upload($file,$theme);
		}
		$conditions = [
			"title"				=>	$this->args->get('title'),
			"link"				=>	$this->args->get('link'),
			"image"				=>	$image,
			"create_time"		=>	date("Y-m-d H:i:s"),
			"admin_username"	=>	$_SESSION['admin_username']
		];
		if($this->bannerDB->create($conditions)){
			return true;
		}
	}

	public function disSwitch()
	{
		$id = $this->args->get("id");
		switch ($this->args->get('operation')) {
			case 'on':
				if($this->bannerDB->updateField(Array("id"=>$id),"is_vaild",1)){
					return true;
				}
				break;
			case 'off':
				if($this->bannerDB->updateField(Array("id"=>$id),"is_vaild",0)){
					return true;
				}
				break;
		}
	}

	public function delBanner()
	{
		$id = $this->args->get("id");
		if($this->bannerDB->delete(Array("id"=>$id))){
			return true;
		}
	}
}