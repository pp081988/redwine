<?php

class login extends spController{

	public function index()
	{
		$this -> display("login.html");
	}

	public function test()
	{
		$args = new spArgs('post');
		echo $args->get()['username'];
		//echo "hello";
	}

	public function register()
	{
		$this -> display("register.html");
	}
}