<?php

require_once "ConcreteStrategy.php";

class Context {
	private $strategy;
	function __construct($st) {
		$this->strategy = $st;
	}

	public function ContextInterface () {
		$this->strategy->AlgorithmInterface();
	} 

}

$context = new Context(new ConcreteStrategyA());
$context->ContextInterface();

$context = new Context(new ConcreteStrategyB());
$context->ContextInterface();

$context = new Context(new ConcreteStrategyC());
$context->ContextInterface();


