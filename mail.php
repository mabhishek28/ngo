<?php
//get data from form  

$name = $_POST['name'];
$message = $_POST['message'];
$amount= $_POST['amount'];
$trs = $_POST['transaction'];
$to = "balsevaa87@gmail.com";
$subject = "Donation";
$txt ="Name = ". $name . "\r\n  Amount = " . $amount . "\r\n Transaction ID = " . $trs . "\r\n Message = " . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: anonymous@ghost.com";
if($amount=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>