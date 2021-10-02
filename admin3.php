<?php

     $con=mysqli_connect('localhost','root','','iwtproject');

	$result=mysqli_query($con,"select * from changeapartment");

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Our Services </title>
		<link rel="stylesheet" href="style/adminstyle.css"/>
	</head>
	<body>
		<div class="menubar">

			<div class="leftmenu">
				<h1 class="text" >NIWAHANA APARTMENTS</h1>
			</div>
			<ul>
				<li style="font-size:20px"> <a href="adminhome3.html"> Home </a> </li>
				<li style="font-size:20px"> <a href="viewapartments.html"> Apartments </a> </li>
				<li style="font-size:20px"> <a href="admin3.php">Admin </a> </li>
		
			</ul>
		</div>
		<hr>
		<h1 align="center" class="capitalize"> our services </h1>
		
		<center>
		
		
		<div class="tablechangingapartment"> 
		
		<table border="1" width="100%">
				<tr>
					<th> Fullname </th>
					<th> DateOfBirth </th>
					<th> NIC </th>
					<th> MobileNo </th>
					<th> Email </th>
					<th> ChangingType </th>
					<th> ApartNo </th>
					<th> Address </th>
					<th> Apartmenttype </th>
					<th colspan="2" align="center"> Operation </th>
				</tr>

				<!-- function -->
					<?php
					readData();

					function readData()
					{
						global $con;
						$sql="select * from changeapartment";
						$result=$con->query($sql);

						if($result->num_rows>0)
						{
							while($row=$result->fetch_assoc())
							{
								$Fullname=$row['Fullname'];
								$DateOfBirth=$row['DateOfBirth'];
								$nic=$row['NIC'];
								$MobileNo=$row['MobileNo']; 
								$Email=$row['Email'];
								$ChangingType=$row['ChangingType'];
								$ApartNo=$row['ApartNo'];
								$Address=$row['Address'];
								$Apartmenttype=$row['Apartmenttype'];

								echo"<tr>
									<td>".$Fullname."</td><td>".
									$DateOfBirth."</td><td>".
									$nic."</td><td>".
									$MobileNo."</td><td>".
									$Email."</td><td>".
									$ChangingType."</td><td>".
									$ApartNo."</td><td>".
									$Address."</td><td>".
									$Apartmenttype."</td><td>".
									"<button type='submit'><a href ='edit3.php?ApartNo=$ApartNo'>EDIT RECORD</a> </button></td><td>".
									"<button type='submit'><a href ='delete3.php?ApartNo=$ApartNo'> DELETE</a> </button></td>";

									


							}
						}
						else{
							echo"no result";

						}
						$con ->close();

					}
					?>
			

			</table>
			
		</div>
		</center>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<hr>
		
		<div>
			<footer class="footer">
				<div class="cont">
					<div class="col">
						<div class="card">
							<h2>About Us</h2>
								<p>We're excited to offer some quality apartments.
									The Niwahana Apartments(Pvt) Ltd is one of the leading companies in the real estate sector in Sri Lanka.
									We have over 20 years experience in real estate.</p>
						</div>
					</div>
		 
					<div class="col">
						<div class="card">
							<h2>Find Us </h2>
								<p> Facebook: Niwahana Apartments<br>
									Instagram : niwahanalive<br>
									Email: inquire@Napartments.com <br>
				 
								</p>
						</div>
					</div>
		 
					<div class="col">
						<div class="card">
							<h2>Location</h2>
								<p> No 14/2,<br>Athurugiriya road,<br>Malabe.<br></p>
						</div>
					</div>
		 
					<div class="col">
						<div class="card">
							<h2>Hotline</h2>
								<p>+94 355 584 894<br>+94 445 236 777<br>+94 558 326 256<br></p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>