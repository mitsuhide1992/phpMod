<?php
require_once "TestPaper.php";
require_once "TestPaperA.php";
require_once "TestPaperB.php";

echo "student1's paper\n";
$studentA = new TestPaperA();
$studentA->TestQ1();
$studentA->TestQ2();
$studentA->TestQ3();

echo "student2's paper\n";
$studentB = new TestPaperB();
$studentB->TestQ1();
$studentB->TestQ2();
$studentB->TestQ3();
