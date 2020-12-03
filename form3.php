<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$Password = $_POST['Password'];

$conn = new mysqli('localhost','root','root','dynamic3');
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}
else{
	
	$sql = "INSERT INTO website (firstname, lastname, age, gender, email, Password)
VALUES ('$firstname','$lastname','$age','$gender','$email','$Password')";

if ($conn->query($sql) === TRUE) {
    echo "You registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>