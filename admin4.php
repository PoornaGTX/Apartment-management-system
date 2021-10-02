<html>

<head>
    <link rel="stylesheet" href="style/headerFooter.css" />
    <?php
    echo "<link rel='stylesheet' href='style/adminPages.css'>";
    ?>
    <title>paymentAdmin</title>
</head>

<body>

    <div class="menubar">


        <div class="leftmenu">
            <h1 class="text">NIWAHANA APARTMENTS</h1>
        </div>
        <ul>
           <li style="font-size:20px"> <a href="adminhome4.html"> Home </a> </li>
			<li style="font-size:20px"> <a href="viewapartments.html"> Apartments </a> </li>
			<li style="font-size:20px"> <a href="admin4.php">Admin </a> </li>

        </ul>

    </div>

    <div class="tableContainer">

        <?php
        include "config.php";
        ?>

        <!-- creating table -->
        <center>
            <table class="tableOpacity" border="1" width="50%">
                <tr>
                    <th>Payment ID</th>
                    <th>Apartment type</th>
                    <th>amount</th>
                    <th>Apartment Number</th>
                    <th>Edit</th>
                    <th>Update</th>
                </tr>




                <?php
                readData();

                function readData()
                {
                    global $con;
                    $sql = "SELECT * FROM payment";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $pID = $row["paymentid"];
                            $aType = $row["apartment"];
                            $amount = $row["amount"];
                            $aNo = $row["apartmenttype"];

                            echo "<tr>
                        <td>" . $pID . "</td><td>" .
                                $aType . "</td><td>" .
                                $amount . "</td><td>" .
                                $aNo . "</td><td>" .
                                "<button type='submit'><a href='editRecord.php?paymentid=$pID'>EDIT RECORD</a> </button> </td><td>" .
                                "<button type='submit'><a href='delete.php?paymentid=$pID'>DELETE RECORD</a> </button> </td>";
                        }
                    } else {
                        echo "no result";
                    }

                    $con->close();
                }


                ?>
            </table>
        </center>
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