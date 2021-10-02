<?php

session_start();
require 'config.php';

$uemail=$_POST["email"];
$upass=$_POST["psw"];

$sql="select * From user where email='$uemail' and Password='$upass'";

$result=$con->query($sql);

if($result->num_rows>0)
{
	if (isset($_POST["email"]))
		{
			$_session["SID"]=$_POST["email"];
		}
	
	if (isset($_session["SID"])){
	if($uemail=='admin1@gmail.com')
				{
					echo $_session["SID"];
					header('location:admin1.php');
					exit();
				}
	else if($uemail=='admin2@gmail.com')
				{
					echo $_session["SID"];
					header('location:admin2.php');
					exit();
				}
	else if($uemail=='admin3@gmail.com')
				{
					echo $_session["SID"];
					header('location:admin3.php');
					exit();
				}
	else if($uemail=='admin4@gmail.com')
				{
					echo $_session["SID"];
					header('location:admin4.php');
					exit();
				}
	else if($uemail=='admin5@gmail.com')
				{
					echo $_session["SID"];
					header('location:admin5.php');
					exit();
				}
	else if($uemail=='admin6@gmail.com')
				{
					echo $_session["SID"];
					header('location:addmin.php');
					exit();
				}
				
				else
				{
					header('location:Home.html');
					
				}
		
	
	}
}
	



else
{
	
	header('location:relogin.html');
	
}
$con->close();

?>