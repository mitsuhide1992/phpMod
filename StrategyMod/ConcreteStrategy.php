<?php
require_once "Strategy.php";

class ConcreteStrategyA extends Strategy {
	public function AlgorithmInterface () {
		echo "算法A实现\n";
	}
}

class ConcreteStrategyB extends Strategy {
	public function AlgorithmInterface () {
		echo "算法B实现\n";
	}
}

class ConcreteStrategyC extends Strategy {
	public function AlgorithmInterface () {
		echo "算法C实现\n";
	}
}
