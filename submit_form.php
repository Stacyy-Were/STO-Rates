<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mailchimp";  // Use the actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $country = htmlspecialchars($_POST['country']);
    $city = htmlspecialchars($_POST['city']);
    $agency_name = htmlspecialchars($_POST['agency_name']);
    $properties_to_be_booked = htmlspecialchars($_POST['properties_to_be_booked']);
    $agent_type = htmlspecialchars($_POST['agent_type']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $subscribe = isset($_POST['subscribe']) ? 'Yes' : 'No';  // If the checkbox is checked, it will be 'Yes', otherwise 'No'

    // Prepare an SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, country, city, agency_name, properties_to_be_booked, agent_type, telephone, subscribe) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $first_name, $last_name, $email, $country, $city, $agency_name, $properties_to_be_booked, $agent_type, $telephone, $subscribe);

    // Execute the statement
    if ($stmt->execute()) {
        echo "You have been added!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
