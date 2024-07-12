<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Data Page</title>
    <style>
        body {
            background-color: #000000; /* Black body background */
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #ffffff; /* White text color */
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
        .chart-container {
            width: 80%;
            margin: auto;
            text-align: center;
        }
        canvas {
            margin-top: 20px;
            border: 1px solid white; /* White border */
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

<!-- Display Air Quality Data Section -->
<section id="air-quality-data" class="section">
    <div class="container">
        <?php
        include 'db.php';  // Include your database connection logic
        
        // SQL query to select data from your table
        $sql = "SELECT * FROM sensor_reading ORDER BY timestamp DESC LIMIT 25"; // Example: latest 25 records
        
        // Execute the query
        $result = $conn->query($sql);

        // Check if there are rows returned
        if ($result->num_rows > 0) {
            $labels = [];
            $data = [];

            // Loop through each row of data
            while($row = $result->fetch_assoc()) {
                $labels[] = $row["timestamp"];
                $data[] = $row["concentration"];
            }

            // Convert data to JSON for JavaScript
            $labels_json = json_encode($labels);
            $data_json = json_encode($data);
        } else {
            echo "<p>No data available</p>";
        }
        ?>

        <!-- Line Chart -->
        <div class="chart-container">
            <canvas id="myLineChart"></canvas>
        </div>
    </div>
</section><!-- End Air Quality Data Section -->

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // JavaScript to render Line Chart using Chart.js
    var ctx = document.getElementById('myLineChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo $labels_json; ?>,
            datasets: [{
                label: 'Air Quality Concentration',
                data: <?php echo $data_json; ?>,
                fill: false,
                borderColor: 'white', // Line color
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: 'white' // Y-axis label color
                    }
                },
                x: {
                    ticks: {
                        color: 'white' // X-axis label color
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: 'white' // Legend label color
                    }
                }
            }
        }
    });
</script>

<!-- Include your footer section -->
<footer id="footer" class="footer">
    <!-- Your footer content -->
</footer>

</body>
</html>
