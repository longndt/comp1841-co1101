<?php 
//use "$" symbol to declare variables in PHP
/*PHP is a loosely-typed language => we don't need to declare the
data type of variable */

//declare variables
$a = 3;  //integer
$b = 3.14;  //float
$c = true;  //boolean
$d = "greenwich";  //string
//display variables' value
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo "d = " . $d . "<br>";
// we use "." (dot symbol) for string concatenation (merge)

$x = 10;
$y = 20;
$z = $x + $y;
echo "x + y = $x + $y = $z" . "<br>";

$a = 17;
$b = 5;
$c = $a + $b;  //addition
$d = $a - $b;  //substraction
$e = $a * $b;  //multiplication
$f = $a / $b;  //division
$g = $a % $b;  //modulus (get the remainder of a division)
echo $c . "<br>";
echo $d . "<br>";
echo $e . "<br>";
echo $f . "<br>";
echo $g . "<br>";

$x = 10;
$y = $x++; //postfix increment : y=x=10 -> x++=x+1=10+1=11
$z = ++$x; //prefix increment  : ++x=x+1=11+1=12 -> z=x=12

echo "x = $x <br>";  //12
echo "y = $y <br>";  //10 
echo "z = $z <br>";  //12
?>