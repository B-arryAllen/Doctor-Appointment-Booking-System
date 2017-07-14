<?php
session_start();
$user = $_SESSION['userid'];
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
    $did=$_GET['did'];  
    print_r($_POST);
    $sql = "INSERT INTO `feedback`(`doc_id`, `pat_id`, `feedback`, `rating`, `date`) VALUES ('{$did}','{$user}','{$_POST['commentbox']}','{$_POST['rating']}','{$_GET['date']}');";
    $result = mysqli_query($conn,$sql);

        if(!$result)
            echo "failed";
        else
            echo "success"; 
        $a=1;
     $sql1 = "UPDATE `appointment` SET `disp`=".$a." WHERE `appointment`.d_id={$did} and `appointment`.u_id={$user} and `appointment`.appointment_date='{$_GET['date']}';";
     $result1 = mysqli_query($conn,$sql1);


        if(!$result1)
            echo "failed";
        else
            echo "success"; 

        //ratings

        $sql = "SELECT `rating` FROM `verified_doctor` WHERE d_id={$did};";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result); 
        if(!$result)
            echo "failed rate";
        else
            echo "success rate"; 
        print_r($result);
        print_r($row);
        $rate=$row['rating'];

        echo "rate".$rate;
        $currate="";
        if($rate == -1)
        {
                $currate=$_POST['rating'];
                $sql="UPDATE `verified_doctor` SET `rating`={$currate} WHERE d_id={$did};";
                 $result = mysqli_query($conn,$sql);
        //$row = mysqli_fetch_assoc($result); 
        if(!$result)
            echo "failed rateif";
        else
            echo "success rateif"; 
        }
        else
        {
            $sql="SELECT * FROM `feedback` WHERE doc_id={$did};";
             $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result); 
        if(!$result)
            echo "failed rate";
        else
            echo "success rate"; 
        print_r($result);
        $numo = $result->num_rows;
        echo "$numo";
        echo "rating    ".$_POST['rating'];
        $numo=$numo-1;
        $currate=$rate*$numo;
        $currate=$currate+$_POST['rating'];
        $numo=$numo+1;
        $currate=$currate/$numo;
        echo $currate;
        $sql1 = "UPDATE verified_doctor SET rating = $currate WHERE d_id = $did";
         $result5 = mysqli_query($conn,$sql1);
        //$row = mysqli_fetch_assoc($result); 
        if(!$result5)
            echo "failed rateddddddddddddddddddddddd";
        else
            echo "success rateddddddd"; 
        }





        header("Location:UserFeedback.php");
?>

