    <?php
	
      $con=mysqli_connect('localhost','root','','iwtproject');
	
	$email=$_GET['i'];
	mysqli_query($con,"DELETE FROM user where email='$email'");
	
	header("location:admin1.php")
	

	?>
