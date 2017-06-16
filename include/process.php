<?php

$email = $_POST["email"];

// enter the emil to receive data
 
$EmailTo = "harristars@gmail.com";
$Subject = "enquiry  From you guys";
 
// prepare email body text

 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
 
// send email
$success = mail($EmailTo, "From:".$email);
//$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>