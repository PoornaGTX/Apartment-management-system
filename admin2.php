<html>
	<head>
		<title> Niwahana Apartments </title>
		<script src="script/myScript.js"></script>
		<link rel="stylesheet" href="style/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<div class="menubar">
   

     <div class="leftmenu">
	    <h1 class="text" >NIWAHANA APARTMENT</h1>
	  </div>
   <ul>
	<li style="font-size:20px"> <a href="adminhome2.html"> Home </a> </li>
	<li style="font-size:20px"> <a href="viewapartments.html"> Apartments </a> </li>
	<li style="font-size:20px"> <a href="admin2.php">Admin </a> </li>

   </ul>
 </div>
		<br><br><br>


	

<?php

      $con=mysqli_connect('localhost','root','','iwtproject');
 //$con=mysqli_connect('localhost','root','','appartment');
//$sql=mysqli_query "select Email,Name,MobileNumber,ApartmentType,Date,Time From appoinment";
 $s=mysqli_query($con,"select * from appoinmentdetails");

?>
	
<table border=3 align="center" style="background-color:#9e9e9e">	
<tr><th colspan="7">Appointment Details</th></tr>
<tr>

<th>Email</th>
<th>Name</th>
<th>MobileNumber</th>
<th>ApartmentType</th>
<th>Date</th>
<th>Time</th>
<th>Delete Record</th>



</tr>
<?php


	//$row=$result->fetch_assoc()
	while($q=mysqli_fetch_array($s))
	{
?>
		<tr>
		<td><?php echo $q['email']; ?></td>
		<td><?php echo $q['name']; ?></td>
		<td><?php echo $q['phone']; ?></td>
		<td><?php echo $q['apartmenttype']; ?></td>
		<td><?php echo $q['date']; ?></td>
		<td><?php echo $q['time']; ?></td>
		<td><a href="delete2.php?i=<?php echo $q['email']; ?>">Delete</a></td>
		
	</tr>
	
	
<?php	
	}

?>


</table>	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



	
	
	
	
	
	
<footer class="footer">
      <div class="cont">
	      <div class="col">
		     <div class="card1">
			 <h2 class="f">About Us</h2>
			 <p>we're excited to offer some quality apartments.
                The Niwahana Apartments(Pvt) Ltd is one of the leading companies in the real estate sector in Sri Lanka.
                 We have over 20 years' experience in real estate.</p>
		  </div>
		 </div>
		 
		   <div class="col">
		     <div class="card1">
			 <h2 class="f">Find Us </h2>
			 <p> Facebook: Niwahana Apartments<br>
			 	 instagram : niwahanalive<br>
				 Email:inquire@Napartments.com<br>
			  niwahanalive@niwanahaapartment.com<br>
				 
			  </p>
		  </div>
		 </div>
		 
		 <div class="col">
		     <div class="card1">
			 <h2 class="f">location</h2>
			 <p> No 14/2,<br>Athurugiriya road,<br>Malabe.<br></p>
		  </div>
		 </div>
		 
		 <div class="col">
		     <div class="card1">
			 <h2 class="f">Hotline</h2>
			<p> +94 355 584 894<br>+94 445 236 777<br>+94 558 326 256<br></p>
		  </div>
		 </div>
		  
	</div>
	
 </footer>
	</html>
