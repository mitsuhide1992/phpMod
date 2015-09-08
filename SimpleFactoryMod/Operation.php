<?php
class Operation {
	public $numberA = 0;
	public $numberB = 0;
	
	//参数有了默认值则可以缺省
	public function NumberA ($nA = NULL) {
		if ($nA != NULL) {
			$this->numberA = $nA;
		} else {
			return $this->numberA;
		}
	}

	//参数有了默认值则可以缺省
	public function NumberB ($nB = NULL) {
		if ($nB != NULL) {
			$this->numberB = $nB;
		} else {
			return $this->numberB;
		}
	}

	//要重写的父类方法，多态
	public function GetResult () {
		$result = 0;
		return $result;
	}
}

