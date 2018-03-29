<?php 	
session_start();
if (isset($_GET['calc_submit'])) {

	$c_1 = $_GET['c_1'];
	$type = $_GET['type'];
	$c_2 = $_GET['c_2'];

	if ($type == '+') {
		$_SESSION['result'] = $c_1 + $c_2;
		header("location: calc.php");	
	}

	if ($type == 'x') {
		$_SESSION['result'] = $c_1 * $c_2;
		header("location: calc.php");
	}

	if ($type == '/') {
		$_SESSION['result'] = $c_1 / $c_2;
		header("location: calc.php");
	}

	if ($type == '-') {
		$_SESSION['result'] = $c_1 - $c_2;
		header("location: calc.php");
	}

	}

 ?>