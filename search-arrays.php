<?php

$names   = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// fun tangent from the exercise review
function caseInsenesitiveSearch($array, $searchTerm) 
{
    foreach ($array as $index => $value) {
        if (strtolower($searchTerm) == strtolower($value)) {
            return $index;
        }
    }
    return false;
}

// takes an array and a search term
// returns true or false depending on if the search term is in the array
function arrayContains($haystack, $needle)
{
    $result = array_search($needle, $haystack);
    return $result !== false;
}

// will take two arrays and return the number of items in common between
// the two
function compareArrays($arrayOne, $arrayTwo)
{
    // keep a count of the common elements
    $count = 0;
    // loop through one array for every item
    foreach ($arrayOne as $value) {
        // if the item is in the second array, increment our count
        if (arrayContains($arrayTwo, $value)) {
            $count += 1;
        }
    }
    // return the count
    return $count;
}