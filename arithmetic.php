<?php



function add($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b . PHP_EOL;
	} else {
		return "ERROR: Both arguments must be numbers\n";
	}
}


function subtract($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a - $b . PHP_EOL;
	} else {
		
		return "ERROR: Both arguments must be numbers\n";
	}
}

function multiply($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b . PHP_EOL;
	} else {
		
		return "ERROR: Both arguments must be numbers\n";
	}
}

function divide($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a / $b . PHP_EOL;
	} else {
		
		return "ERROR: Both arguments must be numbers\n";
	}
}

function modulus($a, $b = null) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b . PHP_EOL;
	} else {
		
		return "ERROR: Both arguments must be numbers\n";
	}
}


echo add(10, 5) . PHP_EOL;

echo subtract(b, 5) . PHP_EOL;

echo multiply(3, 10) . PHP_EOL;

echo divide(21, 7) . PHP_EOL;

echo modulus(100, 22) . PHP_EOL;


