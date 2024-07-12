<?php
$servername = "localhost";
$username = "ESP32";
$password = "esp32io.com";
$dbname = "sensor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
