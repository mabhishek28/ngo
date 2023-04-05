<?php
//get data from form  

$name = $_POST['fname'];
$date = $_POST['date'];
$day= $_POST['days'];
$trs = $_POST['transaction'];
$to = "balsevaa87@gmail.com";
$subject = "Joining";
$txt ="Name = ". $name . "\r\n  Date of Joining = " . $date . "\r\n No. of days Available = " . $day;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: anonymous@ghost.com";
if($date=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>