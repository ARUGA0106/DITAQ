<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Data result for current observations</title>
    <style>
        body {
            background-color: #7FFF00; /* Green body background */
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: purple; /* Purple header background */
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #4CAF50; /* Green navbar background */
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .container {
            width: 100%;
            margin: auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav>
    <a href="index.php">Home</a>
    <a href="report.php">Data</a>
    <a href="map.php">Map</a>
</nav>

<!-- Purple Header -->
<header>
    <h1>Data result for current observations</h1>
</header>

<!-- Display Air Quality Data Section -->
<section id="air-quality-data" class="section">
    <div class="container">
        <table>
            <tr>
                <th>Event ID</th>
                <th>Timestamp(GMT+ 3)</th>
                <th>Concentration (mg/mcube/1 Hrs)</th>
            </tr>
            <?php
            include 'db.php';  // Include your database connection logic
            
            // SQL query to select data from your table
            $sql = "SELECT * FROM sensor_reading ORDER BY timestamp DESC LIMIT 25"; // Example: latest 10 records

            // Execute the query
            $result = $conn->query($sql);

            // Check if there are rows returned
            if ($result->num_rows > 0) {
                $count = 1;
                // Loop through each row of data
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $count++ . "</td>";
                    echo "<td>" . $row["timestamp"] . "</td>";
                    echo "<td>" . $row["concentration"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data available</td></tr>";
            }
            ?>
        </table>
    </div>
</section><!-- End Air Quality Data Section -->

<!-- Include your footer section -->
<footer id="footer" class="footer">
    <!-- Your footer content -->
</footer>

<!-- Include your JS files -->
</body>
</html>
