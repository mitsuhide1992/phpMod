<?php
/**
*  
*/
//检查类是否被包含，如果不是则包含
require_once "Operation.php";

class OperationAdd extends Operation
{
	//php可以直接重写父类方法，不用声明虚函数
	public function GetResult () {
		$result = 0;
		// private属性不能继承，所以走的父类方法
		$result = $this->NumberA() + $this->NumberB();

		// 如果是public属性则会被继承，可以写下面这种
		// $result = $this->numberA + $this->numberB;
		return $result;
	} 	
}