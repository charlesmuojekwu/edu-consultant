<?php 


$name = ($_GET['name']) ? $_GET['name'] : $_POST['name'];
$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];
$phone = ($_GET['phone']) ?$_GET['phone'] : $_POST['phone'];
$country = ($_GET['country']) ?$_GET['country'] : $_POST['country'];
$qualification = ($_GET['qualification']) ?$_GET['qualification'] : $_POST['qualification'];
$comment = ($_GET['comment']) ?$_GET['comment'] : $_POST['comment'];




$to = "tysamare2021@gmail.com";
$subject = "Message via Foldam Form";

/* Let's prepare the message for the e-mail */
$message = "

 	Name: $name
	E-mail: $email
	Country: $country
	Qualification: $qualification
	Message: $comment

";


mail($to, $subject, "From" . $message);

header( "Location: thanks" );




?>
    
    
  