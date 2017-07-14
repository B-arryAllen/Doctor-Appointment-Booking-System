<?php 
  session_start();
 if (!isset($_SESSION['userid'])){
  header("Location: Userlogin.php");
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
     $sql="";
    //$sp= $_GET["spec"];
    if(isset($_GET["spec"]))
    {
    $sql="SELECT `d_id`, `first_name`, `last_name`, `address`, `phone`, `email`, `specialisation`, `rating` FROM `verified_doctor` WHERE specialisation='{$_GET["spec"]}';";
    }
    else
    {
     $sql="SELECT * from verified_doctor inner join area_address on verified_doctor.address = area_address.address where area='{$_GET["area"]}'"; 
    }
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
    $rating="";
    ?>
    
<?php


?>
<div id="main_container">
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
         <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="UserDetails.php">My Details</a></li>
          <li><a class="current" href="bookingType.php">Book now</a></li>
          <li><a href="ViewBook.php">View Bookings</a></li>
          <li><a href="CancelBook.php">Cancel Booking</a></li>
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
    <td class="headingTr1" colspan = "10"><font family = "sans-serif">D O C T O R S</td></font>
  </tr>
	<tr class="headingTr">
      <th> Doc_id </th>
			<th> First<br>Name </th>
      <th> Last <br> Name</th>
			<th> Specialisation </th>
			<th> Address </th>
			<th> Phone No. </th>
      <th> Email-ID </th>
	  <th> Rating </th>
      <th width="20px"> Action </th>
       <th width="20px"> Reviews </th>
		</tr>	
		
    <?php
    while($row = mysqli_fetch_assoc($result))
    {?>
  <tr>
  <td width="150px">
    <?php echo  $row["d_id"];
    $rating=$row["rating"];
    $rating=$rating*20;
    ?>
  </td >
  <td width="20px">
    <?php echo  $row["first_name"];?>
  </td>
  <td width="20px">
    <?php echo  $row["last_name"];?>
  </td>
  <td width="20px">
    <?php echo  $row["specialisation"];?>
  </td >
  <td width="20px">
    <?php echo  $row["address"];?>
  </td>
  <td width="20px">
    <?php echo  $row["phone"];?>
  </td>
  <td width="20px">
    <?php echo  $row["email"];?>
  </td>
  <td width="20px"> <div class="star-ratings-sprite"><span style="width:<?php echo $rating; ?>%" class="star-ratings-sprite-rating"></span></div> </td>
    <td width="150px">
    <a href = "appointment.php?did=<?php echo $row["d_id"]; ?>"><input type="button" value="BOOK NOW" class="buttona button2"></a>
    </td>
    <td width="20px">
    <a href = "viewfeedback.php?did=<?php echo $row["d_id"]; ?>"><input type="button" value="REVIEWS" class="buttona button2"></a>
    </td>
   </tr>  
   
 
  <?php
      $last_name =  $row["last_name"];
      $specialisation =  $row["specialisation"];
      $address =  $row["address"];
      $phone =  $row["phone"];
      $email =  $row["email"];
      //$password = $row["password"];
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
