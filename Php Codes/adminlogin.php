<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="admin.css" media="screen" />
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
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="64" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li> <br><a href="index.php">Home</a></li>
          
        </ul>
      </div>
    </div>
  </div>
  
  <div id="main_content">
          <div class="title_icon"><img src="images/login_user.png" width="233" height="233"alt="" /></div> 
          <div class="pattern_content">
      <form action="admin.php?it=0" method="post">
     <h1> <span class="dark_blue">Admin Login ID </span>
     <input type="text" name="id">
     <h1> <span class="dark_blue">Admin Password</span>
    <input type="password" name="password" >
    <br> 
    <!--<a href="admin.html" class="myButton"> Login </a>-->
    <input type="submit" name="submit" value="Login" class="myButton"> </input>
    <a href="index.php" class="myButton"> Cancel </a>
    <br>
    
    </form>
      </div>
          </div>
    <div class="clear"></div>
    <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
  </div>
</body>
</html>
