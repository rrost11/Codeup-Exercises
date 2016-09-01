<?php



function add($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b . PHP_EOL;
	} else {
		return throwErrorMessage("add") . PHP_EOL;
	}
}


function subtract($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a - $b . PHP_EOL;
	} else {
		
		return throwErrorMessage("subtract") . PHP_EOL;
	}
}

function multiply($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b . PHP_EOL;
	} else {
		
		return throwErrorMessage("multiply") . PHP_EOL;
	}
}

function divide($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a / $b . PHP_EOL;
	} else {
		
		return throwErrorMessage("divide") . PHP_EOL;
	}
}

function modulus($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b . PHP_EOL;
	} else {
		
		return throwErrorMessage("modulus") . PHP_EOL;
	}
}


echo add(10, 5) . PHP_EOL;

echo subtract(b, 5) . PHP_EOL;

echo multiply(3, 10) . PHP_EOL;

echo divide(21, 7) . PHP_EOL;

echo modulus(100, 22) . PHP_EOL;


function throwErrorMessage($fx) {
	return "Invalid datatypes in function $fx, expecting number." . PHP_EOL;
}