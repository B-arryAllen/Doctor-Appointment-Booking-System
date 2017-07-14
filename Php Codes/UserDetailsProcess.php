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
    $userid = $_SESSION['userid'];   

print_r($_POST);
$first_name = $_POST['first'];
$last_name = $_POST['last'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = 'UPDATE `patient` SET `first_name`="'.$first_name.'",`last_name`="'.$last_name.'",`address`="'.$address.'",`sex`="'.$sex.'",`email`="'.$email.'",`phone`="'.$phone.'",`password`="'.$password.'" WHERE u_id='.$userid.';';
$id = "";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
   
    header("Location: UserDetails.php");
    
/*$sql = "SELECT * FROM patient where patient.u_id = '{$userid}'";
    $result = mysqli_query($conn,$sql);
    $numo = $result->num_rows;
    echo $numo;
    if($numo == 0)
    {
      //header("Location: Userlogin.php");
      echo "error";
    }
    else
    {
      $first_name = "";
    $last_name ="";
    $sex ="";
    $address = "";
    $email = "";
    $phone = "";
    $row = mysqli_fetch_assoc($result);  

      $first_name =  $row["first_name"];
      $last_name =  $row["last_name"];
      $sex =  $row["sex"];
      $address =  $row["address"];
      $phone =  $row["phone"];
      $email =  $row["email"];
      $password = $row["password"];
      print_r($row);*/
    
  /* }*/

    ?>