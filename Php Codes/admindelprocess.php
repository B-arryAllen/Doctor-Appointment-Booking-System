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
    $id = $_GET["id"];
    echo $id;
    //print_r($_POST);
    $sql = "SELECT * FROM unverified_doctor where temp_id={$id}";
    $result = mysqli_query($conn,$sql);
    if(!$result)
      echo "failed count ";
    else
      echo "success count ";
      //$numo = $result->num_rows;
    //echo $numo;
     // $row = mysqli_fetch_assoc($result);
      
      $row = mysqli_fetch_assoc($result);
      print_r($row);
      $first_name = $row["first_name"];
       $last_name =  $row["last_name"];
      $specialisation =  $row["specialisation"];
      $address =  $row["address"];
      $phone =  $row["phone"];
      $email =  $row["email"];
      $password = $row["password"];
      $t_id = $row["temp_id"];
   // $sql = "SELECT * FROM unverified_doctor";
    //$result = mysqli_query($conn,$sql);




   $sql = "DELETE FROM `unverified_doctor` WHERE temp_id={$id};";
   $result = mysqli_query($conn,$sql);
    if(!$result)
      echo "failed countd ";
    else
      echo "success countd";

    header("Location:admin.php?it=1");
    ?>