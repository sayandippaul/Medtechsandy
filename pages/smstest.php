<?php

if(isset($_POST['login'])){
	// Authorisation details.
	$username = "sayandip126@gmail.com";
	$hash = "d6200182db5e03ec75cc4762cc8f09a4a4f7df4e26a835a08a45718862ba15a0";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";
$name=$_POST['name'];
	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $_POST['num']; // A single number or a comma-seperated list of numbers
	$otp=mt_rand(100,999);
	$message = "your otp is," otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	echo("otp send successfully");
	curl_close($ch);
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="photop.php" method="post">
    <input type="text" name="name">
    <input type="text" name="num" >
    <input type="submit" name="login" value="sign(login)[send otp]">
    <input type="text" name="otp" >
    <input type="submit" name="ver" value="verify otp">
    </form>
</body>
</html>