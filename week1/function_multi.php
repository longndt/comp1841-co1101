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
function addNumber($a, $b, $c){
    $total = $a + $b + $c;
    echo "$a + $b + $c = $total";
}
addNumber(5, 12, 15);
?>

</body>
</html>