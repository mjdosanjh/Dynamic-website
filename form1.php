<?php
$mail_subscribe = $_POST['mail_subscribe'];

$conn = new mysqli('localhost','root','root','dynamic1');
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}
else{
	
	$sql = "INSERT INTO website (mail_subscribe)
VALUES ('$mail_subscribe')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>