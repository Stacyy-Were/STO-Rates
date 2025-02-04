<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mailchimp";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//http://localhost/STO-Rates/serverconnect.php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

