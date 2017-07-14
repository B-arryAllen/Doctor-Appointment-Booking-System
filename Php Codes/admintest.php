<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="booking_type.css" media="screen" />
<link rel="stylesheet" type="text/css" href="table.css" media="screen" />
<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
<script type='text/javascript' src='script.js'></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
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
    echo "Connected successfully hi";   
    //print_r($_POST);
    $sql = "SELECT * FROM verified_doctor where area=";
    $result = mysqli_query($conn,$sql);
    if(!$result)
      echo "failed count ";
    else
      //echo "success count ".$result;
      $numo = $result->num_rows;
    echo $numo;
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
    ?>
<div id="main_container">
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="AdminViewRequests.php">View Requests</a></li>
          <li><a href="AdminViewPatients.php">View Patients</a></li>
          <li><a class="current" href="AdminViewDoctors.php">View Doctors</a></li>
          <li><a href="adminAppointments.php">Appointments</a></li>
          <li><a href="Adminfeedback.php">All Feedbacks</a></li>
          <li><a href="index.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="main_content">
        <div id = "tables" style = "overflow-x:auto;">
        <table  class = "flatTable">
        <tr class = "titleTr">
        <td class = "titleTd"> ALL APPOINTMENTS  </td>
        <td colspan="5"> </td>
        </tr>
        <tr class = "headingTr">
      <th>ada</th>
      <th>vxvd</th>
      <th>ada</th>
      <th>vxvd</th>
      <th>ada</th>
      <th>shj</th>
      </tr>
        <?php
    while($row = mysqli_fetch_assoc($result))
    {?>
  <tr>
  <td>
    <?php echo  $row["first_name"];?>
  </td>
  <td>
    <?php echo  $row["last_name"];?>
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
    <?php echo  $row["specialisation"];?>
  </td>
   </tr>   
 
  <?php
      $last_name =  $row["last_name"];
      $specialisation =  $row["specialisation"];
      $address =  $row["address"];
      $phone =  $row["phone"];
      $email =  $row["email"];
      $password = $row["password"];
      $t_id = $row["d_id"];
     // print_r($row);

    }
    ?>
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
