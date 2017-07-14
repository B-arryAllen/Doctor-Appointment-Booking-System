<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "project_doc";
echo "hi";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully hi";
print_r($_POST);

?>
<?php

$first_name = $_POST['first'];
$last_name = $_POST['last'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO patient(first_name, last_name, sex,address, email, phone, password)
VALUES ('{$first_name}','{$last_name}','{$sex}','{$address}','{$email}','{$phone}','{$password}')";
$id = "";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT u_id from patient where patient.phone={$phone}";
$result = mysqli_query($conn,$sql);
if(!$result)
echo "nope";
$id = mysqli_fetch_row($result);
	echo "";
//$uid = $id["u_id"];
print_r($id);
$conn->close();
header("Location: Userlogin.php?id=".$id['0']);
?>
