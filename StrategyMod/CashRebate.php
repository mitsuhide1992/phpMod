<?php
/**
*  
*/
require_once "CashSuper.php";

class CashRebate extends CashSuper
{
	private $moneyRebate = 1;

	public function CashRebate ($mR) {
		$this->moneyRebate = $mR;
	}

	public function acceptCash ($money) {
		return $money * $this->moneyRebate;
	}
}