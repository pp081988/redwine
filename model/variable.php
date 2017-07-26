<?php

class variable
{
	public $COLUMNS = Array("activicity","introduction","tellyou","video");
	public $PRICE = Array("<$50","$51-$100","$101-$150","$151-$200","$201-$300","$301-$400",">$400");
	public $FOOD = Array("牛","羊","豬","家禽","海鮮","小食","甜品","頭盤","街頭食品","各國菜式");

	function conversion($column)
	{
		foreach ($this->COLUMNS as $key => $value) {
			if($column == $value){
				return $key;
			}
		}
	}
}