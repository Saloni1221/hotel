<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP, WAMP, MAMP
$password = ""; // Default password is empty for XAMPP, WAMP, MAMP
$dbname = "hotel";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>