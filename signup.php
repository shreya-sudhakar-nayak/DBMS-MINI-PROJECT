<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codes</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./signup.css" />
  </head>
  <body>
    <div class="container">
      <form method="post" action="signup.php">
        <h1>Signup</h1>

        <div class="input-box">
          <input type="text" placeholder="Your Name"  name="username" required />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
		<div class="input-box">
          <input type="text" placeholder="User Id"  name="userid" required />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password"  name="password" required />
          <!-- <i class="bx bxs-lock-alt"></i> -->
        </div>

        <div class="input-box">
          <input type="text" placeholder="Phone Number" name="phone" required />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
	<div class="input-box">
          <input type="email" placeholder="Email Id" name="email" required />
          <!-- <i class="bx bxs-user"></i> -->
        </div>

        <button type="submit" class="btn">Signup</button>
      </form>
    </div>
  </body>
</html>


<?php
// Assuming you have a MySQL connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "housekeeping";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $userid = mysqli_real_escape_string($conn, $_POST['userid']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Query to insert user data into the user table
    $sql = "INSERT INTO user (NAME, UID, PASS, PH_NO, EMAIL) VALUES ('$username', '$userid', '$password', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
        // Successful insertion
        echo "<script>alert('Signup Successful!!');</script>";
		header("Location:login.php");
    } else {
        // Error in insertion
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

