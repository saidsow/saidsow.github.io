<?php 
	/**
	 * We have to put the PHPMailer namespaces at the top of the page.
	*/
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;

	/*
		We have to require the config.php file to use our Gmail account login details.
	*/
	require 'config.php';

	/**
		We have to require the path to the PHPMailer classes.
	*/
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	/**
	 * [The function uses the PHPMailer object to send an email to the address we specify]
	 * @param  [string] $email, [Where our email goes]
	 * @param  [string] $subject, [The email's subject]
	 * @param  [string] $message, [The message]
	 * @return [string]          [Error message, or success]
	 */
	function sendMail($email, $subject, $message){
		$mail = new PHPMailer(true);
	    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
	    $mail->isSMTP();
	    $mail->SMTPAuth = true;
	    $mail->Host = MAILHOST;
	    $mail->Username = USERNAME;
	    $mail->Password = PASSWORD;     				
	    
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	    $mail->Port = 587;   									 

	    // Recipients
	    $mail->setFrom(SEND_FROM, SEND_FROM_NAME);
	    $mail->addAddress($email);
	    $mail->addReplyTo(REPLY_TO, REPLY_TO_NAME);
	    $mail->IsHTML(true);
	    $mail->Subject = $subject;
	    $mail->Body = $message;
	    $mail->AltBody = $message;
	    if(!$mail->send()){
	    	return "Email not send. Please try again";
	    }else{
	    	return "success";
	    }
	}