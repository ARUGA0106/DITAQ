Air Pollution Monitoring System (DITAQ).

The Air Pollution Monitoring System is designed to continuously gather, store, and present real-time data on air quality parameters. This includes particulate matter (NO2, SO2) and CO2 levels. The system aims to facilitate informed decision-making regarding environmental health and safety by providing accessible and actionable air quality information.

Project Introduction
This project is a part of the module project "Wireless Sensor Network" and represents the system software part of a larger system called DIT Air Quality Monitoring CenterDITAQ. The air quality monitoring system focuses on the collection, storage, and visualization of air quality data.

System Architecture
The system is implemented as a Client-Server architecture:

Client
ESP32 Microcontroller: Equipped with sensors to measure key air quality metrics.
Server
Apache Web Server: Running within the XAMPP environment, providing the foundational infrastructure for hosting and serving the web-based application.
Backend: Developed using PHP, responsible for processing incoming data from sensors, storing it in a MySQL database, and handling dynamic content generation.
Frontend: Built using JavaScript, Html and Css(Bootstrap framework), which enables interactive user interfaces for data visualization and user interaction.
Leaflet Map API: Used to locate the sensor on a map for better spatial understanding of air quality data.
Features
Real-time monitoring of air quality parameters.
Data storage in MySQL database for historical analysis.
Interactive web interface for data visualization.
Supports particulate matter (NO2, SO2) and CO2 level measurements.
Sensor location mapping using Leaflet API.
Installation
Prerequisites
ESP32 microcontroller with sensors
XAMPP (Apache, MySQL, PHP)
Basic knowledge of PHP, JavaScript, and MySQL
Steps
Setup XAMPP:

Download and install XAMPP from here.
Start Apache and MySQL services.
Database Configuration:

Create a database named air_quality in MySQL.
Use the following SQL script to create the necessary tables:
CREATE TABLE `sensor_data` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `no2_level` FLOAT,
  `so2_level` FLOAT,
  `co2_level` FLOAT,
  `latitude` FLOAT,
  `longitude` FLOAT,
  PRIMARY KEY (`id`)
);
Backend Setup:

Clone this repository to the htdocs directory in your XAMPP installation.
Configure the database connection in config.php:
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "air_quality";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
ESP32 Configuration:

Write the code for ESP32 to read data from sensors and send it to the server via HTTP POST requests.
Frontend Setup:

Ensure all required JavaScript libraries are included in your HTML files.
Integrate Leaflet map API for displaying sensor location.
Usage
Start the XAMPP server.
Navigate to http://localhost/your-repository-folder in your web browser.
View real-time air quality data and sensor location on the web interface.
Contributing
Contributions are welcome! Please fork this repository and submit pull requests.

License
This project is licensed under the MIT License. See the LICENSE file for details.

Author
Godwin S. Aruga

BEng Electronics and Telecommunication Engineering, DIT Tanzania
Cybershield Coders Team Member
