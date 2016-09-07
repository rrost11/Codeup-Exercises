<?php

 function newServerName($arrayOne, $arrayTwo){

	shuffle($arrayOne);
	shuffle($arrayTwo);

	$newArrayOne = array_rand($arrayOne, 1);
	$newArrayTwo = array_rand($arrayTwo, 1);
	
	

	$finalName = strtoupper($arrayOne[$newArrayOne]) . ' ' . strtoupper($arrayTwo[$newArrayTwo]);


	echo "Your new randomly generated server name is: " . $finalName . PHP_EOL;
}


$serverAdjectives = ["Ancient", "Fuzzy", "Plush", "Frosty", "Wrinkly", "Meandering", "Glassy", "Bulky", "Mysterious", "Lavish", "Muffled", "Creaky", "Crabby", "Bashful", "Nimble", "Fluttering", "Wild", "Creaky", "Sizzling", "Fussy", "Microscopic", "Ornery", "Graceful", "Momentous", "Peaceful", "Aromatic", "Ubiquitous", "Fluffy", "Invisible", "Crumpled", "Detailed", "Arrogant", "Sentimental", "Illuminated", "Dull", "Boring", "Common", "Flaky", "Injured", "Shiny"];

$serverNouns = ["Ukulele", "Kazoo", "Banjo", "Opera", "Circus", "Trampoline", "Carousel", "Carnival", "Cookie", "Puppy", "Barrel", "Bakery", "Toaster", "Psychic", "Investigator", "Coffee", "Karate", "Furnace", "Accountant", "Armadillo", "Barometer", "Billboard", "Blizzard", "Catamaran", "Crayon", "Dogsled", "Fountain", "Hippopotamus", "Llama", "Mosquito", "Orchid", "Pineapple", "Quicksand", "Ravioli", "Seaplane", "Submarine", "Tadpole", "Volcano", "Wallaby", "Vinyl"];

	

$message =  "Your new randomly generated server name is: " . newServerName($serverAdjectives, $serverNouns);