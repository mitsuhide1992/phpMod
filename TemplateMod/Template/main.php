<?php 
require_once "ConcreteClassA.php";
require_once "ConcreteClassB.php";

$ccA = new ConcreteClassA();
$ccA->TemplateMethod();

$ccB = new ConcreteClassB();
$ccB->TemplateMethod();