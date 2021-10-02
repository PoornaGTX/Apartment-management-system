<?php
			 $con=mysqli_connect('localhost','root','','iwtproject');

			 $mail=$_GET['i'];

			$sql="DELETE FROM review where reviewno='$mail'";
			 
			 
			 if($con->query($sql)){
				 header("Location:addmin.php");
				 
			 }
			 else{
				 echo "error deleting";
			 }

mysqli_close($con);
?>
