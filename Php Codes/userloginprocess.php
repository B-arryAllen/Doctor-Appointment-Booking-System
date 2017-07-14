<?php
		$servername = "localhost";
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
		$password = $_POST['password'];
		$userid = $_POST['userid'];

		$sql = "SELECT * FROM patient where patient.u_id = '{$userid}' and patient.password = '{$password}'";
		$result = mysqli_query($conn,$sql);
		$numo = $result->num_rows;
		echo $numo;
		if($numo == 0)
		{
			header("Location: Userlogin.php?check=0");
		}
		else
		{
			session_start();
			$_SESSION['userid'] = $userid;
			$_SESSION['9:00am'] = "one";
			$_SESSION['9:30am'] = "two";
	$_SESSION['10:00am'] = "three";
	$_SESSION['10:30am'] = "four";
$_SESSION['11:00am'] = "five";
$_SESSION['11:30am'] = "six";
$_SESSION['1:00pm'] = "seven";
$_SESSION['1:30pm'] = "eight";
$_SESSION['2:00pm'] = "nine";
$_SESSION['2:30pm'] = "ten";
$_SESSION['3:00pm'] = "eleven";
$_SESSION['3:30pm'] = "tweleve";
$_SESSION['5:00pm'] = "thirteen";
$_SESSION['5:30pm'] = "fourteen";
$_SESSION['6:00pm'] = "fifteen";
$_SESSION['6:30pm'] = "sixteen";
$_SESSION['7:00pm'] = "seventeen";
$_SESSION['7:30pm'] = "eighteen";
$a = '7:30pm';
//echo $_SESSION[$a];

		if(!$result)
			echo "failed";
		else
			echo "success"; 


		$first_name = "";
		$last_name ="";
		$sex ="";
		$address = "";
		$email = "";
		$phone = "";
		while($row = mysqli_fetch_assoc($result))
		{
			$first_name =  $row["first_name"];
			$last_name =  $row["last_name"];
			$sex =  $row["sex"];
			$address =  $row["address"];
			$phone =  $row["phone"];
			$email =  $row["email"];
			print_r($row);
		}
		//print_r($row);
		$str = "first={$first_name}";
		header("Location: BookingType.php?".$str);
	}
		//echo $str;
				?>

