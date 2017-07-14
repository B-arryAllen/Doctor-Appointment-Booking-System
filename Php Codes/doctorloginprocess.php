<?php
		session_start();
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
		$_SESSION['docid'] = $userid;

		$sql = "SELECT * FROM verified_doctor where verified_doctor.d_id = '{$userid}' and verified_doctor.password = '{$password}'";
		$result = mysqli_query($conn,$sql);

		if(!$result)
			echo "failed";
		else
			echo "success"; 
		$numo = $result->num_rows;
		echo $numo;
		if($numo == 0)
		{
			header("Location: Doctorlogin.php?check=0");
		}
		else
		{

		$first_name = "";
		$last_name ="";
		$specialisation ="";
		$address = "";
		$email = "";
		$phone = "";
		$sex = "";
		$age = "";
		$fees = "";
		while($row = mysqli_fetch_assoc($result))
		{
			$first_name =  $row["first_name"];
			$last_name =  $row["last_name"];
			$specialisation =  $row["specialisation"];
			$address =  $row["address"];
			$phone =  $row["phone"];
			$email =  $row["email"];
			$sex = $row["sex"];
		$age = $row["age"];
		$fees = $row["fees"];
			print_r($row);
		}
		//print_r($row);
		//$str = "first = {$first_name}";
		//header("Location: searchType.html?$str");
		//echo $str;
		$str1 = "first={$first_name}";
		$str2 = "userid={$userid}";
		$str3 = "password={$password}";
		$str4 = rawurldecode($str1."&".$str2."&".$str3);
		header("Location: DoctorHome.php?".$str4);
	}
				?>

