<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Chart Example</title>
    <!-- Add Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        canvas {
            max-width: 600px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <canvas id="pieChart"></canvas>

    <script>
        // Fetch data from PHP
        fetch('piedata.php')
            .then(response => response.json())
            .then(data => {
                var ctx = document.getElementById('pieChart').getContext('2d');

                // Create a pie chart with dynamic data
                var myPieChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ["Category A", "Category B", "Category C"],
                        datasets: [{
                            data: data,
                            backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"]
                        }]
                    }
                });
            });
    </script>
</body>
</html>
