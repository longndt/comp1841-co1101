<?php 
$name = $_GET['name'];
$id = $_GET['id'];
$email = $_GET['email'];
echo "<table border=1>";
echo "<tr>";
echo "<th>Name</th>";
echo "<td>$name</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Id</th>";
echo "<td>$id</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Email</th>";
echo "<td>$email</td>";
echo "</tr>";
echo "</table>";
?>