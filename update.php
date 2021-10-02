<?php
    include_once 'config.php';
?>
<?php

//getting updated values
$aType=$_POST["text1"];
$amount=$_POST["text2"];
$aNo=$_POST["text3"];
$pID=$_POST["paymentid"];



$sql="UPDATE payment
     SET apartmenttype='$aType',amount='$amount',apartment='$aNo' 
     WHERE paymentid='$pID'";

if($con->query($sql)){
   
    header("Location:admin4.php");
}
else{
    echo "<script> alert('ERROR: Could not execute $sql')</script>" ;
   
}
mysqli_close($con);

?>