<?php
$date=new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d');
//$result = $result+2;
echo $result;
echo "<br>";
$krr = explode('-',$result);
echo "<br>";
$result = implode("",$krr);
//$result = $result+1;
echo $result;
//echo $result;

/*$servername = "localhost";
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
$sql ="CREATE TABLE `project_doc`.`{$result}`( `d_id` INT NOT NULL , `one` INT NOT NULL , `two` INT NOT NULL , `three` INT NOT NULL , `four` INT NOT NULL , `five` INT NOT NULL , `six` INT NOT NULL , `seven` INT NOT NULL , `eight` INT NOT NULL , `nine` INT NOT NULL , `ten` INT NOT NULL , `eleven` INT NOT NULL , `twelve` INT NOT NULL , `thirteen` INT NOT NULL , `fourteen` INT NOT NULL , `fifteen` INT NOT NULL , `sixteen` INT NOT NULL , `seventeen` INT NOT NULL , `eighteen` INT NOT NULL ) ENGINE = InnoDB";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
*/
?>