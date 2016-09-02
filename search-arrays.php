<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().


function trueOrFalse($someArray){
	if (is_array($someArray) && empty(!$someArray)){
		echo "TRUE" . PHP_EOL;
	} else {
		echo "FALSE" . PHP_EOL;
	}
}


trueOrFalse($names);

trueOrFalse($compare);

