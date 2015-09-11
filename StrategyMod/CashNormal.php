<?php
/**
*  
*/
require_once "CashSuper.php";

class CashNormal extends CashSuper
{
	public function acceptCash ($money) {
		return $money;
	}
}