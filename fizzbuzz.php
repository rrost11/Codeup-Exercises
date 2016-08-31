<?php


$i = 0;

for ($i = 1; $i <= 100; $i += 1) {

    if (($i % 3 == 0) && ($i % 5 == 0)) {
    	echo "FizzBuzz" . PHP_EOL;
  } elseif ($i % 5 == 0) {
    	echo "Buzz" . PHP_EOL;
  } elseif ($i % 3 == 0) {
    	echo "Fizz" . PHP_EOL;
  } else {
		echo "$i\n";
}

}









// Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.
