<?php 
//1. function without parameter and no return
function sayHello() {
   echo "Hello world <br>";
   echo "Today is a nice day <br>";
   echo "Coding is interesting <br>";
}
sayHello();
//2. function with parameter and no return
function sayHi($name) {
   echo "Hello " + $name;
}
//3. function without parameter and has return
function welcome() {
   return "Greenwich Vietnam";
}
//4. function with parameter and has return
function calculateTotal ($a, $b) {
   return $a+$b;
}
?>