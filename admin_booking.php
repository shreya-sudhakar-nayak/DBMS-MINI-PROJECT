

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "housekeeping";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT NAME, MESSAGE, EMAIL, PH_NO FROM user";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error fetching data: " . mysqli_error($conn));
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Stellar Shine</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	
	<style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            text-align: center;
        }

        table, th, td {
            border: 3px solid #cceeff;
        }

        th, td {
            padding: 10px;
			border:none;
        }

        
        tr:nth-child(even) {
            background-color:#cceeff;
        }
    </style>
</head>

<body>
    <!-- ################# Header Starts Here#######################--->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li><i class="fas fa-envelope-square"></i> stellarshine.com</li>
                            <li><i class="fas fa-phone-square"></i> 9876543212</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                      
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 nav-img">
                         <div style="float:left; padding:10px; color:white; background-color:#32a8ed ;font-weight:bold"  onclick="goToNextPage2()">Sign out</div>
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="admin_home.php">Home</a></li>
                            <li><a href="about_admin.html">About Us</a></li>
                            <li><a href="admin_services.html">Services</a></li>
                            <li><a href="admin_message.php">Messages</a></li>
                            <li><a href="admin_bookings.php">Bookings</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>



<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Stellar Shine Cleaning Co.</h2>
            <ul>
                <li> <a href="admin_home.html"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i>Home</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Page  Title End ####### -->

<table>
        <tr>
            <th>BOOKING ID</th>
            <th>USER ID</th>
            <th>STATUS</th>
            <th>SERVICE ID</th>
            <th>DATE</th>
            <th>ADDRESS</th>
        </tr>

        <?php
        $row_number = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $row_number++;
            echo "<tr class='" . ($row_number % 2 == 0 ? "even" : "odd") . "'>";
            echo "<td>{$row['BID']}</td>";
            echo "<td>{$row['UID']}</td>";
            echo "<td>{$row['BSTATUS']}</td>";
            echo "<td>{$row['SID']}</td>";
            echo "<td>{$row['DATE']}</td>";
            echo "<td>{$row['ADDRESS']}</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    mysqli_close($conn);
    ?>

<div style="margin-top:100px"></div>

    
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Revolutionizing the cleaning industry, Stellar Shine takes the lead as a premier provider of cleaning services, combining strategic insights, technical expertise, and extensive industry experience. Committed to cost-effective solutions, process optimization, and swift service delivery, we leverage cutting-edge cleaning technologies.
                    </p>
                    <p>Our approach is strengthened by robust quality processes and a wealth of global management experience, charting the course for unparalleled innovation and excellence in cleanliness.... </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="about_admin.html">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="Messages" href="admin_message.html">Messages</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="services" href="services.html">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="bookings" href="admin_bookings.html">Bookings</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                       Stellar Shine cleaning Co.<br>
						Moodbidri (D.K District)<br>
						Karnataka, IND<br>
						Phone: +91 9876543212<br>
						 
                        Email: <a href="info@stellarshine.com" class="">info@stellarshine.com</a><br>
                        Web: <a href="www.stellarshine.com" class="">www.stellarshine.com</a>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="admin_home.html">DBMS PROJECT</a>
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>

