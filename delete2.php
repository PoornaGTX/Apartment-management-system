<?php


				//require 'config.php';
			 $con=mysqli_connect('localhost','root','','iwtproject');

$mail=$_GET['i'];


mysqli_query($con,"DELETE FROM appoinmentdetails where email='$mail'");

//echo $mail;
header("location:admin2.php")

?>