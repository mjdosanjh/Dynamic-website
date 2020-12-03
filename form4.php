<?php
	$email = $_POST['email'];
	$Password = $_POST['Password'];

	$email = stripcslashes($email);
	$Password = stripcslashes($Password);
	$email = mysql_real_escape_string($email);
	$Password = mysql_real_escape_string($Password);

	mysql_connect("localhost","root","root");
	mysql_select_db("dynamic");

	$result = mysql_query("SELECT * from table1 where email = '$email' and Password = '$Password'") or die("Failed to query database " .mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['email'] == $email && $row['Password']  == $Password){
		echo "Login success!!! Welcome" .$row['email'];
	}
	else {
		echo "Failed to login!";
	}
?>