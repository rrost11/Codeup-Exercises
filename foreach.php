<?php


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

// foreach ($things as $item) {
//     if (is_numeric($item)) {
//         echo "{$item} is an is_integer\n";
//     } else if (is_string($item)) {
//         echo "{$item} is a string\n";
//     } else if (is_null($item)) {
//         echo "{$item} is null\n";
//     } else if (is_array($item)) {
//         echo "{$item} is an array\n";
//     } else if (is_float($item)) {
//         echo "{$item} is a float\n";
//     } else if (is_string($item)) {
//         echo "{$item} is a string\n";
//     } else if (is_bool($item)) {
//         echo "{$item} is boolean\n";
//     }
// }





// Construct a loop that iterates through each value and outputs only values with a type that is scalar.


// foreach ($things as $item) {
// 	if (is_scalar($item)) {
// 		echo "{$item} is " . gettype($item) .".\n";
// 	} else {
// 		echo "{$item} is not scalar.\n";
// 	}
// }



// Create a loop that will echo out every value, including those nested in arrays. Output should look like this.


foreach ($things as $item) {       
        if (is_array($item)) {
    			print_r($item);
    	}	
        	else {
        		echo "{$item}\n";	
    		}
    	}
 


