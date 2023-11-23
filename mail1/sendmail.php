<?php
   $receiver = "longndt@fpt.edu.vn";
   $subject = "Email test via PHP using Localhost Xampp";
   $body = "This is a test email sent from Localhost Xampp";
   $sender = "longndt@fpt.edu.vn";
   if (mail($receiver, $subject, $body, $sender))
      echo "Sent email succeed !";
   else
      echo "Sent email failed !";
?>

