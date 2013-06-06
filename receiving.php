<?php 
 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $message = $_POST['message']; 
 
if(isset($_POST['submit']))
 
{
    $from_add = "postmaster@laurelham.com"; 
 
    $to_add = "laurel@laurelham.com"; 
     
    $subject = "Email from site";
     
    $message = "Name:$name \n Email: $email \n  Message: $message";
     
    $headers = "From: $from_add \r\n";
    $headers .= "Reply-To: $from_add \r\n";
    $headers .= "Return-Path: $from_add\r\n";
    $headers .= "X-Mailer: PHP \r\n";
     
     
    if(mail($to_add,$subject,$message,$headers)) 
    {
        $msg = "Mail sent";
    } 
}
print "<meta http-equiv=\"refresh\" content=\"0;URL=thanks.shtml\">";
 
 
?>
