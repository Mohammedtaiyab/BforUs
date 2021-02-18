<?php
// require "PHPMailer/PHPMailerAutoload.php";
use PHPMailer\src\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'SMTP'; 
        $mail->Host = 'mail.bforus.in';
        $mail->Port = 465;  
        $mail->Username = 'info@bforus.in';
        $mail->Password = 'Bforus@123';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="info@bforus.in";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
 
    
    $to='mohammedbori44@gmail.com';
    $from="info@bforus.in";
    $name= "Mohammed";
    $subj = "Order";
   $msg = "Order Place"; 
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    
    
?>