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
		$sql="DELETE FROM `appointment` WHERE d_id={$_GET['did']} and u_id={$_SESSION['userid']} and appointment_date='{$_GET['date']}';";
		$result = mysqli_query($conn,$sql);
    if(!$result)
    {  echo "failed count lol";
	}
  else  {  echo "pass count ";}
  $date = $_GET['date'];
$date = explode("-",$date);
	$a=$date;
$a=array_reverse($a,true);
	$date = implode("",$a);

	//$result = implode("",$krr);
	echo $date;
	$col=$_GET['time'];
	$col1 = $_SESSION[$col];
  $sql="UPDATE `{$date}` SET `{$col1}`=0 WHERE d_id={$_GET['did']};";
  $result = mysqli_query($conn,$sql);
    if(!$result)
    {  echo "failed ";
	}
  else  {  echo "pass ";}

  header("Location:CancelBook.php");
  ?>
		