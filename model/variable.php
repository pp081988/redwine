<?php

class variable
{
	public $COLUMNS = Array("activicity","introduction","tellyou","video","forum");
	public $PRICE = Array("<$50","$51-$100","$101-$150","$151-$200","$201-$300","$301-$400",">$400");
	public $FOOD = Array("牛","羊","豬","家禽","海鮮","小食","甜品","頭盤","街頭食品","各國菜式");
	public $WINE = Array("紅酒","白酒","甜酒","啤酒","威士忌","白蘭地","清酒");
	public $COLOR = Array("rgba(220, 20, 60 ,0.1)","rgba(50, 205, 50 ,0.1)","rgba(139, 69, 19 ,0.1)","rgba(255, 255, 0 ,0.1)","rgba(153, 50, 204 ,0.1)");
	public $TASTE = Array("甜","咸","酸","辣","苦");
	public $AGE = Array("18-25歲","26-30歲","31-35歲","36-40歲","41-45歲",">46歲");
	public $DRINKING = Array("0-1年","1-2年","2-3年",">3年");
	public $SEX = Array("女士","男士");

	function conversion($condition,$type)
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
			case 'AGE':
				$Array = $this->AGE;
				break;
			case 'DRINKING':
				$Array = $this->DRINKING;
				break;
		}
		foreach ($Array as $key => $value) {
			if($value == $condition){
				return $key;
			}
		}
	}
}