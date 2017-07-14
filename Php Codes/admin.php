<?php
session_start();

  if(isset($_POST['id']))
  {
    if(!($_POST['id']==="admin" && $_POST['password']=="123")) 
      header("Location: adminlogin.php");
     $_SESSION['aid'] = "admin";
  }
  
    else
    {
      if(isset($_GET['it']))
  if(!($_GET["it"]==1))
  {
    header("Location: adminlogin.php");
  }
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="booking_type.css" media="screen" />
<link rel="stylesheet" type = "text/css" href= "table.css">
<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
<script type='text/javascript' src='script.js'></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
</head>
<body>
<?php 
if(isset($_SESSION['aid']))
{

 

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
    $sql = "SELECT * FROM unverified_doctor";
    $result = mysqli_query($conn,$sql);
    if(!$result)
      echo "failed count ";
    else
      //echo "success count ".$result;
      //$numo = $result->num_rows;
    //echo $numo;
     // $row = mysqli_fetch_assoc($result);
     // print_r($result->num_rows);
   // $sql = "SELECT * FROM unverified_doctor";
    //$result = mysqli_query($conn,$sql);

    $first_name = "";
    $last_name ="";
    $specialisation ="";
    $address = "";
    $email = "";
    $phone = "";
    $sex="";
    $age="";
    $fees="";
    ?>
    
<?php

/*else
{
  //header("Location:adminlogin.php");
}*/

?>
<div id="main_container">
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a class="current" href="Admin.php">View Requests</a></li>
          <li><a href="AdminViewPatients.php">View Patients</a></li>
          <li><a href="AdminViewDoctors.php">View Doctors</a></li>
          <li><a href="adminAppointments.php">Appointments</a></li>
          <li><a href="Adminfeedback.php">All Feedbacks</a></li>
          <li><a href="adminprocesslogout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="main_content">
<div id = "tables" style="overflow:auto;">

<table class= "flatTable" style="overflow:y-auto">
<tr class="titleTr">
    <td class="headingTr1" colspan = "8"><font family = "sans-serif">P E N D I N G  &nbsp&nbsp&nbsp&nbsp&nbsp R E Q U E S T</td></font>
  </tr>
	<tr class="headingTr">
      <th> Temp_id </th>
			<th> F_Name </th>
      <th> L_Name </th>
			<th> Specialisation </th>
			<th> Address </th>
			<th> Phone No. </th>
      <th> Email-ID </th>
      <th> Action </th>
		</tr>	
    <?php
    while($row = mysqli_fetch_assoc($result))
    {?>
  <tr>
  <td>
    <?php echo  $row["temp_id"];
    $r =$row["temp_id"] ;?>
  </td>
  <td>
    <?php echo  $row["first_name"];?>
  </td>
  <td>
    <?php echo  $row["last_name"];?>
  </td>
  <td>
    <?php echo  $row["specialisation"];?>
  </td>
  <td>
    <?php echo  $row["address"];?>
  </td>
  <td>
    <?php echo  $row["phone"];?>
  </td>
  <td>
    <?php echo  $row["email"];?>
  </td>
    <td>
    <a href = "adminprocess.php?id=<?php echo $r;?>"><input type="button" value="ADD" class="buttona button2"></a>
    </td>
   </tr>   
 
  <?php
      $last_name =  $row["last_name"];
      $specialisation =  $row["specialisation"];
      $address =  $row["address"];
      $phone =  $row["phone"];
      $email =  $row["email"];
      $password = $row["password"];
      $t_id = $row["temp_id"];
     // print_r($row);

    }
  }
    ?>
 </table>
</div>
    
          </div>
    <div class="clear"></div>
    <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
  </div>
</body>
</html>
