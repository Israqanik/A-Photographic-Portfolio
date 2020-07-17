<?php

	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$package=$_POST['package'];
	$details=$_POST['message'];

	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="book";


	$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	{
		die('Connection Error ('.mysqli_connect_errno().')'.mysqli_connect_error());

	}
	else
	{
		$sql="INSERT INTO bookings(name, contact, email, package, details) values ('$name','$contact','$email','$package','$details')";

		if($conn->query($sql)){
			echo "Ordered Successfully";
		}
		else{
			echo "error: ".$sql."<br>".$conn->error;
			
		}

		$conn->close();

	}

?>