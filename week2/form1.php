<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
echo 'welcome to our website, ' . 
htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' '.
htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
?>