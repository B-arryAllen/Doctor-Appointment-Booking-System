<?php
date_default_timezone_set("Asia/Kolkata");
$date=new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d');
//$result = $result+2;
echo $result;
echo "<br>";
$krr = explode('-',$result);
echo "<br>";
$result = implode("",$krr);
$result = $result+2;
$resultd = $result;
echo $result;
//echo $result;

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

// sql to create table
$sql ="CREATE TABLE `project_doc`.`{$result}`( `d_id` INT NOT NULL , `one` INT NOT NULL , `two` INT NOT NULL , `three` INT NOT NULL , `four` INT NOT NULL , `five` INT NOT NULL , `six` INT NOT NULL , `seven` INT NOT NULL , `eight` INT NOT NULL , `nine` INT NOT NULL , `ten` INT NOT NULL , `eleven` INT NOT NULL , `twelve` INT NOT NULL , `thirteen` INT NOT NULL , `fourteen` INT NOT NULL , `fifteen` INT NOT NULL , `sixteen` INT NOT NULL , `seventeen` INT NOT NULL , `eighteen` INT NOT NULL , PRIMARY KEY (`d_id`)) ENGINE = InnoDB";



if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$result = $result-3;
$sql ="DROP TABLE `{$result}`";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfullyyyyyyyyyyyyyyy";
} else {
    echo "Error creating tableyyyyyyyyyyyyyy: " . mysqli_error($conn);
}

//doc filling
$sql = "SELECT 	d_id FROM verified_doctor;";
$result = mysqli_query($conn,$sql);
    if(!$result)
      echo "failed";
    else
      echo "success"; 
    while($row = mysqli_fetch_assoc($result))
    {
       echo $row['d_id'];
       echo "\n";
       $did = $row['d_id']; 
       $sqld ="INSERT INTO `project_doc`.`{$resultd}`(`d_id`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`) VALUES ('{$did}', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');";
       $resultdo = mysqli_query($conn,$sqld);
    if(!$resultdo)
      echo "failed" . mysqli_error($conn);
    else
      echo "success"; 
    }




mysqli_close($conn);
header("Location: index.php?flag=9");

?> 




