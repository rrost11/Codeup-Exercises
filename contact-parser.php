<?php

function parseContacts($filename){
	
	$contacts = [0 => ['name' => 'runs', 'number' => 'never']];

	// todo - read file and parse contacts

	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	trim($contents);
	fclose($handle);

	// var_dump($contents);

	$contents = explode("\n", $contents);


	foreach($contents as $key => $profileInformation){
		if (empty($profileInformation))
		{
			continue;
		}

		$temporaryArray = explode('|', $profileInformation);
		$contacts[$key]['name'] = $temporaryArray[0];
		$contacts[$key]['number'] = phoneNumberDash($temporaryArray[1]);
	}

	return $contacts;
}

// function that formats a phone number

function phoneNumberDash($phoneNumberString)
{
	$phoneNumberString = chunk_split($phoneNumberString, 3, "-");
	$phoneNumberString = substr_replace($phoneNumberString, substr($phoneNumberString, -2, 1) , -3);
	return $phoneNumberString;
};

var_dump(parseContacts('contacts.txt'));