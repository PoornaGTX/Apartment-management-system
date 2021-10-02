<html>
	<head> 
		<title> Feedback for reserving apartments </title>
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
		<p>Your Email Address Is: 
			<?php 
				echo $_POST["email"]; 
			?>
		</p>
		<p>Your Reservation Date Is: 
			<?php 
				echo $_POST["date"]; 
			?>
		</p>
		
				<h3><b>GENERAL CANCELLATION POLICY:<br></b></h3>
			<p>The reservation can be cancelled totally or partially but the following penalties must be paid: <br>
				100% if cancellation is made after one month of reservation period.<br>
				80% if cancellation is made in between 3 weeks after reservation period.<br>
				30% if cancellation is made in between a week after reservation period.<br>
				0% if cancellation is made in between 3 days after reservation period.</p>
		<h3>TERMS OF PAYMENT:<br></h3>
			<p>If user was not able to cancel the reservation the reservation cancellation fee can be done by credit/debit cards.</p> <br>
		
			<p> Thankyou for choosing Niwahana Apartments. </p>
		<br>
		
		<form action="Services.html">
			<input type="submit" id="butonn1" name="buttonn1" value="Go Back To Services Page">
		</form>
		
		</div>	
		
		<?php 
			
			#read form data
			$Apartmenttype=$_POST["apartmnt"];
			$ApartNo=$_POST["Number"];
			$Interests=$_POST["inte1"];
			$Fullname=$_POST["fname"];
			$ReservationDate=$_POST["date"];
			$NIC=$_POST["nic"];
			$MobileNo=$_POST["phone"];
			$Email=$_POST["email"];
			$Plantovisit=$_POST["visit"];
			$Contact=$_POST["s"];
			$Information=$_POST["inte"];
	
			#insert data
			$sql="insert into reserve(Apartmenttype,Apartmentno,Interest,Fullname,ReservationDate,NIC,Mobileno,Email,Plantovisit,Contact,Info)
				values('$Apartmenttype','$ApartNo','$Interests','$Fullname','$ReservationDate','$NIC','$MobileNo','$Email','$Plantovisit','$Contact','$Information')";
			
			#execute
			if($con->query($sql)){
				//echo"Insert Successful";
			}
			else{
				//echo"Error:".$con->error;
			}

			#close the connection
			$con->close();
		?>

		<br>
		
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