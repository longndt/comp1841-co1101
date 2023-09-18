<?php 
//declare array
$sports = array("football","badminton","voleyball");
$cities = ["Hanoi", "HCM City", "Da Nang"];
//display array with foreach loop
foreach ($sports as $s)
   echo $s . "<br>";
//display array with for loop
for ($i=0; $i<count($cities); $i++) 
   echo $cities[$i] . "<br>";
?>