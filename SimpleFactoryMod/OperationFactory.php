<?php

require_once "Operation.php" ;
require_once "OperationAdd.php" ;
require_once "OperationSub.php" ;
require_once "OperationDiv.php" ;
require_once "OperationMul.php" ;

class OperationFactory {
	public static function createOperation ($operate) {
		$operationFunction = array(
			"+" => "OperationAdd",
			"-" => "OperationSub",
			"/" => "OperationDiv",
			"*" => "OperationMul"
		);
		// var_dump($operationFunction[$operate]);
		if ($operationFunction[$operate] != NULL) {
			//反射机制，$operationFunction[$operate]是类名，根据类名动态创建类
			// $operationClass = new ReflectionClass($operationFunction[$operate]);
			$operationClass = new ReflectionClass($operationFunction[$operate]);
			$operationInstance = $operationClass->newInstance();
			return $operationInstance;
		}
	}
}

$oper = OperationFactory::createOperation("-");

$oper->NumberA(2);
$oper->NumberB(4);

$result = $oper->GetResult();
var_dump($oper->GetResult());
// $s = mb_strlen("zldasda","8bit");