<?php 
//TASK 1
//define function
function hello() {
   print "Hello, World !";
}
//call function
hello();
echo "<br>";

//TASK 2
$month = date("F"); //get current month
//echo $month;
//check whether current month is August or not
if ($month == "August")
   echo "It's August, so it's really hot.";
else
   echo "Not August, so at least not in the peak of the heat.";
echo "<br>";

//TASK 3
//define function
function calculateRectangleArea ($w, $h) {
   $area = $w * $h;
   $output = "A rectangle of width $w and height $h has an area of $area.";
   return $output;
}
//call function
echo calculateRectangleArea(3.0, 5.0);
?>