
<html>
<head>
 <title>User Update</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/styleform.css">
	<script src="script/jscript.js"> </script>
</head>
<body>
    <div class="menubar">

  <div class="header">
</div>
     <div class="leftmenu">
	    <h1 class="text" >NIWAHANA APARTMENT</h1>
	  </div>
   <ul>
	<li style="font-size:20px"> <a href="Home.html"> Home </a> </li>
	<li style="font-size:20px"> <a href="viewapartments.html"> Apartments </a> </li>
	<li style="font-size:20px"> <a href="Aboutus.php">About Us </a> </li>
	<li style="font-size:20px"> <a href="Services.html">Services </a> </li>
	<li style="font-size:20px">  <a href="contact.html">Contact Us </a> </li>
   </ul>
 </div>
  <br>
  <br>
  
  
  	<form action="updatenext.php"  method="POST" onsubmit="return checkPassword()">
			<h2 class="reg"> Profile Update </h2>
			First Name : <br>
			<input type="text" id="fname" name="fname" style="width:95%;" required> <br><br>
			
			Last Name : <br>
			<input type="text" id="lname" name="lname" style="width:95%;" required> <br><br>
			
			User Name: <br>
			<input type="text" id="uname" name="uname" style="width:95%;" required> <br><br>
			
				
		
			Mobile number : <br>
			<input type="phone" id="phone" name="phone" style="width:95%;" pattern="[0-9]{10}" placeholder="123456789" required > <br><br>
			
			Email Address : <br>
			<input type="email" id="email" name="email" style="width:95%;" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-z]{2,3}" required> <br><br>
			
			
			Address : <br>
			<textarea id="address" name="address" cols="60" rows="10"> </textarea> <br><br>
			

			Password : <br>
			<input type="password" placeholder="password must contain numbers and characters" id="psw" name="psw" style="width:95%;" pattern="[a-zA-Z0-9]{5,10}" required > <br><br>
			
			Re-enter Password : <br>
			<input type="password" id="rpsw" name="rpsw" style="width:95%;" pattern="[a-zA-Z0-9]{5,10}" required > <br><br>
			
			
			
			<input type="submit" id="b1" name="b1" value="submit" >
		</form>
		
<br>
<br>


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
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  