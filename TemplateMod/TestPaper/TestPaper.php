<?php
/**
*  
*/
class TestPaper 
{
	public function TestQ1 () {
		echo "The question 1 content.Choices is a,b,c.\n";
		echo $this->Answer1()."\n";
	}	

	public function TestQ3 () {
		echo "The question 3 content.Choices is a,b,c.\n";
		echo $this->Answer2()."\n";
	}	

	public function TestQ2 () {
		echo "The question 2 content.Choices is a,b,c.\n";
		echo $this->Answer3()."\n";
	}	

	public function Answer1 () {
		return "";
	}

	public function Answer2 () {
		return "";
	}

	public function Answer3 () {
		return "";
	}

}