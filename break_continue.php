<?php

// Create a for loop that shows all even numbers between 1 and 100 using continue.



// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 2 == 1) {
//         continue;
//     } echo $i . "\n";
// }



// counts from 1 to 100, but stops after 10 using break.
// 

for ($i = 1; $i <= 100; $i++) {
	echo $i . "\n";
	if ($i == 10) {
		break;
	}     
}
