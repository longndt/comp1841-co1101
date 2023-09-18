<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World php</title>
</head>
<body>
<?php
$theDay = date("l");
echo "The day is $theDay<br />";
$theMonth = date("F");
echo "The month is $theMonth<br />";
$t = date("H");

if ($t < 13) {
  echo "Good morning to you!";
}
else{
    echo "Good afternoon to you";
}
?>
</body>
</html