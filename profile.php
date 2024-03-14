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
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
<style>
  .box {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
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
  
       <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row">
                   <div class="container">
                       <div class="row">
                           <h2>Our Profile</h2>
                           <ul>
                               <li> <a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                               <li><i class="fas fa-angle-double-right"></i> Our Profile</li>
                           </ul>
                       </div>
                   </div>
               </div>
       
    <!-- ######## Page  Title End ####### -->
       
  <?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
  die("User not logged in");
}

$uid = $_SESSION['username'];

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "housekeeping";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from user table for the logged-in user
$user_query = "SELECT NAME, UID, PH_NO, EMAIL FROM user WHERE UID = '$uid'";
$user_result = mysqli_query($conn, $user_query);

// Check for errors
if (!$user_result) {
  die("User query failed: " . mysqli_error($conn));
}

// Display user details
if (mysqli_num_rows($user_result) > 0) {
  while ($user_row = mysqli_fetch_assoc($user_result)) {
    echo '<div class="box">';
    echo "<h3>User Details</h3>";
    echo "<p>Name: " . $user_row['NAME'] . "</p>";
    echo "<p>UID: " . $user_row['UID'] . "</p>";
    echo "<p>Phone Number: " . $user_row['PH_NO'] . "</p>";
    echo "<p>Email: " . $user_row['EMAIL'] . "</p>";
    echo '</div>';
  }
} else {
  echo "No user data found";
}

// Fetch data from booking table for the logged-in user
$booking_query = "SELECT BID, UID, BSTATUS, SID, DATE, ADDRESS FROM booking WHERE UID ='$uid'";
$booking_result = mysqli_query($conn, $booking_query);

// Check for errors
if (!$booking_result) {
  die("Booking query failed: " . mysqli_error($conn));
}

// Display booking details
if (mysqli_num_rows($booking_result) > 0) {
  while ($booking_row = mysqli_fetch_assoc($booking_result)) {
    echo '<div class="box">';
    echo "<h3>Booking Details</h3>";
    echo "<p>Booking ID: " . $booking_row['BID'] . "</p>";
    echo "<p>User ID: " . $booking_row['UID'] . "</p>";
    echo "<p>Booking Status: " . $booking_row['BSTATUS'] . "</p>";
    echo "<p>Service ID: " . $booking_row['SID'] . "</p>";
    echo "<p>Date: " . $booking_row['DATE'] . "</p>";
    echo "<p>Address: " . $booking_row['ADDRESS'] . "</p>";
    echo '</div>';
  }
} else {
  echo "No booking data found";
}

// Close connection
mysqli_close($conn);
?>
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
        <body>


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