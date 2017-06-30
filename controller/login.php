<?php

class login extends spController{

	function __construct(){
		parent::__construct();
	}

	public function loginIndex()
	{
		$this -> display("login.html");
	}

	public function registerIndex()
	{
		$this -> display("register.html");
	}

	public function register()
	{
		$args = new spArgs();
		echo $args->get()['username'];
		//echo "hello";
	}
}