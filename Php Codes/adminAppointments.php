<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type = "text/css" href= "table.css">

<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
<script type='text/javascript' src='script.js'></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
 <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
</head>
<body>
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
    //echo "Connected successfully hi";   
    //print_r($_POST);

    $did ="";
    $uid = "";
    $date = "";
    $time = "";
$sql = "SELECT * FROM appointment ;";
    $result = mysqli_query($conn,$sql);
    
    


    ?>


<div id="main_container">
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="Admin.php">View Requests</a></li>
          <li><a href="AdminViewPatients.php">View Patients</a></li>
          <li><a href="AdminViewDoctors.php">View Doctors</a></li>
          <li><a class="current" href="adminAppointments.php">Appointments</a></li>
          <li><a href="Adminfeedback.php">All Feedbacks</a></li>
          <li><a href="adminprocesslogout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="main_content">
          
	  <div id="tables" style="overflow-x:auto;">
	<table class="flatTable">
	<tr class="titleTr">
    <td class="titleTd">ALL APPOINTMNETS</td>
    <td colspan="4"></td>
  </tr>
		<tr class="headingTr">
			<th width="10px"> U_id </th>
			<th width="15px"> D_id </th>
			<th> Appointment Date </th>
			<th> Appointment Time </th>
		</tr>
 <?php   while($row = mysqli_fetch_assoc($result))
    {
      $did = $row['d_id'];
      $date = $row['appointment_date'];
      $time = $row['appointment_time'];
      $uid = $row['u_id'];
    //  print_r($row);
     ?>
    <tr>
      <td width="75px"><?php echo $uid ?> </td>
		  <td width="75px"> <?php echo $did ?></td>
      <td width="150px"> <?php echo $date ?></td>
      <td width="150px"> <?php echo $time ?></td>
    </tr>
    <?php } ?>
	</table>
	</div>
	<div class="title_icon1"><img src="images/doctor.png" width="283" height="233"alt="" /></div> 
          </div>
    <div class="clear"></div>
    <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
  </div>
</body>
</html>
