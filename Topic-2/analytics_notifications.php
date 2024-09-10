<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications Analytics</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style12.css">
</head>
<body>
<nav>
        <ul>
            <li><a href="#">Patient Demographics</a>
                <ul>
                    <li><a href="form_demographic.php">Form</a></li>
                    <li><a href="analytics_demographic.php">Analytics</a></li>
                </ul>
            </li>
            <li><a href="#">Patient Diagnosis</a>
                <ul>
                    <li><a href="form_diagnosis.php">Form</a></li>
                    <li><a href="analytics_diagnosis.php">Analytics</a></li>
                </ul>
            </li>
            <li><a href="#">Risk Analysis</a>
                <ul>
                    <li><a href="form_risk_analysis.php">Form</a></li>
                    <li><a href="analytics_risk_analysis.php">Analytics</a></li>
                </ul>
            </li>
            <li><a href="#">Notifications</a>
                <ul>
                    <li><a href="form_notifications.php">Form</a></li>
                    <li><a href="analytics_notifications.php">Analytics</a></li>
                </ul>
            </li>
            <li><a href="#">Specialists</a>
                <ul>
                    <li><a href="form_specialists.php">Form</a></li>
                    <li><a href="analytics_specialists.php">Analytics</a></li>
                </ul>
            </li>
            <li><a href="#">Facilities</a>
                <ul>
                    <li><a href="form_facilities.php">Form</a></li>
                    <li><a href="analytics_facilities.php">Analytics</a></li>
                </ul>
            </li>
            <li><a href="logout.php">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Notifications Overview (Pie Chart)</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="notificationsPieChart" width="400" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Notifications Bar Chart</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="notificationsBarChart" width="400" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Live Response Graph</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="liveResponseGraph" width="800" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dummy data for demonstration
            const notificationsData = {
                labels: ['Opened', 'Clicked', 'Dismissed'],
                datasets: [{
                    label: 'Notifications Overview',
                    data: [25, 10, 5],
                    backgroundColor: ['#36a2eb', '#ff6384', '#ffcd56'],
                    borderWidth: 1
                }]
            };

            const barChartData = {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                datasets: [{
                    label: 'Notifications Count',
                    data: [30, 25, 40, 20, 35],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            };

            const liveResponseData = {
                labels: [],
                datasets: [{
                    label: 'Live Responses',
                    borderColor: '#3e95cd',
                    fill: false,
                    data: []
                }]
            };

            const liveResponseOptions = {
                responsive: true,
                title: {
                    display: true,
                    text: 'Live Response Graph'
                },
                scales: {
                    xAxes: [{
                        type: 'realtime',
                        realtime: {
                            duration: 20000, // Data is displayed for the last 20 seconds
                            refresh: 1000, // Refresh every second
                            delay: 2000, // Delay of 2 seconds
                            onRefresh: function(chart) {
                                // Update the live data
                                liveResponseData.labels.push(new Date());
                                liveResponseData.datasets[0].data.push(Math.random() * 100); // Random data for demonstration
                            }
                        }
                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Response Rate (%)'
                        },
                        ticks: {
                            beginAtZero: true,
                            suggestedMax: 100
                        }
                    }]
                }
            };

            // Notifications Pie Chart
            const notificationsPieChart = new Chart(document.getElementById('notificationsPieChart'), {
                type: 'pie',
                data: notificationsData,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Notifications Overview'
                    }
                }
            });

            // Notifications Bar Chart
            const notificationsBarChart = new Chart(document.getElementById('notificationsBarChart'), {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Notifications Bar Chart'
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            // Live Response Graph
            const liveResponseGraph = new Chart(document.getElementById('liveResponseGraph'), {
                type: 'line',
                data: liveResponseData,
                options: liveResponseOptions
            });
        });
    </script>
</body>
</html>

