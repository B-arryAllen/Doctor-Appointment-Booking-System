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
<link rel="stylesheet" type="text/css" href="booking_type1.css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
<script type='text/javascript' src='script.js'></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
</head>
<body>
<?php
  //$_SESSION['name']=$_GET['first'];
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
 //   echo "Connected successfully hi";   
    //print_r($_POST);
   // echo $_GET["did"];
    //echo $_GET["uid"];
    $sql = "SELECT distinct area from verified_doctor inner join area_address on verified_doctor.address = area_address.address;";
    $result = mysqli_query($conn,$sql);
    if(!$result)
      echo "failed";
   // else
     // echo "success"; 
	 $sql2 = "SELECT distinct specialisation FROM verified_doctor";
  $result1 = mysqli_query($conn,$sql2);
  if(!$result1)
      echo "failed";
 //   else
   //   echo "success"; 
    $area = "";
    $specialisation="";
    //while($row = mysqli_fetch_assoc($result))
    //{
      //$area =  $row["area"];
      //echo $area;
    //}
    ?>

<div id="main_container">
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
    <div class = "top_menu"><h3 style="text-align: right; position:relative; right: 200px; top: -50px">
  Hi, <?php echo $_SESSION['name']; ?> </h3></div>
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

          <div class="title_icon"><img src="images/doctors.png" width="233" height="233"alt="" /></div> 

          <div class="pattern_content">

		 </div>
      <div class="dropdown">
  <button class="dropbtn"> <img src= "images/Blue-Pin.png" width="25px" height="42px">  By Area </button>
  <div class="dropdown-content scroll" style= "width:150px;">
    <?php  while($row = mysqli_fetch_assoc($result)) 
    { ?>
      <a href="Bookfromhere.php?area=<?php echo $row["area"];?>"> <?php echo  $row["area"]; ?> </a>
    <?php } ?>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn2"> <img src= "images/Blue-Pin.png" width="25px" height="42px">  By Specialisation </button>
  <div class="dropdown-content scroll" style= "width:200px;">
<?php	//$row = mysqli_fetch_assoc($result1) ?>
    <?php  while($row = mysqli_fetch_assoc($result1)) 
    { ?>
      <a href="Bookfromhere.php?spec=<?php echo htmlspecialchars(($row["specialisation"])) ?>"> <?php echo  $row["specialisation"]; ?> </a>
    <?php } ?>
  </div>
</div>

	  <div class="title_icon1"><img src="images/doctor.png" width="283" height="233"alt="" /></div>  
	  <br>
	  <br>
	  <br>
          </div>
    <div class="clear"></div>
    
    <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
  </div>
  
  
</body>
</html>


