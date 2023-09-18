<?php 
//if else structure
$grade = 3.5;
if ($grade >= 5.0)
  echo "Pass <br>";
else 
  echo "Fail <br>";

//switch case structure
$menu = 1;
switch($menu) {
  case 1:
    echo "You've selected menu 1 ! <br>";
    break;
  case 2:
    echo "You've selected menu 2 ! <br>";
    break;
  case 3:
    echo "You've selected menu 3 ! <br>";
    break;
  defaut:
    echo "Invalid menu ! <br>";
    break;
}
?>

