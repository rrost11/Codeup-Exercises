<?php



function add($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b . PHP_EOL;
	} else {
		return "ERROR: Both arguments must be numbers\n" . PHP_EOL;
	}
}


function subtract($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a - $b . PHP_EOL;
	} else {
		
		return "ERROR: Both arguments must be numbers\n" . PHP_EOL;
	}
}

function multiply($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b . PHP_EOL;
	} else {
		
		return "ERROR: Both arguments must be numbers\n" . PHP_EOL;
	}
}

function divide($a, $b = null) {
	if ((is_numeric($a) && is_numeric($b)) && $b !== 0) {
		return $a / $b . PHP_EOL;
	} else {
		
		return "ERROR: Both arguments must be numbers\n and you can not divide by 0" . PHP_EOL;
	}
}

function modulus($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b . PHP_EOL;
	} else {
		
		return "ERROR: Both arguments must be numbers\n" . PHP_EOL;
	}
}


echo add(10, 5) . PHP_EOL;

echo subtract(10, 5) . PHP_EOL;

echo multiply(3, 10) . PHP_EOL;

echo divide(21, 0) . PHP_EOL;

echo modulus(100, 22) . PHP_EOL;


