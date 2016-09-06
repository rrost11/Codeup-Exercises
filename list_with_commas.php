 <?php

 // Converts array into list n1, n2, ..., and n3
 // function humanizedList($array) {
   
 // }

 
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';



$famousFakePhysicists = substr_replace($physicistsString, ' and Tony Stark', -12);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";












 // // TODO: Convert the string into an array
 // $physicistsArray = [];

 // // Humanize that list
 // $famousFakePhysicists = humanizedList($physicistsArray);

 
 // echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

 

