<html>

<head>

    <link rel="stylesheet" href="style/headerFooter.css">
    <link rel="stylesheet" href="style/contactForm.css">
</head>

<body>

    <div class="menubar">
        <button type="submit" class="btnlogin"><a href="#">Login</a></button>
        <button type="submit" class="btnRegister"><a href="#">Register</a></button>

        <div class="leftmenu">
            <h1 class="text">NIWAHANA APARTMENTS</h1>
        </div>
        <ul>
            <li style="font-size:20px"> <a href="Home.html"> Home </a> </li>
            <li style="font-size:20px"> <a href="viewapartments.html"> Apartments </a> </li>
            <li style="font-size:20px"> <a href="Aboutus.html">About Us </a> </li>
            <li style="font-size:20px"> <a href="Services.html">Services </a> </li>
            <li style="font-size:20px"> <a href="contact.html">Contact Us </a> </li>
        </ul>
    </div>
    <div class="image10">
        <div class="container">


    <?php
    include "config.php";
    ?>

    <br><br>
    <p> Dear <?php echo $_POST["fname"]; ?> </p><br><br>

    <p> We received your message. We will get back to you through your email: <?php echo $_POST["mail"]; ?> </p><br><br>
    <p> Thankyou </p><br><br>
    
    

    <?php

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["mail"];
    $phoneNo = $_POST["phoneNo"];
    $msg = $_POST["add"];


    $sql = "INSERT INTO inquire(firstname,lastname,email,phone,message)
              VALUES ('$fname','$lname','$email','$phoneNo','$msg')   ";

    if ($con->query($sql)) {
        echo "succesfully inserted";
    }
    else {
        echo "Error inserting";
    }


    $con->close();
    ?>
    <br><br>
    <form action="contact.html">
        <button type="submit" id="btn10" name="btn10" value="Go back to contact us page">Go back to contact us page</button>
    </form>
        </div>
    </div>

    <div>
        <footer class="footer">
            <div class=" cont">
                <div class="col">
                    <div class="card">
                        <h2>About Us</h2>
                        <p>We're excited to offer some quality apartments.
                            The Niwahana Apartments(Pvt) Ltd is one of the leading companies in the real estate
                            sector in Sri Lanka.
                            We have over 20 years experience in real estate.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <h2>Find Us </h2>
                        <p> Facebook: Niwahana Apartments<br>
                            Instagram : niwahanalive<br>
                            niwahanalive@niwanahaapartment.com<br>

                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <h2>location</h2>
                        <p> Niwahana Aprtment HQ,<br>Colombo Rd,<br>Kandy.<br></p>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <h2>Hotline</h2>
                        <p> +94112345678<br>+94115566782<br>+94712345568<br></p>
                    </div>
                </div>

            </div>

        </footer>
    </div>


</body>