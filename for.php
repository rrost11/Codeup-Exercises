<?php




fwrite(STDOUT, 'Please enter a starting number: ') . PHP_EOL;


$startingInput = trim(fgets(STDIN));

fwrite(STDOUT, 'Please enter an ending number: ') . PHP_EOL;

$endingInput = trim(fgets(STDIN));



$argsAreNumericAndValid = is_numeric($argv[1]) && is_numeric($argv[2]) && $argv[1] < $argv[2];

if ($argc == 3 && $argsAreNumericAndValid) {
    $startingInput = $argv[1];
    $endingInput = $argv[2];
}



for ($startingInput = $startingInput; $startingInput <= $endingInput; $startingInput += 1) {
    echo "$startingInput\n" . PHP_EOL;
}