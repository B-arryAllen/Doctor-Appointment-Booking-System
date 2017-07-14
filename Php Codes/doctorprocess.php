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
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$specialisation = $_POST['spec'];
		$password = $_POST['password'];
		$area = $_POST['area'];
		$sex = $_POST["sex"];
		$age = $_POST["age"];
		$fees = $_POST["fees"];
		$sql = "INSERT INTO unverified_doctor(first_name, last_name, address, phone, email, specialisation, password,sex,age,fees)
		VALUES ('{$first_name}','{$last_name}','{$address}','{$phone}','{$email}','{$specialisation}','{$password}','{$sex}','{$age}','{$fees}')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$sql = "INSERT INTO `area_address` (`area`, `address`) VALUES ('{$area}','{$address}');";
		echo $address;
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}



		$sql = "SELECT temp_id from unverified_doctor where unverified_doctor.phone={$phone}";
$result = mysqli_query($conn,$sql);
if(!$result)
echo "nope";
$id = mysqli_fetch_assoc($result);
	echo "ffrrff";
//$uid = $id["u_id"];
print_r($id);
//$conn->close();
$conn->close();
header("Location: Doctorlogin.php?id=".$id['temp_id']);


		

		//header('Location: DoctorLogin.php?id=0');

		?>
	</body>
</html>
