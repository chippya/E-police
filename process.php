<?php
session_start();
require 'PHPMailerAutoload.php';
    require 'credential.php';
$mail = new PHPMailer;
    
    $mail->SMTPDebug = 0;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
$rndno=rand(100000,999999);
$message=urlencode("OTP Number:".$rndno);
$mail->setFrom(EMAIL, 'Admin');
    $mail->addAddress($_POST['mailid']);     // Add a recipient
                   // Name is optional
    $mail->addReplyTo(EMAIL);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'OTP Verification..use this code to continue';
    $mail->Body    ="<i>OTP Verification Code:</i>  $message";
   
    $mail->AltBody ="";
     
    if(!$mail->send()) {
        //echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
	header("location:otp.php");
	}
	?>


  



    
    