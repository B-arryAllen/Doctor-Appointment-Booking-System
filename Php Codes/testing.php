<?php
date_default_timezone_set("Asia/Kolkata");
$date=new DateTime(); //this returns the current date time
$resulttime = $date->format('H-i');
echo $result;

echo "<br>";
$krr = explode('-',$resulttime);
echo "<br>";
$resulttime = implode("",$krr);
echo $resulttime;
$a="0500";
if($resulttime < $a)
	echo "hi";
else
	echo "bye";
?>