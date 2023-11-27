<?php
session_start();
if ($_SESSION["Authorised"] != "Y") {
	header("Location: Notauthorised.php");
}
?>


