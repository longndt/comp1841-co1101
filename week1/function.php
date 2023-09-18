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
//declare function
function tester(){
    echo "This is my first function which I am going to call twice";
}
//call function 1st time
tester();
?>
<p>***** Here is some HTML *******</p>
<p>*** And now I will use the PHP function again ***</p>
<?php 
//call function 2nd time
tester(); 
?>
</body>
</html>