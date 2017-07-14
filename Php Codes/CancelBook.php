<?php
session_start();
 if (!isset($_SESSION['userid'])){
  header("Location: Userlogin.php");
} 
//header("Location: Userlogin.php");

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BOOK MY DOC</title>
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

<div id="main_container">
  <div class="header">
  
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="UserDetails.php">My Details</a></li>
          <li><a href="bookingType.php">Book now</a></li>
          <li><a href="ViewBook.php">View Bookings</a></li>
          <li><a class="current" href="CancelBook.php">Cancel Booking</a></li>
          <li><a href="UserFeedback.php">Feedback</a></li>
          <li><a href="userprocesslogout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="main_content">
          <div id = "tables" style="overflow-x:auto;">
<table class= "flatTable">
<tr class="titleTr">
    <td class="headingTr1" colspan = "8"><font family = "sans-serif">C A N C E L &nbsp&nbsp&nbsp&nbsp&nbsp B O O K I N G</td></font>
  </tr>
  <tr class="headingTr">
      <th> D_id </th>
      <th> F_Name </th>
      <th> L_Name </th>
      <th> Specialization </th>
      <th>  Email-ID</th>
      <th> Time </th>
      <th>  Date </th>
      <th> Action </th>
    </tr> 
    <?php
   // session_start();
    $userid = $_SESSION['userid'];
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
  //  echo "Connected successfully hi";

    $sql ="SELECT `d_id`, `appointment_date`, `appointment_time`, `disp` FROM `appointment` WHERE u_id={$userid};";  
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {  echo "failed count lol";
  }
//  else  {  echo "pass count ";} 
    

    while($row1 = mysqli_fetch_assoc($result))
    {
      $did=$row1['d_id'];
      $date = $row1['appointment_date'];
      $time=$row1['appointment_time'];
      $sql1 = "SELECT `d_id`, `first_name`, `last_name`, `specialisation`,`email` FROM `verified_doctor` WHERE d_id={$did};";
      $result1 = mysqli_query($conn,$sql1);
      if(!$result1)
    {  echo "failed ";
  }
//  else  {  echo "pass ";} 
  while($row = mysqli_fetch_assoc($result1))
  {
      ?>
  
  <tr>
  <td>
    <?php echo  $row["d_id"];?>
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
  <td><?php echo $row["email"];?>
  </td>
  <td>
    <?php echo  $time;?>
  </td>
  <td>
    <?php echo $date ?>
  </td>
    <td>
    <a href = "cancelprocess.php?did=<?php echo $did; ?>&date=<?php echo $date;?>&time=<?php echo $time;?>"><input type="button" value="CANCEL" class="buttona button2"></a>
    </td>
   </tr>   
 
  <?php 
      
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
