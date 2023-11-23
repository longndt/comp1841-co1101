<?php
//1st case: display the form for user to send email
if (!isset($_POST['send'])) {
   include 'contact.html.php';
} else {
   $title = $_POST['title'];
   $content = $_POST['content'];
   include 'phpmailer.php';
}
?>