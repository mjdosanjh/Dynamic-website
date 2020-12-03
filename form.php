<?php
$name = $_POST['name'];
$email = $_POST['email'];
$enquiry = $_POST['enquiry'];

$conn = new mysqli('localhost','root','root','dynamic');
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}
else{
	
	$sql = "INSERT INTO website4 (name, email, enquiry)
VALUES ('$name','$email','$enquiry')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>