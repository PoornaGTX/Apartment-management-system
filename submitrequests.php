<?php
    include 'config.php';
?>

<?php
		$Fullname=$_POST["Fullname"];
		$DateOfBirth=$_POST["DateOfBirth"];
		$NIC=$_POST["NIC"];
		$MobileNo=$_POST["MobileNo"];
		$Email=$_POST["Email"];
		$ChangingType=$_POST["ChangingType"];
		$ApartNo=$_POST["ApartNo"];
		$Address=$_POST["Address"];
		$Apartmenttype=$_POST["Apartmenttype"];
	
		$sql = "UPDATE changeapartment SET Address='$Address',Apartmenttype='$Apartmenttype' WHERE ApartNo='$ApartNo' ";
	
	if($con -> query($sql)){
		
		header("Location:admin3.php");

	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	// Close connection
	$con->close();

?>