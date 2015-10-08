<?php
require_once "AbstractClass.php";

class ConcreteClassA extends AbstractClass {
	public function PrimitiveOperation1 () {
		echo "class A function 1 implement\n";
	}

    public function PrimitiveOperation2 () {
		echo "class A function 2 implement\n";
	}
}