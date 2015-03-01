

<?php

	 include 'PHPMailer/class.phpmailer.php';
	 include 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();

			
		
			$mail->IsSMTP();
			$mail->Mailer = 'smtp';
			$mail->SMTPAuth = true;
			$mail->SMTPDebug  = 2; 
			$mail->Host = 'smtp.yandex.com'; // "ssl://smtp.gmail.com" didn't worked
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			// or try these settings (worked on XAMPP and WAMP):
			// $mail->Port = 587;
			// $mail->SMTPSecure = 'tls';
			
			
			$mail->Username = "keerthana1903@gmail.com";
			$mail->Password = "ANGELFISH";
			
			$mail->IsHTML(true); // if you are going to send HTML formatted emails
			$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
			
			$mail->From = "ConsultinCloud";
			$mail->FromName = "ConsultinCloud";
			
			$mail->addAddress("saravanan@webbylogic.com");
			$mail->To= "saravanan@webbylogic.com";
			//$mail->addAddress("user.2@gmail.com","User 2");
			//
			//$mail->addCC("user.3@ymail.com","User 3");
			//$mail->addBCC("user.4@in.com","User 4");
			
			$mail->Subject = "test";
			$mail->MsgHTML("test");
			
			if(!$mail->Send()){
			echo "<script>alert('Message sent failed');</script>";
			}
			
			else{	
			echo "<script>alert('An invite has been sent to your email. Please click on the registration link you received. Our Team will activate your profile after verification.Thanks!!');</script>";
			}
?>			