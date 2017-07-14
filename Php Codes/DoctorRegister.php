
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="register_doctor.css" media="screen" />
<link rel="stylesheet" type="text/css" href="test.css" media="screen" />
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
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="pattern_bg">
    <div class="pattern_box">
    <img src="images/banner_registration.jpg" alt="" width="1200" height="255" border="0"/>
    </div>
  </div>
<div id="main_content">
          
          <!--  
    <form action="http://localhost/doctorprocess.php" method="post">
     <h1> <span class="dark_blue">First Name</span>
      <input type="text" name="first">
     <h1> <span class="dark_blue">Last Name</span>
        <input type="text" name="last">
 
          <h1> <span class="dark_blue">Address</span>
          <input type="text" name="address">
           <h1> <span class="dark_blue">Phone no.</span>
          <input type="text" name="phone">
           <h1> <span class="dark_blue">Email-ID</span>
          <input type="text" name="email">
          <h1> <span class="dark_blue">Specialisation</span>
          <input type="text" name="spec">
          <h1> <span class="dark_blue">Password</span>
          <input type="password" name="password">
    <br> 
    <!-<a href="Userlogin.html" class="myButton"> Submit </a>
    <br>

    <input type="submit" name="submit" value="submit">
    <br>
    </form>
      </div>-->
      <div class="pattern_content">
	  
	  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      
    </div>
    <div class="modal-body">
		<h2>THANKS FOR YOUR REGISTRATION </h2>
		<br><br><br>
      <h1 >Please use <b>'abcd'</b> as your User ID for login. </h1>
	  <a href="Doctorlogin.php">
	 <input type="button" class="buttona" value="OK">  </a>
    </div>
  </div>

</div>


      <div class="title_icon1"><img src="images/doctor.png" width="283" height="233"alt="" /></div>
      <div class="signup-wrap">
  <form action="http://localhost/doctorprocess.php" method="post"> <br><br> <a class="signup"></a> <br> 
      <input type="text" name="first" placeholder="Your Firstname" required/><br>
      <input type="text" name="last" placeholder="Your Lastname" required/><br>
	  <input type="text" name="sex" placeholder="Male/Female/Others" required/><br>
	  <input type="text" name="age" placeholder="Your Age" required/><br>
      <input type="text" name="area" placeholder="Area you see patients" required/><br>
      <input type="text" name="address" placeholder="Your Complete Address" required/><br>
      <input type="text" name="phone" placeholder="Your Phone Number" required/><br>
      <input type="text" name="email" placeholder="Your Email-ID"required/><br>
      <input type="text" name="spec" placeholder="You Specialise in?" required/><br>
      <input type="text" name="fees" placeholder="Your Fees (in Rs.)" required/><br>
      <input type="password"  name="password" placeholder="Please choose a Password"required/><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="submit" id='a1' value="SUBMIT"  />
  </form>
  </div>
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

//	var x = document.querySelector('#myModal > div > div.modal-body > h1 > #time');
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
