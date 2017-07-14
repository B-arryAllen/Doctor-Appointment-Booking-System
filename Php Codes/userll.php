
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

		
		?>

