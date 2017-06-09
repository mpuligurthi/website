<!--Detecting/"catching" a submit button using PHP - everything caught using a superglobe - submit comes from name attribute - execute only when post_submit value is set
    Mail function takes 4 parameters - email address the message will be sent to, subject, message, and headers. Later concatenate the email to the headers (from, cc etc.)-->

<?php

if(isset($_POST['submit'])){
$to = "example@gmail.com"; //change this to your email address to make this work
$email = $_POST['email'];
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
mail($to,$subject,$txt,$headers);

    //redirecting to a different page
    header("Location: contact.html");
}




?>