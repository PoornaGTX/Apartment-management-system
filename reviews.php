<?php
  include_once 'config.php';
 ?>

 <?php
    $ano = $_POST["anum"];
    $rate = $_POST["rate"] ;
    $comment = $_POST["review"];
    $email = $_POST["email"];

    $sql="insert into review(reviewno,apartmentno,points,comment,email) values('','$ano','$rate','$comment','$email')";

    if (mysqli_query($con,$sql))
    {
        header("Location:viewap.html");
        echo "successfully ENTERD";
    }
    else {
        echo "Error";
    }
    mysqli_close($con);
  ?>
