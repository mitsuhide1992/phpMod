<?php
abstract class Prototype {
	private $id;
	function __construct ($a_id) {
		$this->id = $a_id;
	}

	public function getId () {
		return $this->id;
	}

	function __clone () {
		echo "in base __clone";
	}

	public abstract function myClone ();
} 
