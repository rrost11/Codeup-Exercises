<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

echo add(10, 5) . PHP_EOL;

echo subtract(15, 5) . PHP_EOL;

echo multiply(3, 10) . PHP_EOL;

echo divide(21, 7) . PHP_EOL;



function modulus($a, $b)
{
	return $a % $b;
}


echo modulus(100, 22) . PHP_EOL;