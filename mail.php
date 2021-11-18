<?php
//get data from form  
$name = $_POST['firstname'];
$name = $_POST['lastname'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$to = "it.kaylablayug@gmail.com";
$subject = "Mail from ReccoMovie";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@reccomovie.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>