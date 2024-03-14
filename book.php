<!-- book.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Stellar Shine</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<style>
	.sub{
		padding:8px;
		color:white;
		background-color:#32a8ed ;
		font-weight:bold;
		border:none;
		border-radius:10px;
	}
	h1{
		padding:10px;
	}
	form{
		margin:200px;
		padding:100px;
  width: 600px;
  margin-left:400px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

	</style>
</head>
<body>
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
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li> <a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li> <a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 nav-img">
                        <!-- <img src="assets/images/logo.png" alt=""> -->
						 <div style="float:left; padding:10px; color:white; background-color:#32a8ed ;font-weight:bold"  onclick="goToNextPage2()">Signout</div>
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="contact_us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <h1>Book a Service</h1>

    <form action="book.php" method="post" >
	<h1>Book a Service</h1>
        <label for="userid">User ID:</label>
        <input type="text" id="userid" name="userid" required ><br><br>

        <label for="date">Booking Date:</label>
        <input type="date" id="date" name="date" required placeholder="Booking Date"><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
		<label for="sid">Confirm Your Booking:</label>
		<select id="sid" name="sid" required>
        
        <option value="SSDK1">School Cleaning Services</option>
        <option value="SSDK2">Home Cleaning Services</option>
		<option value="SSDK3">Hospital Cleaning Services</option>
        <option value="SSDK4">Pest Control Services</option>
		<option value="SSDK5">Enterprise Cleaning Services</option>
        <option value="SSDK6">Hotel Cleaning Services</option>
        
    </select><br><br>
        <button type="submit" class="sub">Book Now!!</button>
    </form>
	
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
                        <li><a ui-sref="about" href="about_us.html">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact_us" href="contact_us.html">Contact Us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="pricing" href="pricing.html">Pricing</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="profile" href="profile.html">Profile</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="services" href="services.html">Services</a><i class="fa fa-angle-right"></i></li>
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
                <a href="index.html">DBMS PROJECT</a>
                
                <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
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
<!-- process_booking.php -->
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "housekeeping";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST["userid"];
    $date = $_POST["date"];
    $address = $_POST["address"];
	$sid = $_POST["sid"];

    // Generate unique booking ID
    $bid = generateBookingID($conn);

    // Insert data into the booking table
    $sql = "INSERT INTO booking (BID, UID, DATE, ADDRESS, BSTATUS, SID) VALUES ('$bid', '$userid', '$date', '$address', 'Completed', '$sid')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful! Your Booking ID is: $bid";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to generate unique booking ID
function generateBookingID($conn) {
    $bid = "bd" . rand(100, 999);

    // Check if the generated ID already exists in the database
    $checkQuery = "SELECT BID FROM booking WHERE BID = '$bid'";
    $result = $conn->query($checkQuery);

    // If the ID already exists, generate a new one
    while ($result->num_rows > 0) {
        $bid = "bd" . rand(100, 999);
        $result = $conn->query($checkQuery);
    }

    return $bid;
}

$conn->close();
?>
