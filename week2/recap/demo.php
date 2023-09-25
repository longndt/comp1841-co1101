<?php 
// single line comment
/* multiple
   lines
   comment
*/
echo "today is monday<br>";
print "<br>we are learning php";
echo "<br>";
$a = 4;
$b = 5;
echo $a . "<br>";
echo "Greenwich" . " Vietnam" . '<br>';
function add ($x, $y) {  //x, y: parameters
   return ($x + $y);
} 
echo add(10.7,20.6);
echo "<br>";
//incorrect: the total arguments is different with total parameters
//print add($a);
//name of arguments can be different with name of parameters
print add($a, $b); //a, b: arguments
echo '<br';
//incorrect: wrong data type for argument
//print add('Greenwich', 'Vietnam'); 

?>