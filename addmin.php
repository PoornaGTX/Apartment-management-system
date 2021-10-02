<?php
	include_once 'config.php';
 ?>

<!DOCTYPE html>
<head>
	<title> Apartment handling admin </title>
	<link rel="stylesheet" href="style/styles6.css"/>
	<script src="script/myScript6.js"> </script>
	

</head>

  <div class="menubar">
 

     <div class="leftmenu">
      <h1 class="text" >NIWAHANA APARTMENTS</h1>
    </div>
   <ul>
	<li style="font-size:20px"> <a href="adminhome6.html"> Home </a> </li>
	<li style="font-size:20px"> <a href="viewapartments.html"> Apartments </a> </li>
	<li style="font-size:20px"> <a href="addmin.php">Admin </a> </li>
   </ul>
 </div>
 <br>
 <body>

	 	<center> <h3>  Administrators page </h3> </center>
	 <?php

      $con=mysqli_connect('localhost','root','','iwtproject');
  		$s=mysqli_query($con,"select * from review");

?>
  <hr class="a">

 <center>

   <table border="10px" width="20%" >
     <tr>
			 <th>ApartmentNo</th>
       <th>Rate</th>
       <th>Review</th>
       <th>Email</th>
     </tr>


		 <?php
		 		while($q=mysqli_fetch_array($s))
				{
			?>
		<tr>

		<td><?php echo $q['apartmentno']; ?></td>
		<td><?php echo $q['points']; ?></td>
		<td><?php echo $q['comment']; ?></td>
		<td><?php echo $q['email']; ?></td>
		<td><a href="delete6.php?i=<?php echo $q['reviewno']; ?>">Delete</a></td>

	</tr>


<?php
	}

?>
</table>


</center>
<br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

  <hr class="a">
</body>
<footer class="footer">
      <div class="cont">
	      <div class="col">
		     <div class="cardd">
			 <h2>About Us</h2>
			 <p>We're excited to offer some quality apartments.
                The Niwahana Apartments(Pvt) Ltd is one of the leading companies in the real estate sector in Sri Lanka.
                 We have over 20 years experience in real estate.</p>
		  </div>
		 </div>

		   <div class="col">
		     <div class="cardd">
			 <h2>Find Us </h2>
			 <p> Facebook: Niwahana Apartments<br>
			 	 Instagram: niwahanalive<br>
			     Email: niwahanalive@niwanahaapartment.com<br>

			  </p>
		  </div>
		 </div>

		 <div class="col">
		     <div class="cardd">
			 <h2>Location</h2>
			 <p> No 14/2,<br>Athurugiriya road,<br>Malabe.<br></p>
		  </div>
		 </div>

		 <div class="col">
		     <div class="cardd">
			 <h2>Hotline</h2>
			 <p> +94355584894<br>+9411445236777<br>+94558326256<br></p>
		  </div>
		 </div>

	</div>

 </footer>
