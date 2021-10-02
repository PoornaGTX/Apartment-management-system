
<html>
<head>
 <title>User update redirect</title>
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
	<li style="font-size:20px"> <a href="RegHome.html"> Home </a> </li>
	<li style="font-size:20px"> <a href="viewapartments.html"> Apartments </a> </li>
	<li style="font-size:20px"> <a href="Aboutus.html">About Us </a> </li>
	<li style="font-size:20px"> <a href="Services.html">Services </a> </li>
	<li style="font-size:20px">  <a href="contact.html">Contact Us </a> </li>
   </ul>
 </div>
  <br>
  <br>
  <div class="h2php">
  	<div class="phpd">
   
   

 <?php
  $con = mysqli_connect("localhost","root","","iwtproject");
  $db = mysqli_select_db($con,'iwtproject');
    
  
      if(isset($_POST['b1']))
	  {
         $email=$_POST['email'];
		  
		  $query="UPDATE user SET firstname='$_POST[fname]',lastname='$_POST[lname]',username='$_POST[uname]',phone='$_POST[phone]',address='$_POST[address]',password='$_POST[psw]'
		  where email='$email'";
		  
		
		  $query_run= mysqli_query($con,$query);
		  
		  if($query_run)
		  {
			  echo"<h2>Profile Updated completed</h2>";
		  }
		  else{
			  echo"<h2>Profile updated not completed</h2>";
		  }
	  }
 
 $con->close();
 ?>
  
  
   </div>
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

 