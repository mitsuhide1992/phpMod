<?php
abstract class AbstractClass {
	public abstract function PrimitiveOperation1 ();
	public abstract function PrimitiveOperation2 ();

	public function TemplateMethod () {
		$this->PrimitiveOperation1();
		$this->PrimitiveOperation2();
	}
}