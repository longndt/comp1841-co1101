<?php
$name = $_GET['name'];
echo 'welcome to our website, ' . 
htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '!';
?>