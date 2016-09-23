<?php 
	require_once("Log.php");

	$logObj = new Log('CLI');
	$logObj->info();
	$logObj->error();

?>