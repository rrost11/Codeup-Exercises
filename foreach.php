<?php


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


foreach ($things as $item) {
    if (is_numeric($item)) {
        echo "{$item} is an is_integer\n";
    } else if (is_string($item)) {
        echo "{$item} is a string\n";
    } else if (is_null($item)) {
        echo "{$item} is null\n";
    } else if (is_array($item)) {
        echo "{$item} is an array\n";
    } else if (is_float($item)) {
        echo "{$item} is a float\n";
    } else if (is_string($item)) {
        echo "{$item} is a string\n";
    } else if (is_bool($item)) {
        echo "{$item} is boolean\n";
    }
}





// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

