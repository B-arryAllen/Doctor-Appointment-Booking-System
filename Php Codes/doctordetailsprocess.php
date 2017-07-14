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


    $userid = $_GET['userid'];
   $password = $_GET['password'];


   $sql = "SELECT * FROM verified_doctor where verified_doctor.d_id = '{$userid}' and verified_doctor.password = '{$password}'";
    $result = mysqli_query($conn,$sql);
    if(!$result)
      echo "failed";
    else
      echo "success"; 

    
    //print_r($_POST);

    ?>