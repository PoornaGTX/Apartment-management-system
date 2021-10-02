<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style/headerFooter.css">
    <?php
    echo "<link rel='stylesheet' href='style/adminPages.css'>";
    ?>

</head>

<body>
    <div class="menubar">


        <div class="leftmenu">
            <h1 class="text">NIWAHANA APARTMENTS</h1>
        </div>
        <ul>
            <li style="font-size:20px"> <a href="#"> Home </a> </li>
            <li style="font-size:20px"> <a href="#"> Apartments </a> </li>

        </ul>

    </div>
    <div class="tableContainer">
        <?php

        include 'config.php';

        ?>
        <div class="tableOpacity editForm">
           
            <?php
            $recordID = $_GET['paymentid'];

            $sql = "SELECT * FROM payment where paymentid=$recordID";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    $pID = $row["paymentid"];
                    $aType = $row["apartmenttype"];
                    $amount = $row["amount"];
                    $aNo = $row["apartment"];
                }
            } else {
                echo "no result";
            }


            ?>
            <br><br>

            <!-- displaying already existing values -->


            <form method="POST" action="update.php">

                Payment ID<br><input type="text" name="paymentid" value=<?php echo $pID ?> readonly><br><br>

                Apartment type <br><input type="text" name="text1" value=<?php echo $aType ?> /><br><br>

                Price <br><input type="text" name="text2" value=<?php echo $amount ?> /><br><br>

                Apartment number <br><input type="text" name="text3" value=<?php echo $aNo ?> /><br><br>

                <input type="Submit" value="Update Item" /><br>

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