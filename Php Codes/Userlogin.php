<?php 
if(isset($_GET['id']))
{ ?>

    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      
    </div>
    <div class="modal-body">
    <h2>THANKS FOR YOUR REGISTRATION </h2>
    <br><br><br>
      <h1 >Please use <b> <?php echo $_GET['id']?></b> as your User ID for login. </h1>
    <a href="Userlogin.php">
   <input type="button" class="buttona" value="OK">  </a>
    </div>
  </div>

</div>
<?php

}
?>

<?php 
if(isset($_GET['check']))
{ ?>

    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      
    </div>
    <div class="modal-body">
    <h2>WARNING !!!!!! </h2>
    <br><br><br><br>
      <h1 >THE USER_ID AND PASSWORD DO NOT MATCH </h1>
    <a href="Userlogin.php">
   <input type="button" class="buttona" value="OK">  </a>
    </div>
  </div>

</div>
<?php
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style_user.css" media="screen" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
</head>
<body onload="func()">

<?php 
  /*$id = "";
  if(isset($_GET['id']))
 {
   $id = $_GET['id'];
   echo "{$id}";
}
  */?>
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
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="64" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="searchType.php">Search Doctor</a></li>
          <li><a class="current" href="Userlogin.php">Appointments</a></li>
          <li><a href="Doctorlogin.php">Doctors login</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="pattern_bg">
    <div class="pattern_box">
    <img src="images/1370146_orig.png" alt="" width="434" height="280" border="0"/>
    </div>
    <div class="pattern_box">
      <img src="images/page-banner-clinical-request-appointment1.jpg" alt="" width="700" height="250"/>
    </div>
  </div>
  <div id="main_content">
          <div class="title_icon"><img src="images/login_user.png" width="233" height="233"alt="" /></div> 
          <div class="pattern_content">
      <form action="userloginprocess.php" method="post">
     <h1> <span class="dark_blue">User ID </span>
     <input type="text" name="userid">
     <h1> <span class="dark_blue">Password</span>
    <input type="password" name="password" >
    <br> 
    <!--<a href="bookingType.html" class="myButton"> Login </a>-->
    <input type="submit" name="Login" value="Login" class="myButton">
    <a href="index.php" class="myButton"> Cancel </a>
    
    <br>
    <h2> <span class = "blue">Not a member yet ? &nbsp &nbsp </span>
     <span class = "red"><a href ="UserRegister.php">Register </a></span></h2>
    </form>
      </div>
          </div>
    <div class="clear"></div>
    <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
  </div>

  <script>
// Get the modal
function func(idnamw){
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById(idnamw);

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 

//  var x = document.querySelector('#myModal > div > div.modal-body > h1 > #time');
//  x.innerHTML = time;
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

</body>
</html>
