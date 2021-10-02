<?php
	include("config.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Our Services </title>
		<link rel="stylesheet" href="style/adminstyle.css"/>
	</head>
	<body>
		<div class="menubar">
			<button type="submit"class="btnlogin" ><a href="#">Login</a></button>
			<button type="submit"class="btnRegister"><a href="#">Register</a></button>

			<div class="leftmenu">
				<h1 class="text" >NIWAHANA APARTMENTS</h1>
			</div>
			<ul>
				<li style="font-size:20px"> <a href="#"> Home </a> </li>
				<li style="font-size:20px"> <a href="#"> Apartments </a> </li>
				<li style="font-size:20px"> <a href="#">About Us </a> </li>
				<li style="font-size:20px"> <a href="admin3.php">Services </a> </li>
				<li style="font-size:20px">  <a href="#">Contact Us </a> </li>
			</ul>
		</div>
		<hr>

		<center>

		
		<?php
			//$recordID = $_GET['payID'];
		
			$i=$_GET['ApartNo'];
			

            //$sql = "SELECT * FROM payment where payID=$recordID";
			$sql="SELECT * from changeapartment WHERE ApartNo=$i";
			
            $result = $con->query($sql);
            if ($result->num_rows > 0) {

               while ($row = $result->fetch_assoc()) {
					$Fullname=$row['Fullname'];
					$DateOfBirth=$row['DateOfBirth'];
					$NIC=$row['NIC'];
					$MobileNo=$row['MobileNo'];
					$Email=$row['Email'];
					$ChangingType=$row['ChangingType'];
					$ApartNo=$row['ApartNo'];
					$Address=$row['Address'];
					$Apartmenttype=$row['Apartmenttype'];
                }
            } else {
                echo "no result";
            }

            ?>
            <br><br>
		
		<form method="POST" action="submitrequests.php" align="left">
			<fieldset>
				<legend> Upgarding form </legend>
				
			Full Name:  <br>
				<input type="text" name="Fullname" style="width:60%;"  value=<?php echo $Fullname; ?> /> <br><br>
					
			Date of Birth: <br>
				<input type="text" name="DateOfBirth" value=<?php echo $DateOfBirth; ?> > <br><br>
				
			NIC: <br>
				<input type="text" name="NIC"  style="20%" value=<?php echo $NIC; ?> > <br><br>
			
			Phone Number:<br>
				<input type="text" name="MobileNo" style="width:15%;" value=<?php echo $MobileNo; ?> > <br><br>
			
			Email Address: </label> <br>
				<input type="text" name="Email" style="width:40%;" value=<?php echo $Email; ?> > <br><br>
			
			Changing type (Sell-s / Upgrade-u): <br>
				<input type="text" name="ChangingType"  value=<?php echo $ChangingType; ?> > <br><br>
				
			Apartment Number: <br>
				<input type="text" name="ApartNo" style="width:10%;" value=<?php echo $ApartNo; ?> readonly> <br><br>
				
			
			Address: <br>
				<textarea id="address" name="Address" cols="60" rows="10" > <?php echo $Address; ?> </textarea> <br><br>
				
			Apartment Name: <br>
				a=Eco Stay<br> 
				b=The Green<br>
				c=Ideal Home<br>
				d=Alpha City<br>
				e=City View<br>
				f=Sky View <br>
				<input type="text" name="Apartmenttype"  value= "<?php echo $Apartmenttype; ?>" /> <br> <br>
				
			<input type="Submit" value="Update the change">
			</fieldset>
		</form>

		</center>
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
		
		