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
<link rel="stylesheet" type="text/css" href="confirmpage.css" media="screen" />
<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
<script type='text/javascript' src='script.js'></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
</head>
<body>

<?php 
   // session_start();
     $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_doc";
    //echo "hi";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    $first_name = "";
    $last_name ="";
    $specialisation ="";
    $address = "";
    $email = "";
    $phone = "";
    $sex = "";
    $age = "";
    $fees = "";

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully hi";   
    //print_r($_POST);
    $sql ="SELECT `d_id`, `first_name`, `last_name`, `address`, `phone`, `email`, `specialisation`, `password` ,`age`,`sex`, `fees` FROM `verified_doctor` WHERE d_id={$_SESSION['did']} ;";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    { // echo "failed count ";
}
else {// echo "happy";}
}

    $row = mysqli_fetch_assoc($result);
    
      $first_name =  $row['first_name'];
      $last_name =  $row["last_name"];
      $specialisation =  $row["specialisation"];
      $address =  $row["address"];
      $phone =  $row["phone"];
      $email =  $row["email"];
      $sex = $row["sex"];
    $age = $row["age"];
    $fees = $row["fees"];
  $date = $_SESSION['date'];
   $time = $_SESSION['time'];
   //echo $date."   ".$time."    ";
     // print_r($row);
    

?>


<div id="main_container">
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="UserDetails.php">My Details</a></li>
          <li><a href="ViewBook.php">View Bookings</a></li>
          <li><a href="UserFeedback.php">Feedback</a></li>
          <li><a href="userprocesslogout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  
 <!-- <div id="details">
			<p>Dr. Rajendar Chabbra </p>
			<p>M.B.B.S, M.D, B.TECH</p>
			<p>General Physician </p>
			<p> 3/D, New Green Apartments <br> Tilak Nagar, New Delhi </p>
			<p> <div id="phoneimg"> <img src="images\phone.png"  style="width:15px;height:15px;" >
			 9543123987
			</div></p>
			</div>
			width="283" height="233"
			-->
			
			
			
  <div id="main_content">
		<img src="images/greentick2.png" class = "grtick" width="100px" height = "100px"> </img>
		<h1> THANK YOU FOR YOUR BOOKING </h1>
   <!--        <div class="title_icon"><img src="images/doctors.png" width="233" height="233"alt="" /></div>  -->
   <br>
  <br>
  <h2> Your Appointment Has Been Successfully Booked</h2>
  <div id="box">

  <img src="images/Doctor-Icon-no-background.png" width="130px" height = "180px"> </img>
		    <div id="details"> <p style="font-size: 22px; color: #008cbe; ">Dr. <?php echo  $row['first_name'];?> <?php echo  $row['last_name'];?>  </p> <br><b><p style="font-size: 17px; texr-align: center;">  <?php echo  $row['specialisation'];?> </p></b>
			<br> <p style="font-size: 16px; text-align: left;"> <img src="images\manmarker.png"  style="width:15px;height:15px;" > &nbsp <?php echo  $row['address'];?> </p>
		<!--	<div id="phoneimg"> <img src="images\phone.png"  style="width:15px;height:15px;" > -->
				<p style="font-size: 13px; text-align: left;"> <img src="images\phone.png"  style="width:15px;height:15px;" >  &nbsp <?php echo  $row['phone'];?> </p>
				<p style="font-size: 13px; text-align: left;"> <img src="images\email.png"  style="width:15px;height:15px;" >  &nbsp <?php echo  $row['email'];?> </p>
			</div>
          </div>
		  <div class="title_icon1"><img src="images/C--fakepath-confirm.png" alt="" /></div> 
		  <div id="appointime"> <p style="font-size: 30px; text-align: left; color: #008cbe">Appointment Time:</p><br><b> <p style="font-size: 19px; text-align: left; ">   <?php echo $_SESSION['date'] ?>, <?php echo $time = $_SESSION['time'] ?>  </p> </b></div>
		  
	</div>
    <div class="clear"></div>
    <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
  </div>
</body>
</html>
