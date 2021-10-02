<?php


	$con=new mysqli("Localhost","root","","iwtproject");
	


	if($con->connect_error)
	{
			die("Connection faild:".$con->connect_error);
		
		
	}
	else
	{
		//echo "connect";
	}
?>