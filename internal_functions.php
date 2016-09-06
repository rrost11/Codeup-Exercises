<?php

// TODO: Create your inspect() function here


// At the top of the file, create a new function called inspect() that takes in one argument. Your inspect() function should look at the passed argument and return a string with the variable's type and its value, similar to "The integer is 12.".



function inspect($input){
	$type = gettype($input);
	$value = $input;

	if (is_numeric($input)){
		echo "The $type is $value\n";
	} else if (is_bool($input)) {
		echo "The $type is " . boolval($input) . PHP_EOL;
	} else if (is_string($input)){
		echo "The $type is $value\n";
	} else if (is_null($input)){
		echo "The $type is $value\n";
	} else if (is_array($input)){
		echo "The $type is $value\n";
	}

}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;

inspect($num1) . PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;

inspect($num2) . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;

inspect($num3) . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;

inspect($num4) . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;

inspect($null) . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;

inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;

inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;

inspect($string1) . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;

inspect($string2) . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;

inspect($array1) . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;

inspect($array2) . PHP_EOL;
