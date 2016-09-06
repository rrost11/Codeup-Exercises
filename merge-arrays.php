<?php

// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().
// Test your combine_arrays() function with $names and $compare. The resulting array should look like:



$names   = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// function combine_arrays($arrayOne, $arrayTwo){

//     $newArray = array_merge($arrayOne, $arrayTwo);

//     $newArray = array_unique($newArray);

//     print_r($newArray) . PHP_EOL;
// }
// combine_arrays($names, $compare);





function combine_arrays($arrayOne, $arrayTwo){
    
    $newArray = [];
    
    foreach($arrayOne as $key => $value) {
        if(($arrayOne[$key] === $arrayTwo[$key]) && ($arrayOne[$value] != $arrayTwo[$value])) {
            $newArray[] = array_shift($arrayOne);
            $newArray[] = array_shift($arrayTwo);
        } else {
            $newArray[] = $arrayOne[$value];
            
        }
    }
    return $newArray;
}
$result = combine_arrays($names, $compare);
print_r($result);




// // fun tangent from the exercise review
// function caseInsenesitiveSearch($array, $searchTerm) 
// {
//     foreach ($array as $index => $value) {
//         if (strtolower($searchTerm) == strtolower($value)) {
//             return $index;
//         }
//     }
//     return false;
// }

// // takes an array and a search term
// // returns true or false depending on if the search term is in the array
// function arrayContains($haystack, $needle)
// {
//     $result = array_search($needle, $haystack);
//     return $result !== false;
// }

// // will take two arrays and return the number of items in common between
// // the two
// function compareArrays($arrayOne, $arrayTwo)
// {
//     // keep a count of the common elements
//     $count = 0;
//     // loop through one array for every item
//     foreach ($arrayOne as $value) {
//         // if the item is in the second array, increment our count
//         if (arrayContains($arrayTwo, $value)) {
//             $count += 1;
//         }
//     }
//     // return the count
//     return $count;
// }