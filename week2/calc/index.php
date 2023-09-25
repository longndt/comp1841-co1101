<?php
if (!isset($_POST['val1']))
{
	//include your form template here
}
else{
$val1 = $_POST ['val1'] ;
$val2 = $_POST ['val2'] ; 
$calc = $_POS ['calc'] ;
  switch($calc)
	{
      case "add" : $result= $val1 + $val2; 
	break;
      case "sub" : $result= $val1 - $val2; 
	break;
	}
	$output = "Calculation result:" . $result;
 	//include your result template here
}
?>