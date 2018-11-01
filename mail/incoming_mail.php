<?php
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = 'fcafb37c2b9694ee30ec@cloudmailin.net'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: app92710669@heroku.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   

header("Content-type: text/plain");

if ($to){
    mail($to,$email_subject,$email_body,$headers);
    header("HTTP/1.0 200 OK");
    echo('success');
  }else{
    header("HTTP/1.0 403 OK");
    echo('user not allowed here');
  }
  exit;        
?>
