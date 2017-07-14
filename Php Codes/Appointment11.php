<html>
<head>
<link rel="stylesheet" type="text/css" href="Appointment.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="book_user.css" media="screen" /><!-- 
<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/> -->
<!-- 
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
  --><meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="css/style.css">
<title> Book The DOC </title>

</head>
	
	
<body>
<?php
date_default_timezone_set("Asia/Kolkata");
$date=new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d');
//$result = $result+2;
echo $result;
echo "<br>";
$krr = explode('-',$result);
echo "<br>";
$result = implode("",$krr);
$day1 = $result;
$day2 = $result+1;
$day3 = $result+2;
echo $day1.$day2.$day3;
//echo $result;

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
		$d = $_GET["did"];
         $sql1 = "SELECT * FROM `{$day1}` WHERE d_id={$d};";
         echo $sql1;
    $result = mysqli_query($conn,$sql1);
    if(!$result)
      echo "failed";
    else
      echo "success"; 
  	 $row = mysqli_fetch_assoc($result);
    
      print_r($row);
    
    $result2="";
    $result3="";




    $sql2 = "SELECT * FROM `{$day2}` WHERE d_id={$d};";
         echo $sql2;
    $result2 = mysqli_query($conn,$sql2);
    if(!$result2)
      echo "failed";
    else
      echo "success"; 
  	$row2 = mysqli_fetch_assoc($result2);
    
      print_r($row2);
    



    $sql3 = "SELECT * FROM `{$day3}` WHERE d_id={$d};";
         echo $sql3;
    $result3 = mysqli_query($conn,$sql3);
    if(!$result3)
      echo "failed";
    else
      echo "success"; 
  	 $row3 = mysqli_fetch_assoc($result3);
    
      print_r($row3);
    $tr="";
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
          <li><a href="index.html">Home</a></li>
          <li><a href="#">My Details</a></li>
          <li><a class="current" href="#">Book now</a></li>
          <li><a href="#">View Bookings</a></li>
          <li><a href="#">Cancel Booking</a></li>
          <li><a href="#">Search Doctor</a></li>
          <li><a href="#">Feedback</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>
  
  <div id="main_content">
          <div class="pattern_content"> </div>
		  </div>
  
  
	<div id="heading"> <div class="ba"> BOOK APPOINTMENT </div></div>
	<div id="box1"> <div id="avl"> Available</div> 
	<div id= "avlcb"> ajb</div>
	<div id = "notavl"> Not Available </div> 
	<div id= "notavlcb"> ajb</div>
	<div id = "slctd"> Selected </div> 
	<div id= "slctdcb"> ajb </div>
	
	<ul class="tabs">
  <li>
    <input type="radio" name="tabs" id="tab1" checked />
    <label for="tab1">18-April-2016</label>
    <div id="tab-content1" class="tab-content">
	
	<div id="mornig"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp  MORNING </div></div>
	<input type="button" id = "d1" class="buttona button2 a1" onclick="mainfunc('a1')" value="9:00-9:30"> 
	<?php 
			if(!$row["two"])
			{
	?>
	<input type="button" id = "d2" value="9:30-10:00" class="buttona button2 a2" onclick="mainfunc('a2', '9:30')">
	<?php  
			}
			else
			{
	?>
	<input type="button" id = "d2" value="9:30-10:00" class="buttona1 button2 a2" onclick="mainfunc('a2')">
	<?php
			}
	 ?>

	 <?php 
			if(!$row["four"])
			{
	?>
	<input type="button" value="10:00-10:30" class="buttona button2 a3" onclick="mainfunc('a3','10:00')">
	<?php  
			}
			else
			{
	?>
	<input type="button" value="10:00-10:30" class="buttona1 button2 a3" onclick="mainfunc('a3') ">
	<?php
			}
	 ?>
	<input type="button" value="10:30-11:00" class="buttona button2 a4" onclick="mainfunc('a4')">
	<input type="button" value="11:00-11:30" class="buttona button2 a5" onclick="mainfunc('a5')">
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
	<input type="button" value="19:30-20:00" class="buttonc button2 a18" onclick="mainfunc('a18')" >
	</div>
  </li>

  <li>
    <input type="radio" name="tabs" id="tab2" />
    <label for="tab2">19-April-2016</label>
    <div id="tab-content2" class="tab-content">
	<div id="mornig"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp  MORNING </div></div>
	<input type="button" class="buttona button2 b1" onclick="mainfunc('b1')" value="9:00-9:30">
	<input type="button" class="buttona button2 b2" onclick="mainfunc('b2')" value="9:30-10:00" >
	<input type="button" class="buttona button2 b3" onclick="mainfunc('b3')" value="10:00-10:30">
	<input type="button" class="buttona button2 b4" onclick="mainfunc('b4')" value="10:30-11:00">
	<input type="button" class="buttona button2 b5" onclick="mainfunc('b5')" value="11:00-11:30">
	<input type="button" class="buttona button2 b6" onclick="mainfunc('b6')"  value="11:30-12:00">
	
	<div id="aftnoon"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp AFTERNOON </div></div>
	<br><br>
	<input type="button" value="13:00-13:30" class="buttonb button2 b7" onclick="mainfunc('b7')">
	<input type="button" value="13:30-14:00" class="buttonb button2 b8" onclick="mainfunc('b8')">
	<input type="button" value="14:00-14:30" class="buttonb button2 b9" onclick="mainfunc('b9')">
	<input type="button" value="14:30-15:00" class="buttonb button2 b10" onclick="mainfunc('b10')">
	<input type="button" value="15:00-15:30" class="buttonb button2 b11" onclick="mainfunc('b11')">
	<input type="button" value="15:30-16:00" class="buttonb button2 b12" onclick="mainfunc('b12')">
	<div id="evening"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp EVENING </div></div>
	<br><br> 
	<input type="button" value="17:00-17:30" class="buttonc button2 b13" onclick="mainfunc('b13')">
	<input type="button" value="17:30-18:00" class="buttonc button2 b14" onclick="mainfunc('b14')">
	<input type="button" value="18:00-18:30" class="buttonc button2 b15" onclick="mainfunc('b15')">
	<input type="button" value="18:30-19:00" class="buttonc button2 b16" onclick="mainfunc('b16')">
	<input type="button" value="19:00-19:30" class="buttonc button2 b17" onclick="mainfunc('b17')">
	<input type="button" value="19:30-20:00" class="buttonc button2 b18" onclick="mainfunc('b18')">
	<br><br><br><br>
      
    </div>
  </li>
   <li>
    <input type="radio" name="tabs" id="tab3" />
    <label for="tab3">20-April-2016</label>
    <div id="tab-content3" class="tab-content">
	<div id="mornig"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp  MORNING </div></div>
	<input type="button" value="9:00-9:30" class="buttona button2 c1" onclick="mainfunc('c1')">
	<input type="button" value="9:30-10:00" class="buttona button2 c2" onclick="mainfunc('c2')">
	<input type="button" value="10:00-10:30" class="buttona button2 c3" onclick="mainfunc('c3')">
	<input type="button" value="10:30-11:00" class="buttona button2 c4" onclick="mainfunc('c4')">
	<input type="button" value="11:00-11:30" class="buttona button2 c5" onclick="mainfunc('c5')">
	<input type="button" value="11:30-12:00" class="buttona button2 c6" onclick="mainfunc('c6')">
	
	<div id="aftnoon"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp AFTERNOON </div></div>
	<br><br>
	<input type="button" value="13:00-13:30" class="buttonb button2 c7" onclick="mainfunc('c7')">
	<input type="button" value="13:30-14:00" class="buttonb button2 c8" onclick="mainfunc('c8')">
	<input type="button" value="14:00-14:30" class="buttonb button2 c9" onclick="mainfunc('c9')">
	<input type="button" value="14:30-15:00" class="buttonb button2 c10" onclick="mainfunc('c10')">
	<input type="button" value="15:00-15:30" class="buttonb button2 c11" onclick="mainfunc('c11')">
	<input type="button" value="15:30-16:00" class="buttonb button2 c12" onclick="mainfunc('c12')">
	<div id="evening"> <div class="ba"> &nbsp &nbsp &nbsp &nbsp &nbsp EVENING </div></div>
	<br><br> 
	<input type="button" value="17:00-17:30" class="buttonc button2 c13" onclick="mainfunc('c13')">
	<input type="button" value="17:30-18:00" class="buttonc button2 c14" onclick="mainfunc('c14')">
	<input type="button" value="18:00-18:30" class="buttonc button2 c15" onclick="mainfunc('c15')">
	<input type="button" value="18:30-19:00" class="buttonc button2 c16" onclick="mainfunc('c16')">
	<input type="button" value="19:00-19:30" class="buttonc button2 c17" onclick="mainfunc('c17')">
	<input type="button" value="19:30-20:00" class="buttonc button2 c18" onclick="mainfunc('c18')">
	<br><br><br><br>
      
    </div>
  </li>
</ul>
	
	</div>
	<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      
    </div>
    <div class="modal-body">
		<h2>BOOKING CONFIRMATION</h2>
		<br><br><br>
      <h1 class="modalq">ARE YOU SURE TO CONFIRM THE BOOKING.... <span id="time"></span></h1>
	 <input type="button" class="button2 buttonm" value="OK" onclick="func2()"> <input type="button"  class="button2 buttonm1" value="CANCEL"> 
    </div>
  </div>

</div>
	<div id="heading2"> <div class="docdetail">DOCTOR DETAILS </div></div>
	
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
			
	</div>
	
	
	 <div class="clear"></div>
    <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
  <script>  
  
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
  
  function mainfunc(clssname,time ,idnamw) {
	myFunction2();
	myFunction(clssname);
	func(time, idnamw);
	myFunction3(clssname);
	}
</script>	
<script>
// Get the modal
function func(time, idnamw){
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById(idnamw);

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
	var x = document.querySelector('#myModal > div > div.modal-body > h1 > #time');
	x.innerHTML = time;
    modal.style.display = "block";


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}

</script> 

</script>
<script type='text/javascript' src='script.js'></script>
</body>

</html>