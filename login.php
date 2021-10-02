<!DOCTYPE html>
<html>
	<head>
		<title> Niwahana Apartments </title>
		<script src="script/myScript.js"></script>
		<link rel="stylesheet" href="style/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
<body>

	
	
	<div class="menubar">
    <button type="submit"class="btnlogin" ><a href="login.php">Login</a></button>
    <button type="submit"class="btnRegister"><a href="Reg.html">Register</a></button>

     <div class="leftmenu">
	    <h1 class="text" >NIWAHANA APARTMENT</h1>
	  </div>
   <ul>
	<li style="font-size:20px"> <a href="#"> Home </a> </li>
	<li style="font-size:20px"> <a href="#"> Apartments </a> </li>
	<li style="font-size:20px"> <a href="#">About Us </a> </li>
	<li style="font-size:20px"> <a href="#">Services </a> </li>
	<li style="font-size:20px">  <a href="#">Contact Us </a> </li>
   </ul>
 </div>
		<br><br><br>
		<div  class="form_img">
		
		<form action="ulogin.php" method="POST" class="form" name="myForm">
			<h2 class="l">Login</h2>
			<label class="ema"><b>Email</b></label><br>
			<input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-z]{2,3}" required> <br>

			<label class="psd"><b>Password</b></label><br>
			<input type="password" id="psw" name="psw" required > <br>
			
			<button type="submit" class="btn">Login</button><br><br>
			<h2 class="l">Or<br>Sign in with</h2>
			<center>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-google"></a>
			<a href="#" class="fa fa-google-plus"></a>
			</center>
		</form>
		</div>
	   
		<br><br><br>
		
		<div>
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
</div>
		
</body>
</html>
