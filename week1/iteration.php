<?php 
//for loop
for ($i=1; $i<=100; $i++) {
   if ($i%2!=0)
      echo $i . "<br>";
}
//while loop
$i = 1;
while ($i<=100) {
   echo "$i <br>";
   $i++;
}
//do-while loop
$i = 1;
do {
   echo "$i <br>";
   $i++;
} while ($i<=100);
?>