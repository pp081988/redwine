<?php

class test extends spController
{
	function upload(){
		if ($_FILES["file"]["error"] > 0)
		  {
		  echo "Error: " . $_FILES["file"]["error"] . "<br />";
		  }
		else
		  {
		  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		  echo "Type: " . $_FILES["file"]["type"] . "<br />";
		  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		  echo "Stored in: " . $_FILES["file"]["tmp_name"];
		  }
		// $name = $file['name'];
		// $type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
		// $allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
		// //判断文件类型是否被允许上传
		// if(!in_array($type, $allow_type)){
		//   //如果不被允许，则直接停止程序运行
		//   return ;
		// }
		// //判断是否是通过HTTP POST上传的
		// if(!is_uploaded_file($file['tmp_name'])){
		//   //如果不是通过HTTP POST上传的
		//   return ;
		// }
		// $upload_path = "D:/now/"; //上传文件的存放路径
		// //开始移动文件到相应的文件夹
		// if(move_uploaded_file($file['tmp_name'],$upload_path.$file['name'])){
		//   echo "Successfully!";
		// }else{
		//   echo "Failed!";
		// }
	}
}