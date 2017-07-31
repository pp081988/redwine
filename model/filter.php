<?php

/**
* 
*/
class filter
{

	public $data;
	
	// function __construct($data)
	// {
		
	// }

	function filter($data) {   
		$this->data = $data; 
  		if(!get_magic_quotes_gpc()){    // 判断magic_quotes_gpc是否为打开    
			$this->data = addslashes($this->data);    // 进行magic_quotes_gpc没有打开的情况对提交数据的过滤    
  		}
  		$this->data = str_replace("_", "\_", $this->data);    // 把 '_'过滤掉    
  		$this->data = str_replace("%", "\%", $this->data);    // 把 '%'过滤掉    
  		//$this->data = nl2br($this->data);    // 回车转换    
  		$this->data = htmlspecialchars($this->data);    // html标记转换 防止xss   

  		return $this->data;    
	}
}