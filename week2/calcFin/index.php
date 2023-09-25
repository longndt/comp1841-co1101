<?php
error_reporting(E_ALL);
if (!isset($_POST['val1']))
{
	include 'templates/form.html.php';
}
else{
$val1 = $_REQUEST ['val1'] ;
$val2 = $_REQUEST ['val2'] ; 
$calc = $_REQUEST ['calc'] ;
if (is_numeric ($val1) && is_numeric ($val2) )
{
      switch($calc)
    	{
      case "add" : $result= $val1 + $val2; 
	break;
      case "sub" : $result= $val1 - $val2; 
	break;
	 case "mul" : $result= $val1 * $val2; 
	break;
	 case "div" : $result= $val1 / $val2; 
	break;
	}
	$output = "Calculation result:" . $result;
 	include 'templates/result.html.php';
    } 

else{ 
	include 'templates/error.html.php';
}
}
?>