
<?php
//This script extract sensor reading from the https response of the esp32 module.

if(isset($_GET["concentration"])) {
   $concentration = $_GET["concentration"]; // get gas concentration value from HTTP GET

   $servername = "localhost";
   $username = "ESP32";
   $password = "esp32io.com";
   $database_name = "sensor";

   // Create MySQL connection fom PHP to MySQL server
   $connection = new mysqli($servername, $username, $password, $database_name);
   // Check connection
   if ($connection->connect_error) {
      die("MySQL connection failed: " . $connection->connect_error);
   }

   $sql = "INSERT INTO sensor_reading (concentration) VALUES ($concentration)";

   if ($connection->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . " => " . $connection->error;
   }

   $connection->close();
} else {
   echo "Gas concentration is not set in the HTTP request";
}
?>


