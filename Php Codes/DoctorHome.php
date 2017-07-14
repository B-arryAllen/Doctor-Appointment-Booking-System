<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="DoctorHome.css" media="screen" />
<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
<script type='text/javascript' src='script.js'></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
</head>
<body>
<div id="main_container">
  <!--<div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="64" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a class="current" href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Appointments</a></li>
          <li><a href="#">Doctors login</a></li>
        </ul>
      </div>
    </div> 
  </div>
  <div id="middle_box">
    <div class="middle_box_content"><img src="box_bg.gif" alt="" width="30" height="20"/></div>
  </div>-->
<!-- <?php
   $userid = $_GET['userid'];
   $password = $_GET['password'];
   $str = "userid={$userid}&password={$password}";

?> -->
  <div class="header">

    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="DoctorAppoint.php">Appointments</a></li>
          <li><a class="current" href="DoctorHome.php">View Pateints</a></li>
          <li><a href="DoctorDetails.php">My Details </a></li>
          <li><a href="Doclogoutprocess.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="main_content">
  
  


          <div class="title_icon"><img src="images/doctors.png" width="233" height="233"alt="" /></div> 
		  <div id = "tables" style="overflow-x:auto;">
		  <table class= "flatTable">
<tr class="titleTr">
    <td class="headingTr1" colspan = "8"><font family = "sans-serif">P A T I E N T  &nbsp&nbsp&nbsp&nbsp&nbsp D E T A I L S</td></font>
  </tr>
	<tr class="headingTr">
      <th> User_id </th>
			<th> First<br>Name </th>
      <th> Last <br> Name</th>
			<th> Phone No. </th>
      <th> Appointment Date </th>
	  <!-- <th> Appointment Time </th> -->
		</tr>	
		
    
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
    //echo "Connected successfully hi";   
    //print_r($_POST);
    $did = $_SESSION['docid'];
  
    $sql = "SELECT * FROM `appointment` where d_id = '{$did}';";
    $result = mysqli_query($conn,$sql);
    $numo = $result->num_rows;


    while($row1 = mysqli_fetch_assoc($result))
    {
        $sql1="select * FROM patient WHERE u_id={$row1["u_id"]};";
        $result1 = mysqli_query($conn,$sql1);
    $numo = $result->num_rows;


    while($row = mysqli_fetch_assoc($result1))
    {
      ?>
    
  <tr>
  <td width="150px">
    <?php echo  $row["u_id"];?>
  </td >
  <td width="150px">
    <?php echo  $row["first_name"];?>
  </td>
  <td width="150px">
    <?php echo  $row["last_name"];?>
  </td>
  <td width="150px">
    <?php echo  $row["phone"];?>
  </td >
  <td width="150px">
    <?php echo  $row1["appointment_date"];?>
  </td>
  
   </tr>   
 
  <?php
      /*$last_name =  $row["last_name"];
      $specialisation =  $row["specialisation"];
      $address =  $row["address"];
      $phone =  $row["phone"];
      $email =  $row["email"];
      //$password = $row["password"];
      $t_id = $row["d_id"];*/
     // print_r($row);
    }
    }
    ?>

	
 </table>
          
  </div>        
  
  </div>
   <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
</div>  
  
  
</body>
</html>
