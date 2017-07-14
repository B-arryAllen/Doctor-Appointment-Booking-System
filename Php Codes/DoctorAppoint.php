<?php 
  session_start();
  // $_SESSION['did'] = $_GET['did'];
 if (!isset($_SESSION['docid'])){
  header("Location: Doctorlogin.php");
//  echo $_SESSION['did'];
} 
?>
<html>
<head>
<!-- <link rel="stylesheet" type="text/css" href="Appointment.css"> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="DoctorAppoint.css" media="screen" />
<!-- <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/> -->
<!-- 
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
  --><meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="css/style.css">
<title> Book The DOC </title>

</head>
	
	
<body>
<?php
//session_start();
date_default_timezone_set("Asia/Kolkata");
$date=new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d');
$dayy1 = strtotime("today");
$dayy2=strtotime("tomorrow");
//$dayy2 = $dayy2->format('Y-m-d');
//echo date("Y-m-d h:i:sa", $dayy2) . "<br>";
$dayy3=strtotime("+2 days");
//echo date("Y-m-d h:i:sa", $d) . "<br>";

//$result = $result+2;
//echo $result;
//echo "<br>";
$krr = explode('-',$result);
//echo "<br>";
$result = implode("",$krr);
$day1 = $result;
$day2 = $result+1;
$day3 = $result+2;
//echo $day1.$day2.$day3;
//echo $result;

$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "project_doc";
		//echo "hi";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$dbname);
		$d=$_SESSION['docid'];
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
	//	echo "Connected successfully hi";   
		//$d = $_GET["did"];
         $sql1 = "SELECT * FROM `{$day1}` WHERE d_id={$d};";
    //     echo $sql1;
    $result = mysqli_query($conn,$sql1);
 //   if(!$result)
   //   echo "failed";
 //   else
   //   echo "success"; 
  	 $row = mysqli_fetch_assoc($result);
    
  //    print_r($row);
    
    $result2="";
    $result3="";




    $sql2 = "SELECT * FROM `{$day2}` WHERE d_id={$d};";
  //       echo $sql2;
    $result2 = mysqli_query($conn,$sql2);
    /*  if(!$result2)
      echo "failed";
    else
      echo "success"; */
  	$row2 = mysqli_fetch_assoc($result2);
    
 //     print_r($row2);
    



    $sql3 = "SELECT * FROM `{$day3}` WHERE d_id={$d};";
    //     echo $sql3;
    $result3 = mysqli_query($conn,$sql3);
    /*  if(!$result3)
      echo "failed";
    else
      echo "success"; */
  	 $row3 = mysqli_fetch_assoc($result3);
    
 //     print_r($row3);
    
    	//print_r($row3);
		?>
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
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a class="current" href="DoctorAppoint.php">Appointments</a></li>
          <li><a href="DoctorHome.php">View Pateints</a></li>
        
          <li><a href="DoctorDetails.php">My Details </a></li>
          <li><a href="Doclogoutprocess.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>
  
  <div id="main_content">
          <div class="pattern_content"> </div>
		  </div>
  
  
	<div id="heading"> <div class="ba">APPOINTMENTS </div></div>
	<div id="box1"> <div id="avl"> Not Booked</div> 
	<div id= "avlcb"> ajb</div>
	<div id = "notavl"> Booked </div> 
	<div id= "notavlcb"> ajb</div>
	
	<ul class="tabs">
  <li>
    <input type="radio" name="tabs" id="tab1" checked />
    <label for="tab1"><?php echo date("d-m-Y", $dayy1) ;?></label>
    <div id="tab-content1" class="tab-content">
	
	<div id="mornig"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp  MORNING </div></div>
	<?php 
			if(!$row["one"])
			{
	?>
	<input type="button" id = "d2" value="9:00-9:30" class="buttona button2 a1" >
	<?php  
			}
			else
			{
	?>
	<input type="button" id = "d2" value="9:00-9:30" class="buttona1  a1" >
	<?php
			}
	 ?>


	<!--<input type="button" id = "d1" class="buttona button2 a1" onclick="mainfunc('a1','myBtn1')" value="9:00-9:30">-->
	
	<?php 
			if(!$row["two"])
			{
	?>
	<input type="button" id = "d2" value="9:30-10:00" class="buttona button2 a2" >
	<?php  
			}
			else
			{
	?>
	<input type="button" id = "d2" value="9:30-10:00" class="buttona1 a2" >
	<?php
			}
	 ?>

	 <?php 
			if(!$row["three"])
			{
	?>
	<input type="button" value="10:00-10:30" class="buttona button2 a3" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="10:00-10:30" class="buttona1 a3">
	<?php
			}
	 ?>
	<!--<input type="button" id = "d3" value="10:00-10:30" class="buttona button2 a3" onclick="mainfunc('a3')">-->
	 <?php 
			if(!$row["four"])
			{
	?>
	<input type="button" value="10:30-11:00" class="buttona button2 a4" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="10:30-11:00" class="buttona1 a4">
	<?php
			}
	 ?>

	<!--<input type="button" value="10:30-11:00" class="buttona button2 a4" onclick="mainfunc('a4')">-->
	 <?php 
			if(!$row["five"])
			{
	?>
	<input type="button" value="11:00-11:30" class="buttona button2 a5" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="11:00-11:30" class="buttona1  a5" >
	<?php
			}
	 ?>
	  <?php 
			if(!$row["six"])
			{
	?>
	<input type="button" value="11:30-12:00" class="buttona button2 a6" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="11:30-12:00" class="buttona1 a6" >
	<?php
			}
	 ?>
	 <div id="aftnoon"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp AFTERNOON </div></div>
	<br><br>
	 <?php 
			if(!$row["seven"])
			{
	?>
	<input type="button" value="13:00-13:30" class="buttonb button2 a7" >
	<?php  
			}
			else
			{
	?>
	<br>
	<input type="button" value="13:00-13:30" class="buttonb1 a7" >
	<?php
			}
	 ?>
	 <?php 
			if(!$row["eight"])
			{
	?>
	<input type="button" value="13:30-14:00" class="buttonb button2 a8" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="13:30-14:00" class="buttonb1  a8" >
	<?php
			}
	 ?>
	 <?php 
			if(!$row["nine"])
			{
	?>
	<input type="button" value="14:00-14:30" class="buttonb button2 a9" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="14:00-14:30" class="buttonb1  a9" >
	<?php
			}
	 ?>
	 <?php 
			if(!$row["ten"])
			{
	?>
	<input type="button" value="14:30-15:00" class="buttonb button2 a10" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="14:30-15:00" class="buttonb1  a10" >
	<?php
			}
	 ?>
	 <?php 
			if(!$row["eleven"])
			{
	?>
	<input type="button" value="15:00-15:30" class="buttonb button2 a11" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="15:00-15:30" class="buttonb1  a11" >
	<?php
			}
	 ?><?php 
			if(!$row["twelve"])
			{
	?>
	<input type="button" value="15:30-16:00" class="buttonb button2 a12" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="15:30-16:00" class="buttonb1 a12" >
	<?php
			}
	 ?>
	 <div id="evening"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp EVENING </div></div>
	<br><br>
	 <?php 
			if(!$row["thirteen"])
			{
	?>
	<input type="button" value="17:00-17:30" class="buttonc button2 a13" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="17:00-17:30" class="buttonc1 a13" >
	<?php
			}
	 ?><?php 
			if(!$row["fourteen"])
			{
	?>
	<input type="button" value="17:30-18:00"class="buttonc button2 a14" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="17:30-18:00" class="buttonc1 a14" >
	<?php
			}
	 ?><?php 
			if(!$row["fifteen"])
			{
	?>
	<input type="button" value="18:00-18:30" class="buttonc button2 a15" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="18:00-18:30" class="buttonc1  a15">
	<?php
			}
	 ?><?php 
			if(!$row["sixteen"])
			{
	?>
	<input type="button" value="18:30-19:00" class="buttonc button2 a16" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="18:30-19:00" class="buttonc1 a16" >
	<?php
			}
	 ?><?php 
			if(!$row["seventeen"])
			{
	?>
	<input type="button" value="19:00-19:30" class="buttonc button2 a17" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="19:00-19:30" class="buttonc1 a17" >
	<?php
			}
	 ?><?php 
			if(!$row["eighteen"])
			{
	?>
	<input type="button" value="19:30-20:00" class="buttonc button2 a18" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="19:30-20:00" class="buttonc1 a18" >
	<?php
			}
	 ?>
	<!--<input type="button" value="11:00-11:30" class="buttona button2 a5" onclick="mainfunc('a5')">
	<input type="button" value="11:30-12:00" class="buttona button2 a6" onclick="mainfunc('a6')">
	<div id="aftnoon"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp AFTERNOON </div></div>
	<br><br>
	<input type="button" class="buttonb button2 a7" onclick="mainfunc('a7')" value="13:00-13:30">
	<input type="button"  class="buttonb button2 a8" onclick="mainfunc('a8')" value="13:30-14:00">
	<input type="button"  class="buttonb button2 a9" onclick="mainfunc('a9')" value="14:00-14:30">
	<input type="button"  class="buttonb button2 a10" onclick="mainfunc('a10')" value="14:30-15:00">
	<input type="button"  class="buttonb button2 a11" onclick="mainfunc('a11')" value="15:00-15:30">
	<input type="button" class="buttonb button2 a12" onclick="mainfunc('a12')" value="15:30-16:00" >
	<div id="evening"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp EVENING </div></div>
	<br><br>
	<input type="button" value="17:00-17:30" class="buttonc button2 a13" onclick="mainfunc('a13')">
	<input type="button" value="17:30-18:00" class="buttonc button2 a14" onclick="mainfunc('a14')">
	<input type="button" value="18:00-18:30" class="buttonc button2 a15" onclick="mainfunc('a15')">
	<input type="button" value="18:30-19:00" class="buttonc button2 a16" onclick="mainfunc('a16')">
	<input type="button" value="19:00-19:30" class="buttonc button2 a17" onclick="mainfunc('a17')">
	<input type="button" value="19:30-20:00" class="buttonc button2 a18" onclick="mainfunc('a18')" >-->
	</div>
  </li>

  <li>
    <input type="radio" name="tabs" id="tab2" />
    <label for="tab2"><?php echo date("d-m-Y", $dayy2) ;?></label>
    <div id="tab-content2" class="tab-content">
	<div id="mornig"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp  MORNING </div></div>
	<?php 
			if(!$row2["one"])
			{
	?>
	<input type="button" id = "d2" value="9:00-9:30" class="buttona button2 b1" >
	<?php  
			}
			else
			{
	?>
	<input type="button" id = "d2" value="9:00-9:30" class="buttona1 b1" >
	<?php
			}
	 ?>


	<?php 
			if(!$row2["two"])
			{
	?>
	<input type="button" id = "d2" value="9:30-10:00" class="buttona button2 b2" >
	<?php  
			}
			else
			{
	?>
	<input type="button" id = "d2" value="9:30-10:00" class="buttona1 b2" >
	<?php
			}
	 ?>

<?php 
			if(!$row2["three"])
			{
	?>
	<input type="button" value="10:00-10:30" class="buttona button2 b3" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="10:00-10:30" class="buttona1 b3" >
	<?php
			}
			?>

<?php 
			if(!$row2["four"])
			{
	?>
	<input type="button" value="10:30-11:00" class="buttona button2 b4">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="10:30-11:00" class="buttona1 b4" >
	<?php
			}
	 ?>

<?php 
			if(!$row2["five"])
			{
	?>
	<input type="button" value="11:00-11:30" class="buttona button2 b5">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="11:00-11:30" class="buttona1 b5" >
	<?php
			}
	 ?>

	  <?php 
			if(!$row2["six"])
			{
	?>
	<input type="button" value="11:30-12:00" class="buttona button2 b6">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="11:30-12:00" class="buttona1 b6" >
	<?php
			}
	 ?>

	 <?php 
			if(!$row2["seven"])
			{
	?>
	<br><br>
	<input type="button" value="13:00-13:30" class="buttonb button2 b7" >
	<?php  
			}
			else
			{
	?>
	<br><br>
	<input type="button" value="13:00-13:30" class="buttonb1 b7" >
	<?php
	}?>

	<?php 
			if(!$row2["eight"])
			{
	?>
	<input type="button" value="13:30-14:00" class="buttonb button2 b8" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="13:30-14:00" class="buttonb1 b8">
	<?php
			}
	 ?>


 <?php 
			if(!$row2["nine"])
			{
	?>
	<input type="button" value="14:00-14:30" class="buttonb button2 b9">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="14:00-14:30" class="buttonb1  b9" >
	<?php
  }
?>

<?php 
			if(!$row2["ten"])
			{
	?>
	<input type="button" value="14:30-15:00" class="buttonb button2 b10" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="14:30-15:00" class="buttonb1 b10">
	<?php
			}
	 ?>
	 <?php 
			if(!$row2["eleven"])
			{
	?>
	<input type="button" value="15:00-15:30" class="buttonb button2 b11">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="15:00-15:30" class="buttonb1 b11">
	<?php
			}
	 ?><?php 
			if(!$row2["twelve"])
			{
	?>
	<input type="button" value="15:30-16:00" class="buttonb button2 b12">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="15:30-16:00" class="buttonb1 b12" >
	<?php
			}
	 ?><?php 
			if(!$row2["thirteen"])
			{
	?>
	<br><br>
	<input type="button" value="17:00-17:30" class="buttonc button2 b13">
	<?php  
			}
			else
			{
	?>
	<br><br>
	<input type="button" value="17:00-17:30" class="buttonc1 b13">
	<?php
			}
	 ?><?php 
			if(!$row2["fourteen"])
			{
	?>
	<input type="button" value="17:30-18:00"class="buttonc button2 b14">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="17:30-18:00" class="buttonc1 b14">
	<?php
			}
	 ?><?php 
			if(!$row2["fifteen"])
			{
	?>
	<input type="button" value="18:00-18:30" class="buttonc button2 b15">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="18:00-18:30" class="buttonc1 b15" >
	<?php
			}
	 ?><?php 
			if(!$row2["sixteen"])
			{
	?>
	<input type="button" value="18:30-19:00" class="buttonc button2 b16">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="18:30-19:00" class="buttonc1 b16" >
	<?php
			}
	 ?><?php 
			if(!$row2["seventeen"])
			{
	?>
	<input type="button" value="19:00-19:30" class="buttonc button2 b17" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="19:00-19:30" class="buttonc1 b17" >
	<?php
			}
	 ?><?php 
			if(!$row2["eighteen"])
			{
	?>
	<input type="button" value="19:30-20:00" class="buttonc button2 b18">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="19:30-20:00" class="buttonc1 b18" >
	<?php
			}
	 ?>
	<!--<input type="button" class="buttona button2 b1" onclick="mainfunc('b1')" value="9:00-9:30">
	<input type="button" class="buttona button2 b2" onclick="mainfunc('b2')" value="9:30-10:00" >
	<input type="button" class="buttona button2 b3" onclick="mainfunc('b3')" value="10:00-10:30">
	<input type="button" class="buttona button2 b4" onclick="mainfunc('b4')" value="10:30-11:00">
	<input type="button" class="buttona button2 b5" onclick="mainfunc('b5')" value="11:00-11:30">
	<input type="button" class="buttona button2 b6" onclick="mainfunc('b6')"  value="11:30-12:00">
	-->
	<div id="aftnoon"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp AFTERNOON </div></div>
	<br>
	<!--<input type="button" value="13:00-13:30" class="buttonb button2 b7" onclick="mainfunc('b7')">
	<input type="button" value="13:30-14:00" class="buttonb button2 b8" onclick="mainfunc('b8')">
	<input type="button" value="14:00-14:30" class="buttonb button2 b9" onclick="mainfunc('b9')">
	<input type="button" value="14:30-15:00" class="buttonb button2 b10" onclick="mainfunc('b10')">
	<input type="button" value="15:00-15:30" class="buttonb button2 b11" onclick="mainfunc('b11')">
	<input type="button" value="15:30-16:00" class="buttonb button2 b12" onclick="mainfunc('b12')">-->
	<div id="evening"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp EVENING </div></div>
	<br><br> 
	<!--
	<input type="button" value="17:00-17:30" class="buttonc button2 b13" onclick="mainfunc('b13')">
	<input type="button" value="17:30-18:00" class="buttonc button2 b14" onclick="mainfunc('b14')">
	<input type="button" value="18:00-18:30" class="buttonc button2 b15" onclick="mainfunc('b15')">s
	<input type="button" value="18:30-19:00" class="buttonc button2 b16" onclick="mainfunc('b16')">
	<input type="button" value="19:00-19:30" class="buttonc button2 b17" onclick="mainfunc('b17')">
	<input type="button" value="19:30-20:00" class="buttonc button2 b18" onclick="mainfunc('b18')">
	<br><br><br><br>
      -->
    </div>
  </li>
   <li>
    <input type="radio" name="tabs" id="tab3" />
    <label for="tab3"><?php echo date("d-m-Y", $dayy3) ;?></label>
    <div id="tab-content3" class="tab-content">
	<div id="mornig"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp  MORNING </div></div>

	<?php 
			if(!$row3["one"])
			{
	?>
	<input type="button" id = "d2" value="9:00-9:30" class="buttona button2 c1" >
	<?php  
			}
			else
			{
	?>
	<input type="button" id = "d2" value="9:00-9:30" class="buttona1 c1">
	<?php
			}
	 ?>


	<!--<input type="button" id = "d1" class="buttona button2 a1" onclick="mainfunc('a1','myBtn1')" value="9:00-9:30">-->
	
	<?php 
			if(!$row3["two"])
			{
	?>
	<input type="button" id = "d2" value="9:30-10:00" class="buttona button2 c2" >
	<?php  
			}
			else
			{
	?>
	<input type="button" id = "d2" value="9:30-10:00" class="buttona1 c2">
	<?php
			}
	 ?>

	 <?php 
			if(!$row3["three"])
			{
	?>
	<input type="button" value="10:00-10:30" class="buttona button2 c3">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="10:00-10:30" class="buttona1 c3" >
	<?php
			}
	 ?>
	<!--<input type="button" id = "d3" value="10:00-10:30" class="buttona button2 a3" onclick="mainfunc('a3')">-->
	 <?php 
			if(!$row3["four"])
			{
	?>
	<input type="button" value="10:30-11:00" class="buttona button2 c4">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="10:30-11:00" class="buttona1 c4" >
	<?php
			}
	 ?>

	<!--<input type="button" value="10:30-11:00" class="buttona button2 a4" onclick="mainfunc('a4')">-->
	 <?php 
			if(!$row3["five"])
			{
	?>
	<input type="button" value="11:00-11:30" class="buttona button2 c5">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="11:00-11:30" class="buttona1 c5">
	<?php
			}
	 ?>
	  <?php 
			if(!$row3["six"])
			{
	?>
	<input type="button" value="11:30-12:00" class="buttona button2 c6">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="11:30-12:00" class="buttona1 c6">
	<?php
			}
	 ?>
	 <?php 
			if(!$row3["seven"])
			{
	?>
	<br><br>
	<input type="button" value="13:00-13:30" class="buttonb button2 c7">
	<?php  
			}
			else
			{
	?>
	<br><br>
	<input type="button" value="13:00-13:30" class="buttonb1 c7">
	<?php
			}
	 ?>
	 <?php 
			if(!$row3["eight"])
			{
	?>
	<input type="button" value="13:30-14:00" class="buttonb button2 c8">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="13:30-14:00" class="buttonb1 c8">
	<?php
			}
	 ?>
	 <?php 
			if(!$row3["nine"])
			{
	?>
	<input type="button" value="14:00-14:30" class="buttonb button2 c9" >
	<?php  
			}
			else
			{
	?>
	<input type="button" value="14:00-14:30" class="buttonb1 c9" >
	<?php
			}
	 ?>
	 <?php 
			if(!$row3["ten"])
			{
	?>
	<input type="button" value="14:30-15:00" class="buttonb button2 c10">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="14:30-15:00" class="buttonb1 c10" >
	<?php
			}
	 ?>
	 <?php 
			if(!$row3["eleven"])
			{
	?>
	<input type="button" value="15:00-15:30" class="buttonb button2 c11">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="15:00-15:30" class="buttonb1 c11">
	<?php
			}
	 ?><?php 
			if(!$row3["twelve"])
			{
	?>
	<input type="button" value="15:30-16:00" class="buttonb button2 c12">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="15:30-16:00" class="buttonb1 c12" >
	<?php
			}
	 ?><?php 
			if(!$row3["thirteen"])
			{
	?>
	<br><br>
	<input type="button" value="17:00-17:30" class="buttonc button2 c13">
	<?php  
			}
			else
			{
	?>
	<br><br>
	<input type="button" value="17:00-17:30" class="buttonc1 c13">
	<?php
			}
	 ?><?php 
			if(!$row3["fourteen"])
			{
	?>
	<input type="button" value="17:30-18:00"class="buttonc button2 c14">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="17:30-18:00" class="buttonc1 c14">
	<?php
			}
	 ?><?php 
			if(!$row3["fifteen"])
			{
	?>
	<input type="button" value="18:00-18:30" class="buttonc button2 c15">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="18:00-18:30" class="buttonc1 c15" >
	<?php
			}
	 ?><?php 
			if(!$row3["sixteen"])
			{
	?>
	<input type="button" value="18:30-19:00" class="buttonc button2 c16">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="18:30-19:00" class="buttonc1 c16" >
	<?php
			}
	 ?><?php 
			if(!$row3["seventeen"])
			{
	?>
	<input type="button" value="19:00-19:30" class="buttonc button2 c17">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="19:00-19:30" class="buttonc1 c17">
	<?php
			}
	 ?><?php 
			if(!$row3["eighteen"])
			{
	?>
	<input type="button" value="19:30-20:00" class="buttonc button2 c18">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="19:30-20:00" class="buttonc1 c18">
	<?php
			}
	 ?>
	<!--<input type="button" value="9:00-9:30" class="buttona button2 c1" onclick="mainfunc('c1')">
	<input type="button" value="9:30-10:00" class="buttona button2 c2" onclick="mainfunc('c2')">
	<input type="button" value="10:00-10:30" class="buttona button2 c3" onclick="mainfunc('c3')">
	<input type="button" value="10:30-11:00" class="buttona button2 c4" onclick="mainfunc('c4')">
	<input type="button" value="11:00-11:30" class="buttona button2 c5" onclick="mainfunc('c5')">
	<input type="button" value="11:30-12:00" class="buttona button2 c6" onclick="mainfunc('c6')">
	-->
	<div id="aftnoon"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp AFTERNOON </div></div>
	
	<!--
	<input type="button" value="13:00-13:30" class="buttonb button2 c7" onclick="mainfunc('c7')">
	<input type="button" value="13:30-14:00" class="buttonb button2 c8" onclick="mainfunc('c8')">
	<input type="button" value="14:00-14:30" class="buttonb button2 c9" onclick="mainfunc('c9')">
	<input type="button" value="14:30-15:00" class="buttonb button2 c10" onclick="mainfunc('c10')">
	<input type="button" value="15:00-15:30" class="buttonb button2 c11" onclick="mainfunc('c11')">
	<input type="button" value="15:30-16:00" class="buttonb button2 c12" onclick="mainfunc('c12')">-->
	<div id="evening"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp EVENING </div></div>
	<br><br> 
<!--
	<input type="button" value="17:00-17:30" class="buttonc button2 c13" onclick="mainfunc('c13')">
	<input type="button" value="17:30-18:00" class="buttonc button2 c14" onclick="mainfunc('c14')">
	<input type="button" value="18:00-18:30" class="buttonc button2 c15" onclick="mainfunc('c15')">
	<input type="button" value="18:30-19:00" class="buttonc button2 c16" onclick="mainfunc('c16')">
	<input type="button" value="19:00-19:30" class="buttonc button2 c17" onclick="mainfunc('c17')">
	<input type="button" value="19:30-20:00" class="buttonc button2 c18" onclick="mainfunc('c18')">
	-->
	<br><br><br><br>
      
    </div>
  </li>
</ul>
	
	<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      
    </div>
    <div class="modal-body">
		<h2>BOOKING CONFIRMATION</h2>
		<br><br><br>
      <h1>ARE YOU SURE TO CONFIRM THE BOOKING.... <span id="time"></span> <input id="docslot" type="hidden"> </input></h1>
	 <input type="button" class="button21 buttonm" value="YES" onclick="func2()"> <input type="button"  class="button21 buttonm1" value="NO"> 
    </div>
  </div>

</div>


	</div>
<!--	<div id="heading2"> <div class="docdetail">DOCTOR DETAILS </div></div>
	<div id="box2"> 
			<div id="docimg">
			<img src="images\5b6e3bee9e55416895e5c373b127ddf5.jpg"  style="width:150px;height:130px;" >  			
			
			</div>
			<div id="details">
			<p>Dr. Rajendar Chabbra </p>
			<p>M.B.B.S, M.D, B.TECH</p>
			<p>General Physician </p>
			<p> 3/D, New Green Apartments <br> Tilak Nagar, New Delhi </p>
			<p> <div id="phoneimg"> <img src="images\phone.png"  style="width:15px;height:15px;" >
			 9543123987
			</div></p>
			</div>
			
	</div> -->
	
	
	 <div class="clear"></div>
    <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
<!--  <script>  
  
  function myFunction2(){
	var x = document.getElementsByClassName("button2");
	
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.backgroundColor = "#4CAF50";
    }
  }
  
  function myFunction(clssname) {
    var x = document.getElementsByClassName(clssname);
	
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.backgroundColor = "#f4511e";
    }
  }
  
  function mainfunc(clssname,time ,docslot,idnamw) {
	myFunction2();
	myFunction(clssname);
	func(time, idnamw,docslot);
	myFunction3(clssname);
	}
</script>	
<script>
// Get the modal

</script> 

<script type='text/javascript' src='script.js'></script> -->
	
</body>

</html>