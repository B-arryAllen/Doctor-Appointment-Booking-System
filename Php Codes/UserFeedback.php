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
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type = "text/css" href= "table1.css">
<link rel="stylesheet" type = "text/css" href= "feedback_user.css">
<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
<script type='text/javascript' src='script.js'></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
 <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
</head>
<body>
<?php
//session_start();
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
   // echo "Connected successfully hi";   
    $userid = $_SESSION['userid'];
    $sql = "SELECT `d_id`, `appointment_date`, `appointment_time` FROM `appointment` WHERE u_id={$userid} and disp=0;";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    echo "nope";
//else echo "happy";
//print_r($result);
$uid=$_SESSION['userid'];
$did="";
$date="";
$time="";
?>


<div id="main_container">
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
         <li><a href="index.php">Home</a></li>
          <li><a href="UserDetails.php">My Details</a></li>
          <li><a href="bookingType.php">Book now</a></li>
          <li><a href="ViewBook.php">View Bookings</a></li>
          <li><a href="CancelBook.php">Cancel Booking</a></li>
          <li><a class="current" href="UserFeedback.php">Feedback</a></li>
          <li><a href="userprocesslogout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="pattern_bg">
    <div class="pattern_box">
    <img src="images/Feedback-banner (1).jpg" alt="" width="1200" height="250" border="0"/>
    </div>
    
  </div>
  
  <div id="main_content">
       <!--   <div class="title_icon"><img src="images/doctors.png" width="233" height="233"alt="" /></div>  -->
          <div class="pattern_content">
      
      </div>

      <table class="flatTable">
      
     <tr class="titleTr">
    <td class="headingTr1" colspan = "7"><font family = "sans-serif">F E E D B A C K &nbsp&nbsp&nbsp&nbsp&nbsp </td>
  </tr>
    <tr class="headingTr">
      <th > Doctor's Name </th>
      <th> Specialisation </th>
     
      <th > Phone No. </th>
      <th > Appointment Date </th>
      <th > Appointment Time </th>
      <th> Give Feedback </th>
    </tr>

    <?php 
    $a = "1";
while($row = mysqli_fetch_assoc($result))
{
$did=$row['d_id'];
$date=$row['appointment_date'];
$time=$row['appointment_time'];
$sql1 = "SELECT * FROM verified_doctor where verified_doctor.d_id = '{$did}'";
    $result1 = mysqli_query($conn,$sql1);
    if(!$result1)
    {
     // echo "failed1";
    }
    else
    {
      //echo "success"; 
    }

    $first_name = "";
    $last_name ="";
    $specialisation ="";
    $address = "";
    $email = "";
    $phone = "";
    $sex = "";
    $fees = "";
    $age = "";
    $row1 = mysqli_fetch_assoc($result1);
      $first_name =  $row1["first_name"];
      $last_name =  $row1["last_name"];
      $specialisation =  $row1["specialisation"];
      $address =  $row1["address"];
      $phone =  $row1["phone"];
      $email =  $row1["email"];
      $sex = $row1["sex"];
      $fees = $row1["fees"];
      $age = $row1["age"];
      
    //  print_r($row1);
?>

<div id="a<?php echo $a ?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="b<?php echo $a ?>">×</span>
    </div>
    <div class="modal-body">
    <form action="feedbackprocess.php?did=<?php echo $did ;?>&date=<?php echo $date ;?>" method="post">
  <!--     <textarea rows="2" name="comment" id="comment" placeholder="Comment"></textarea> -->
      <h1>Submit Your FeedBack Hereeeeeeee</h1>
    <fieldset class="rating" align="center">
    <input type="radio" id="star5<?php echo $a ?>" name="rating" value="5" /><label class = "full" for="star5<?php echo $a ?>" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half<?php echo $a ?>" name="rating" value="4.5" /><label class="half" for="star4half<?php echo $a ?>" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4<?php echo $a ?>" name="rating" value="4" /><label class = "full" for="star4<?php echo $a ?>" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half<?php echo $a ?>" name="rating" value="3.5" /><label class="half" for="star3half<?php echo $a ?>" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3<?php echo $a ?>" name="rating" value="3" /><label class = "full" for="star3<?php echo $a ?>" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half<?php echo $a ?>" name="rating" value="2.5" /><label class="half" for="star2half<?php echo $a ?>" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2<?php echo $a ?>" name="rating" value="2" /><label class = "full" for="star2<?php echo $a ?>" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half<?php echo $a ?>" name="rating" value="1.5" /><label class="half" for="star1half<?php echo $a ?>" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1<?php echo $a ?>" name="rating" value="1" /><label class = "full" for="star1<?php echo $a ?>" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf<?php echo $a ?>" name="rating" value="0.5" /><label class="half" for="starhalf<?php echo $a ?>" title="Sucks big time - 0.5 stars"></label>
</fieldset>
<input type ="textarea" rows="7" cols="47" class = "textbox" name ="commentbox" >
<!-- <textarea rows="7" cols="47" id="m1"  class="textbox" ></textarea> -->
<input type="submit" class="buttona"> </input>
</form>
    </div>
    </div>
  </div>



<tr> 
        <td width="200px"> Dr. <?php echo $row1["first_name"]; ?></td>
      <td width="200px"> <?php echo $row1["specialisation"]; ?> </td>
      
      <td width="200px"> <?php echo $row1["phone"]; ?> </td>
      <td width="200px"> <?php echo $row['appointment_date']; ?> </td>
      <td width="200px"> <?php echo $row['appointment_time'];  ?></td>
      <td width="200px">
    <button class="usrp-feedback-button-1" id="a<?php echo $a ?>" onclick="func('a<?php echo $a ?>','b<?php echo $a ?>')">       
    <i>
      <svg viewBox="0 0 50 50" enable-background="0 0 50 50">
        <path class="fill" d="M37.1,15.9L35,13.7c-0.9-0.9-2.6-0.9-3.5,0l-2.1,2.1c0,0,0,0,0,0s0,0,0,0L16.1,29.1c0,0,0,0,0,0s0,0,0,0l-0.3,0.3c-0.1,0.1-0.1,0.1-0.1,0.2L14.2,36c0,0.2,0,0.3,0.1,0.5c0.1,0.1,0.2,0.1,0.4,0.1c0,0,0.1,0,0.1,0l6.5-1.5c0.1,0,0.2-0.1,0.2-0.1l0.2-0.2c0,0,0,0,0,0s0,0,0,0l13.2-13.2c0,0,0,0,0,0c0,0,0,0,0,0l2.1-2.1C38.1,18.4,38.1,16.8,37.1,15.9z M21.4,33.7l-4.2-4.2l12.5-12.5l4.2,4.3L21.4,33.7z M16.6,30.3l4,4l-5.2,1.2L16.6,30.3z M36.4,18.7l-1.8,1.8l-4.2-4.3l1.8-1.8c0.6-0.6,1.6-0.6,2.1,0l2.1,2.1C37,17.1,37,18.1,36.4,18.7z"/>
      </svg>            
    </i>
    <span>Reviews & feedback</span>
    </button>
     </td>
    </tr>

<?php
$a = $a + 1;
//echo $did."   ".$date."    ".$time."   ";
}
?>

</table>
 </div>   
 </div>
  
  <script>
// Get the modal
function func(id1,id2){
// Get the modal
var modal = document.getElementById(id1);

// Get the button that opens the modal
var btn = document.getElementById(id1);

// Get the <span> element that closes the modal
var span = document.getElementById(id2);

// When the user clicks the button, open the modal 
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

function Clear(id2)
{    
   document.getElementById(id2).value= "";
}
</script> 

</body>
</html>
