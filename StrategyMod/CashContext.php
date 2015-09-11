<?php

class CashContext {
	private $cashSuper;
	function __construct($csuper) {
		$this->cashSuper = $csuper;
	}

	public function GetResult ($money) {
		return $cashSuper->acceptCash(money);
	}
} 
