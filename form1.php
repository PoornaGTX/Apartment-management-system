<html>
	<head> 
		<title> Feedback for changing apartments </title>
		<link rel="stylesheet" href="style/styles3.css"/>
		<link rel="stylesheet" href="style/feedback.css"/>
	</head>
	
	<body>
		<div class="menubar">
			<button type="submit"class="btnlogin" ><a href="#">Login</a></button>
			<button type="submit"class="btnRegister"><a href="#">Register</a></button>

			<div class="leftmenu">
				<h1 class="text" >NIWAHANA APARTMENTS</h1>
			</div>
			<ul>
				<li style="font-size:20px"> <a href="Home.html"> Home </a> </li>
				<li style="font-size:20px"> <a href="viewapartments.html"> Apartments </a> </li>
				<li style="font-size:20px"> <a href="Aboutus.html">About Us </a> </li>
				<li style="font-size:20px"> <a href="Services.html">Services </a> </li>
				<li style="font-size:20px">  <a href="contact.html">Contact Us </a> </li>
			</ul>
		</div>
		<hr>
		
		<br><br>
		<?php 
	
			//link the connection file
			require 'config.php';
		?>
		
		<div class="mydiv">
		<h3> Confirmation Message </h3>
		<p>Welcome 
			<?php 
				echo $_POST["fname"]; 
			?>
		</p>
		<p>Your email address is: 
			<?php 
				echo $_POST["email"]; 
			?>
		</p>
		<p>Your apartment number is: 
			<?php 
				echo $_POST["number"]; 
			?>
		</p>
		
			<h3><b>GENERAL POLICY:<br></b></h3>
			<p> The operation can be cancelled within 3 working days.<br>
			We are gathering data for your request. <br>
			Your request to sell/upgrade the apartment is being sent.<br><br>
			If you chose to sell: When a buyer is interested in the apartment our Customer Officer wil contact you through your email address.<br><br>
			If you chose to upgrade:A form will be sent to customer's email address according to the availability of apartments.<br>
			If an apartment is available for your request, the upgrade payment should have to be done by credit/debit cards.<br><br>
			Thankyou for choosing Niwahana Apartments.</p>
			
		<br>
		
		<form action="Services.html">
			<input type="submit" id="butonn1" name="buttonn1" value="Go Back To Services Page">
		</form>
		
		</div>	
		
		<?php
			//read form data
			$Fullname=$_POST['fname'];
			$DateOfBirth=$_POST['dob'];
			$NIC=$_POST['nic'];
			$MobileNo=$_POST['phone'];
			$Email=$_POST['email'];
			$ChangingType=$_POST['type'];
			$ApartNo=$_POST['number'];
			$Address=$_POST['address'];
			$Apartmenttype=$_POST['apartmnt'];
			
			//insert data
			$sql="insert into changeapartment(Fullname,DateOfBirth,NIC,MobileNo,Email,ChangingType,ApartNo,Address,Apartmenttype)
				values('$Fullname','$DateOfBirth','$NIC','$MobileNo','$Email','$ChangingType','$ApartNo','$Address','$Apartmenttype')";
			
			//execute
			if($con->query($sql)){
				#echo"Insert Successful";
			}
			else{
				#echo"Error:".$con->error;
			}

			$con->close();
		?>
		
		<br><br><br><br><br>
		
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