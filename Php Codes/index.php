<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
</head>
<body>
<?php 
   if(!isset($_GET['flag']))
 {
  header("Location: datetemp.php");
 }
?>
<div id="main_container">
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="64" border="0" /></a></div>
    <div class="right_header">
      <div class="top_menu"><a href="adminlogin.php" class="login">login</a></div>
      <div id="menu">
        <ul>
          <li><a class="current" href="index.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="searchType.php">Search Doctor</a></li>
          <li><a href="Userlogin.php">Appointments</a></li>
          <li><a href="Doctorlogin.php">Doctors login</a></li>
        </ul>
      </div>
    </div>
  </div>
 <div class="pattern_bg">
    <div class="pattern_box">
    <img src="images/mt6.jpeg" alt="" width="1200" height="265" border="0"/>
    </div>
  </div>
  <div id="main_content">
    <div class="box_content">
      <div class="box_title">
        <div class="title_icon"><img src="images/mini_icon1.gif" alt="" /></div>
        <h2>Contact<span class="dark_blue"> us</span></h2>
      </div>
      <div class="box_text_content"><img src="images/calendar.gif" alt="" class="box_icon"/>
      <br>
        <div class="box_text"> <img src="images/user.png" alt="" class="box_icon"/><a href="#" class="details"> info@bookmydoc.com </a></div>
       <br><br> </div>
      <div class="box_text_content"> <img src="images/gmail1png.png" alt="" class="box_icon" />
        <div class="box_text">&nbsp &nbsp &nbsp Mail us <br><a href="#" class="details"> bookmydoc@gmail.com </a> <br><br>
        By several years of incessant effort, Book my Doc develop new platform for finding Quality doctorsand gained the customer's praise.Now,We are expanding our reach
        <br> <br> Please Contact:<a href="#" class="details"> info@bookmydoc.com </a> <br>
        <br> <br>for more information</div>
        <a href="#" class="details"></a> </div>
        <div class="box_text_content"> <img src="images/phone1.png" alt="" class="box_icon"/>
        <div class="box_text"> Toll Free Number<br> 
        1800-1874-1854</div>
       <br><br> </div>
    </div>
    <div class="box_content">
      <div class="box_title">
        <div class="title_icon"><img src="images/mini_icon2.gif" alt="" /></div>
        <h2>Our<span class="dark_blue"> Goals</span></h2>
      </div>
      <div class="box_text_content"> <img src="images/checked.gif" alt="" class="box_icon" />
        <div class="box_text"> "When you put patients health first ,remarkable things happen" </div>
        <a href="#" class="details">+ details</a> </div>
      <div class="box_text_content"> <img src="images/checked.gif" alt="" class="box_icon" />
        <div class="box_text"> We devote ourselves to a responsible international medical enterprise.<br><br>We devote ourselves to be a continuously innovating and progressing enterprise<br><br>
        We devote ourselves to be a continuously exceeding ourself and pursuing excellence
        enterprise.
        </div>
        <a href="#" class="details">+ details</a> </div>
    </div>
    <div class="box_content">
      <div class="box_title">
        <div class="title_icon"><img src="images/mini_icon3.gif" alt="" /></div>
        <h2> News & <span class="dark_blue"> Links</span></h2>
      </div>
      <div class="box_text_content"> <img src="images/checked.gif" alt="" class="box_icon" />
        <div class="box_text">DARK CHOCOLATE: A Boost for Athelete's Performance</div>
        <a href="http://www.medicalnewstoday.com/" class="details">+ details</a> </div>
      <div class="box_text_content"> <img src="images/checked.gif" alt="" class="box_icon" />
        <div class="box_text"> Medical Fair INDIA 2016 in Mumbai</div>
        <a href="http://www.medicalfair-india.com/" class="details">+ details</a> </div>
        <div class="nurse"><img src="images/rsz_download.jpg" alt="" width="215" height="230"/></div>
         <div class="box_text_content"> <img src="images/checked.gif" alt="" class="box_icon" />
        <div class="box_text">A new secret to the miracle of breast milk revealed</div>
        <a href="https://www.sciencedaily.com/releases/2016/04/160422115314.htm" class="details">+ details</a> </div>
        
    </div>

    <div class="clear"></div>
  </div>
  <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
</div>
</body>
</html>
