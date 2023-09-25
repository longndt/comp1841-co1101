<?php 
//VERY IMPORTANT: you can only get values you send from HTML through "name"
$university = $_GET['university'];
$city = $_GET['thanhpho'];

echo "University: " . $university . "<br>";
echo "City: " . $city;
?>