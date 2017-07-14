<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="searchType.css" media="screen" />
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
    //print_r($_POST);
    $sql = "SELECT distinct area from verified_doctor inner join area_address on verified_doctor.address = area_address.address;";
    $result = mysqli_query($conn,$sql);
    if(!$result)
      echo "failed";
    //else
    //  echo "success"; 
    $sql2 = "SELECT distinct specialisation FROM verified_doctor";
	$result1 = mysqli_query($conn,$sql2);
	if(!$result1)
      echo "failed";
   // else
     // echo "success"; 
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
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a class="current" href="searchType.php">Search Doctor</a></li>
          <li><a href="Userlogin.php">Appointments</a></li>
          <li><a href="Doctorlogin.php">Doctors login</a></li>
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
      <a href="Searchedocs.php?area=<?php echo urlencode(($row["area"]))?>"> <?php echo  $row["area"]; ?> </a>
    <?php } ?>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn2"> <img src= "images/Blue-Pin.png" width="25px" height="42px">  By Specialisation </button>
  <div class="dropdown-content scroll" style= "width:200px;">
    <?php  while($row = mysqli_fetch_assoc($result1)) 
    { ?>
      <a href="Searchedocs.php?spec=<?php echo htmlspecialchars(($row["specialisation"])) ?>"> <?php echo  $row["specialisation"]; ?> </a>
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
