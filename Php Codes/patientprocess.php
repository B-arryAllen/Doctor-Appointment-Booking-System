<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<head>
		<title>Medical Clinic</title>
	</head>
	<body>
		<?php
		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "project_doc";
		//echo "hi";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$dbname);

		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully hi";
		//print_r($_POST);

		?>
		<?php

		$first_name = $_POST['first'];
		$last_name = $_POST['last'];
		$sex = $_POST['sex'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "INSERT INTO patient(first_name, last_name, sex,address, phone, email, password)
		VALUES ('{$first_name}','{$last_name}','{$sex}','{$address}','{$phone}','{$email}',,'{$password}')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
		header('Location: Userlogin.html');
		?>
	</body>
</html>
