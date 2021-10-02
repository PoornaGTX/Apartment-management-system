<?php

require 'config.php';
$Uemail=$_POST["Vemail"];
$Uname=$_POST["Vname"];
$Umobileno=$_POST["Vphone"];
$Uapartmenttype=$_POST["Atype"];
$date=$_POST["vdate"];
$time=$_POST["vtime"];

$sql="select * From appoinmentdetails where email='$Uemail'";
$result=$con->query($sql);

if($result->num_rows>0)
{
	header('location:revisit.html');
}
else
{
$sql="INSERT INTO appoinmentdetails VALUES('$Uemail','$Uname','$Umobileno','$Uapartmenttype','$date','$time')";

if ($con->query($sql))
{
header('location:Services.html');

}
else
{
	echo"ERROR".$con->error;
	
}
}
$con->close();
?>