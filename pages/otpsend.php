<?php 
 $name=$_POST['name'];
// $phone=$_POST['phone'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="medtech";
// $dun= $_POST['dan'];
// $name = $_POST['name'];
// $phone = $_POST['phone'];
$passwordp = $_POST['password'];

// $seen = $_POST['seen'];
// $froamid =$_SESSION["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}

$sql = "SELECT *  FROM users";
$result = $conn->query($sql);
        // $i=0;$temp="";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // $temp=$temp.'"'.$row["name"].'":'.'"'.$row["position"].'",';
                if($row["name"]==$name  && $row["password"]==$passwordp )
                    echo 1;
                    }
        }
        // echo $temp;
        


$conn->close();
return $result;

?> 
