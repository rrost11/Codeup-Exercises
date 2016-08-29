<?php


// Create a variable $test equal to 5.

// Create a while loop that checks $test <= 15 and increment $test by 1 inside the loop. Before incrementing $test, output each iteration (echo $test with newline) and display results.

// // Your output should look like this:
//  5
//  6
//  7
//  8
//  9
//  10
//  11
//  12
//  13
//  14
//  15


$test = 5;

while ($test <= 15) {
	echo $test . PHP_EOL;
	$test++;
}

