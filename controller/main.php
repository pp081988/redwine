﻿<?php
require(APP_PATH."/model/email.php");
class main extends spController
{
	function __construct(){
		parent::__construct();
		
	}
	
	function index(){
		$this->display("index.html");
	}

	function activicity(){
		$this -> display("activicity.html");
	}

	function forum(){
		$this -> display("forum.html");
	}

	function video(){
		$this -> display("video.html");
	}

	function tellyou(){
		$this -> display("tellyou.html");
	}

	function introduction(){
		$this -> display("introduction.html");
	}

	function mail(){
		$email = spClass("email");
		$email->send();
	}

	function aboutus(){
		$this->display("aboutus.html");
	}
}	