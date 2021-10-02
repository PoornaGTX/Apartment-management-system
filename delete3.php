<?php
	
      $con=mysqli_connect('localhost','root','','iwtproject'); 
	
	$ApartNo = $_GET['ApartNo'];
	
	mysqli_query($con,"DELETE FROM changeapartment where ApartNo='$ApartNo'");
	
	header("location:admin3.php")

	?>
