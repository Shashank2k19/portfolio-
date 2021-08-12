<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['mobile'];


$to = "mr.shekhar008@gmail.com";
$subject = "Mail From Portfolio Website";
$txt =" Name = ". $name . 
"\r\n Email = ". $email . 
"\r\n Mobile number = ". $number .
"\r\n Message = ". $message;


$headers = "From: noreply@mrshekhar.live" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.html");
?>