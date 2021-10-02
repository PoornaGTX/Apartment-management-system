
<html>
<head>
 <title>Registration</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/styleform.css">
	<script src="script/jscript.js"> </script>
</head>
<body>
    <div class="menubar">
	    <button type="submit" class="btnlogin" ><a href="userupdate.php">My Profile</a></button>
  <div class="header">
</div>
     <div class="leftmenu">
	    <h1 class="text" >NIWAHANA APARTMENT</h1>
	  </div>
   <ul>
	<li style="font-size:20px"> <a href="RegHome.html"> Home </a> </li>
	<li style="font-size:20px"> <a href="viewapartments.html"> Apartments </a> </li>
	<li style="font-size:20px"> <a href="Aboutus.html">About Us </a> </li>
	<li style="font-size:20px"> <a href="Services.html">Services </a> </li>
	<li style="font-size:20px">  <a href="contact.html">Contact Us </a> </li>
   </ul>
 </div>
  <br>
  <br>
   
<div class="regphp">




<?php 

			require 'config.php';

		?>



<?php
$con=mysqli_connect('localhost','root','','iwtproject');

mysqli_select_db($con, 'userregistration');
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $list = $_POST['list'];
  $psw = $_POST['psw'];
  $nic = $_POST['nic'];
  
  $s="select * from user where email='$email'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);


if($num==1){
	
	echo "<h2>Email already taken<h2>";
}
else{
	$reg="insert into user(firstname,lastname,username,gender,phone,email,address,dob,landingtype,password,nic) values( '$fname','$lname','$uname','$gender','$phone','$email','$address','$dob','$list','$psw','$nic')";
	mysqli_query($con,$reg);
	echo "<h2>Registration Successful</h2>";	
}
$con->close();
?>



</div>

  <div>
<footer class="footer">
      <div class="cont">
	      <div class="col">
		     <div class="card">
			 <h2>About Us</h2>
			 <p>We're excited to offer some quality apartments.
                The Niwahana Apartments(Pvt) Ltd is one of the leading companies in the real estate sector in Sri Lanka.
                We have over 20 years' experience in real estate</p>
		  </div>
		 </div>
		 
		   <div class="col">
		     <div class="card">
			 <h2>Find Us</h2>
			 <p> Facebook: Niwahana Apartments<br>
			 	 Instagram : niwahanalive<br>
			     inquire@Nahaapartment.com<br>
			  </p>
		  </div>
		 </div>
		 
		 <div class="col">
		     <div class="card">
			 <h2>location</h2>
			 <p> Niwahana Aprtment HQ,<br>colombo Rd,<br>Kandy<br></p>
		  </div>
		 </div>
		 
		 <div class="col">
		     <div class="card">
			 <h2>Hotline</h2>
			 <p> +94 355 584 894<br>+94 445 236 777<br>+94 558 326 256</p>
		  </div>
		 </div>
		  
	</div>
	
 </footer>
</div>
</body>
</html>
  
  
  
  
  
  