<?php
require_once 'Rectangle.php';
require_once 'Square.php';
$rectangle = new Rectangle(4, 5);
echo 'The area is ' . $rectangle->area() . PHP_EOL;
$square = new Square(5, 5);
echo 'The area is ' . $square->area() . PHP_EOL;
echo 'The perimeter is ' . $square->perimeter() . PHP_EOL;