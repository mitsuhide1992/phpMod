<?php 
/**
*  
*/
require_once "Prototype.php";

class ConcretePrototype1 extends Prototype
{
	
	function __construct ($a_id) {
		parent::__construct($a_id);
	}

	function __clone () {
		parent::__clone();
		echo "in implement __clone";
	}

	public function myClone () {
		return new self($this->getId());
	}
}

$p1 = new ConcretePrototype1("Im");
$c1 = $p1->myClone();
$c2 = clone $p1;

echo $p1->getId();
echo $c1->getId();
echo $c2->getId();