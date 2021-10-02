<?php
    include_once 'config.php';
?>

<?php
            $recordID = $_GET['paymentid'];
            $sql = "DELETE FROM payment WHERE paymentid = '$recordID'";

            if($con -> query($sql)){
                echo "<script> alert('Record deleted successfully')</script>";
                header("Location:admin4.php");
            } 
            else{
                echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
            }
             
           
            mysqli_close($con);
        
        ?>
        