<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$venue = $_POST['venue'];
$venueAddress = $_POST['venueAddress'];

// create email body and send it
$to = 'blonobands@gator4132.hostgator.com'; // put your email
$email_subject = "Contact form submitted by:  $name";
$email_body = "Name: $name \n ".
				      "Email: $email\n ".
							"Password: $password \n".
              "Confirm Password: $confirmpassword \n".
							"Venue: $venue \n".
							"VenueAddress: $venueAddress";

$headers = "From: blonobands@blonobands.com\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
