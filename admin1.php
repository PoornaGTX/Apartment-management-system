
<html>
<head>
 <title>Admin</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="menubar">
  <div class="header">
</div>
     <div class="leftmenu">
	    <h1 class="text" >NIWAHANA APARTMENT ADMIN</h1>
	  </div>
   <ul>
	<li style="font-size:20px"> <a href="adminhome.html"> Home </a> </li>
	<li style="font-size:20px"> <a href="viewapartments.html"> Apartments </a> </li>
	<li style="font-size:20px"> <a href="admin1.php">Admin </a> </li>
   </ul>
 </div>
  <br>
  <br>
    
	<div class="phpd">

    <?php
      $con=mysqli_connect('localhost','root','','iwtproject');
	  $s=mysqli_query($con,"select * from user");
	
	?>

  
  <table class="phptable" border=10  align="center" style="background-color:white">
     <tr><td colspan="12" align="center"><h1>NIWAHANA APARTMENT USER DETAILS</h1></td></tr>
     <tr>
         <th>First Name</th>	 
		 <th>Last Name</th>	 
		 <th>User Name</th>	 
		 <th>Gender</th>	 
	     <th>Phone</th>	 
	     <th>Email</th>	
         <th>Address</th>	 
         <th>Date Of Birth</th>	 
         <th>Landing Type</th>	 	
         <th>Password</th>	
         <th>NIC</th>	   
		 <th>DELETE OPTION</th>	
	 </tr>
	 
	 <?php
	 while($r=mysqli_fetch_array($s))
	 {
		 ?>
		 <tr>
		 <td><?php echo $r['firstname'] ; ?></td>
		 <td><?php echo $r['lastname'] ; ?></td>
		 <td><?php echo $r['username'] ; ?></td>
		 <td><?php echo $r['gender'] ; ?></td>
		 <td><?php echo $r['phone'] ; ?></td>
		 <td><?php echo $r['email'] ; ?></td>
		 <td><?php echo $r['address'] ; ?></td>
		 <td><?php echo $r['dob'] ; ?></td>
		 <td><?php echo $r['landingtype'] ; ?></td>
		 <td><?php echo $r['password'] ; ?></td>
		 <td><?php echo $r['nic'] ; ?></td>
		 <td><a href="deleteuser.php?i=<?php echo $r['email'];?>">DELETE </a></td> 
		
		 
		 </tr>
		 <?php
		 
	 }

	?> 
  </table>
   <br>
   <br>
   <br>
   
   
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

 