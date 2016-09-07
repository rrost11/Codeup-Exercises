<?php

// todo - complete this function

function logMessage($level, $message){

// get date and time

	$filename = 'log-' . date("Y-m-d") . '.log';
	$timestamp = date("Y-m-d") . " " . date("H:i:s");
	$stringToWrite = PHP_EOL . $timestamp . " " . $level . " " . $message;


// append/open a file named date

	$handle = fopen($filename, "a");
	fwrite($handle, $stringToWrite);
	fclose($handle);

// add info and error message
	
}

function logError($message){
	logMessage('ERROR', $message);
	}


function logInfo($message){
	logMessage('INFO', $message);
	}




logInfo("User Logged In Successfully");
logError("Username of Password Is Incorrect");


// Desired output 
// filename is log-2016-09-07.log
// each line should look liek the following:
// 2016-09-07  11:10:30 ERROR Username or Password is Incorrect