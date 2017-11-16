<?php
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$about = $_POST['about'];

// create email body and send it
$to = 'blonobands@gator4132.hostgator.com'; // put your email
$email_subject = "Request for event by $name";
$email_body = "Name: $name \n ".
    "Email: $email\n ".
    "Date: $date\n".
    "Time: $time\n\n".
    "About: $about";

$headers = "From: blonobands@blonobands.com\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
