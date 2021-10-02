<html>

<head>
    <link rel="stylesheet" href="style/headerFooter.css">
    <link rel="stylesheet" href="style/buy.css">
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

            ?><br><br>
            <!-- to send apartment data to the payment table -->
            <?php

            //to check whether the value is set
            if (isset($_POST['apNo'])) {
                $apNum = $_POST['apNo'];
	
                $query = "";

                //getting the values of radio buttons and sending data to the table
                if ($apNum == 'ap1') {
                    $query = "INSERT INTO payment (amount,apartment,apartmenttype) VALUES ('500,000','$apNum','Semi-luxary')";
                } else if ($apNum == 'ap2') {
                    $query = "INSERT INTO payment (amount,apartment,apartmenttype) VALUES ('300,000','$apNum','Semi-luxary')";
                } else if ($apNum == 'ap3') {
                    $query = "INSERT INTO payment (amount,apartment,apartmenttype) VALUES ('550,000','$apNum','Semi-luxary')";
                } else if ($apNum == 'ap4') {
                    $query = "INSERT INTO payment (amount,apartment,apartmenttype) VALUES ('500,000','$apNum','Semi-luxary')";
                } else if ($apNum == 'ap5') {
                    $query = "INSERT INTO payment (amount,apartment,apartmenttype) VALUES ('6,000,000','$apNum','luxary')";
                } else {
                    $query = "INSERT INTO payment (amount,apartment,apartmenttype) VALUES ('4,500,000','$apNum','luxary')";
                }

                if ($con->query($query)) {
                    echo "Successfully sent data <br><br>";
                } else {
                    echo "Error sending data<br>";

					
                }
            }
            ?>
            <div class="message">
                <p><b>Dear <?php echo $_POST["cName"]; ?></p><br><br>
                <p>Your purchase was successful</p><br><br>
                <p> Our agent will contact you within the next 24 hours</b></p><br><br>
            </div>
            <?php

            $cname = $_POST["cName"];
            $cnumber = $_POST["cNumber"];
            $expire = $_POST["expire"];
            $cvc = $_POST["cvc"];


            $sql = "INSERT INTO carddetails(name,cardno,expiredate,ccv)
          VALUES ('$cname','$cnumber','$expire','$cvc')";

            if ($con->query($sql)) {
                echo "Successfully processed purchase <br><br>";
            } else {
                echo "Error processing purchase";
            }
            $con->close();
            ?>
            <form action="buyNow.html">
                <button type="submit" id="btn10" name="btn10" value="Go back to contact us page">Go back to buy now page</button>
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




</html>