<?php

class upload extends spController
{
	function upload($file,$position)
	{
		$name = $file['name'];
		$type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
		$allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
		//判断文件类型是否被允许上传
		if(!in_array($type, $allow_type)){
		  //如果不被允许，则直接停止程序运行
			return "e1";
		 	exit;
		}
		//判断是否是通过HTTP POST上传的
		if(!is_uploaded_file($file['tmp_name'])){
		  //如果不是通过HTTP POST上传的
			return "e2";
		 	exit;
		}

		$ext = $this->extend($name);
		$image_name = time().rand(100,999).".".$ext; 

		$separator = "";
		if($position != ""){
			$separator = "/";
		}
		$upload_path = "imgUpload/".$position.$separator.$image_name; //上传文件的存放路径
		//开始移动文件到相应的文件夹
		if(move_uploaded_file($file['tmp_name'],$upload_path)){
		 	return $upload_path;
		}else{
		 	return "failed";
		}
	}

	//获取文件类型后缀 
	function extend($file_name){ 
    	$extend = pathinfo($file_name); 
    	$extend = strtolower($extend["extension"]); 
    	return $extend; 
	} 
}