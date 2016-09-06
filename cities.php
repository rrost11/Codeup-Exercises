<?php


$filename = 'cities.txt';
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
$contentsArray = explode("\n", $contents);
fclose($handle);

print_r($contentsArray);