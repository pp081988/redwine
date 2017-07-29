<?php

class variable
{
	public $COLUMNS = Array("activicity","introduction","tellyou","video");
	public $PRICE = Array("<$50","$51-$100","$101-$150","$151-$200","$201-$300","$301-$400",">$400");
	public $FOOD = Array("牛","羊","豬","家禽","海鮮","小食","甜品","頭盤","街頭食品","各國菜式");
	public $WINE = Array("紅酒","白酒","甜酒","啤酒","威士忌","白蘭地","清酒");

	function conversion($value,$type)
	{
		switch ($type) {
			case 'COLUMNS':
				$Array = $this->COLUMNS;
				break;
			case 'PRICE':
				$Array = $this->PRICE;
				break;
			case 'FOOD':
				$Array = $this->FOOD;
				break;
			case 'WINE':
				$Array = $this->WINE;
				break;
		}
		foreach ($Array as $key => $value) {
			if($column == $value){
				return $key;
			}
		}
	}
}