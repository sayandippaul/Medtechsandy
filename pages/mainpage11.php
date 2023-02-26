
<?php
	include('phpmailer/PHPMailerAutoload.php');

	// function sendOTP($toEmail, $otp)


		$toEmail =$_POST['email'];
		// $con =$_POST['content'];
		$otp=rand(99999,999999);
		$path="Downloads";
		// $name="RANKCARD.pdf";
		$mail = new PHPMailer;
		$mail->isSMTP();  //Only enable when use in local server 

		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';

		$mail->Username = 'akanup67@gmail.com';
		$mail->Password = 'cupevpmbrweikbvo';

		$mail->setFrom('akanup67@gmail.com', 'Online journey Service');
		$mail->addAddress($toEmail);
		$mail->addReplyTo('akanup67@gmail.com');
		// $mail->addAttachment($file_name); 
		// $mail->addAttachment("RANKCARD.pdf");     				//Adds an attachment from a path on the filesystem

		$mail->isHTML(true);
		$mail->Subject = 'OTP (One Time Password) for Registraion.';
		$mail->Body = '<h1>Your OTP(One Time Password) for registration is : '.$otp.'</h1>';

		if(!$mail->send())
		{
			echo "not sent";
		}
		else{
			echo $otp;
		}
	// }
?>
