<?php
// session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname="medtech";
// $dun= $_POST['dan'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$passwordp = $_POST['password'];

// $seen = $_POST['seen'];
// $froamid =$_SESSION["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}

// // $sql = "SELECT *  FROM position";
// if($dun=='58'){
//     // $dun="";
//     // $dun=$dun.'h'.$name;
//     $sql = `UPDATE  position SET position=`.'h'.$name `  where name='$name'`;
// }
// else{
    //  = "UPDATE  position SET position='$dun'  where name='$name'";
    // $sql=` INSERT INTO 'users' ('name', 'phone', 'password') VALUES ($name,$phone,$passwordp)`;
    $sql= "INSERT INTO `users` ( `name`, `phone`, `password`) VALUES ( '$name', '$phone', '$passwordp')";
// }
// $sql = "UPDATE messages SET seento=1 where  grpid='$grpid' AND ";





$result = $conn->query($sql);


$conn->close();
return $result;

?>