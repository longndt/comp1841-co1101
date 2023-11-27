<?php
session_start();
echo "Testing sessions as a basic shopping cart <br /><br />";
echo"iPod and DVD Player<br /><br />";
echo "<a href='checkout.php'>Go to Checkout page</a>";
$_SESSION['product1'] = "iPod";
$_SESSION['price1'] = 150;
$_SESSION['product2'] = "DVD Player";
$_SESSION['price2'] = 100;

?>

