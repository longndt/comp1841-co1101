<?php
session_start();
  echo "<h2>You have the following in your cart <br /></h2>";
  echo $_SESSION['product1'] . " -- for &pound;"; 
  echo $_SESSION['price1'] ."<br /><br />" ;
  echo $_SESSION['product2'] . " -- for &pound;";
  echo $_SESSION['price2'] . "<br /><br />";
  $val1 = $_SESSION['price1'];
  $val2 = $_SESSION['price2'];
  $total = $val1 + $val2 ;
  echo "<b> The total for your shopping is  &pound;</b> ";
  echo"<b>" .  $total . "</b>";
?>

