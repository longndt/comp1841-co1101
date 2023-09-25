<?php
if (!isset($_POST['firstname'])){
    include 'templates/form.html.php';
} else{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $output = 'welcome to our site, ' .
    htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' '.
    htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';

    include 'templates/welcome.html.php';
}
?>