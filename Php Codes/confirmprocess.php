<?php 
session_start();
    $book = urldecode($_GET['book']);
    echo $book;
    $pieces = explode(" ",$book);
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
    //echo "Connected successfully hi";   
    //print_r($_POST);
    $sql ="INSERT INTO `appointment` (`d_id`, `u_id`, `appointment_date`, `appointment_time`) VALUES ('{$_SESSION['did']}', '{$_SESSION['userid']}', '{$pieces['2']}', '{$pieces['0']}');";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {  header("Location: appointment.php?did={$_SESSION['did']}&check=0");
	}
  else  {  echo "pass count ";

		$_SESSION['date'] = $pieces['2'];
		$_SESSION['time'] = $pieces['0'];
		echo $pieces['0'];
			$date = explode("-",$pieces['2']);
	$a=$date;
$a=array_reverse($a,true);
	$date = implode("",$a);
	//$result = implode("",$krr);
	echo $date;
	$slot = $_GET['slot'];
	echo $slot;
	
		$sql = "UPDATE `{$date}` SET `{$slot}` = '1' WHERE `{$date}`.`d_id` = {$_SESSION['did']};";
	$result = mysqli_query($conn,$sql);
    if(!$result)
    {  echo "failed counttt ";
	}
  else  {  echo "pass count ";}
	

header("Location: confirmationpage.php");}
?>