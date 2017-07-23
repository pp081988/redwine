<?php

class variable
{
	public $COLUMNS = Array("activicity","introduction","tellyou","video");

	function conversion($column)
	{
		foreach ($this->COLUMNS as $key => $value) {
			if($column == $value){
				return $key;
			}
		}
	}
}