<?php

/**
* 
*/
class back extends spController
{
	function loginIndex(){

		$this->display("back/login.html");
	}

	private function returnError($str){
		$this->error($str,spUrl("back","loginIndex"));
	}

	private function loginVerify(){
		if(!$_SESSION['username']){
			$this->display("404.html");
			exit;
		}
	}

	function login(){
		if(strtoupper(trim($_POST['verify'])) == $_SESSION['verify_code']){

			

			/********验证为空********/
			$dirtyUsername = trim($_POST['username']);
			if($dirtyUsername == ""){$this->returnError("請輸入賬戶名");exit;}
			if(strlen($dirtyUsername) < 5 || strlen($dirtyUsername) > 20 ){$this->returnError("賬戶名不合法");exit;}
			$dirtyPassword = trim($_POST['password']);
			if($dirtyPassword == ""){$this->returnError("請輸入密碼");exit;}
			if(strlen($dirtyPassword) < 8){$this->returnError("密碼不合法");exit;}
			/********验证为空********/

			/********非法字符串过滤********/
			$filter = spClass("filter");
			$username = $filter->filter($dirtyUsername);
			$password = $filter->filter($dirtyPassword);
			/********非法字符串过滤********/

			/********验证账户密码********/
			$gb = new user("admin_users","id");
			$result = $gb->find(Array('username'=>$username));
			if(!$result){
				$this->returnError("賬戶名或密碼錯誤");exit;
			}
			if(!$gb->find(Array('username'=>$username,"password"=>md5($password.$result['salt'])))){
				$this->returnError("賬戶名或密碼錯誤");exit;
			}
			/********验证账户密码********/
			$_SESSION['username'] = $result['username'];


		}else{
			$this->returnError("驗證碼錯誤");
			exit;
		}
	}

	function backIndex(){
		$this->display("back/index.html");
	}

	function welcome(){
		$this->serverIp = GetHostByName($_SERVER['SERVER_NAME']);
		$this->serverSoftware = $_SERVER['SERVER_SOFTWARE'];
		$this->domainName = $_SERVER["HTTP_HOST"];
		$this->serverPort = $_SERVER['SERVER_PORT'];
		$this->sysInfo = php_uname();
		$this->phpVersion = PHP_VERSION;
		$this->year = date("Y");
		$this->filePath = __FILE__;
		$this->serverLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$this->phpPath = DEFAULT_INCLUDE_PATH;
		$this->display("back/welcome.html");
	}
}