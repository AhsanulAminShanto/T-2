<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Hospitals by Facility Type - Static</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Search Hospitals by Facility Type - Static</a>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <!-- Static Data Display -->
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Hospital Data
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Hospitals offering various facility types</h5>
                        <div id="hospital-list">
                            <!-- Static hospital data goes here -->
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Hospital A</strong> - City A
                                    <br>
                                    Facilities: Cardiology, Neurology, Orthopedics
                                </li>
                                <li class="list-group-item">
                                    <strong>Hospital B</strong> - City B
                                    <br>
                                    Facilities: Neurology, Pediatrics
                                </li>
                                <li class="list-group-item">
                                    <strong>Hospital C</strong> - City C
                                    <br>
                                    Facilities: Cardiology, Oncology
                                </li>
                                <!-- Add more hospitals as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Pie Chart -->
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Facility Type Distribution
                    </div>
                    <div class="card-body">
                        <canvas id="facilityPieChart" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Chart.js Scripts -->
    <script>
        // Sample hospital data
        var hospitals = [
            {
                name: 'Hospital A',
                location: 'City A',
                facilities: ['cardiology', 'neurology', 'orthopedics']
            },
            {
                name: 'Hospital B',
                location: 'City B',
                facilities: ['neurology', 'pediatrics']
            },
            {
                name: 'Hospital C',
                location: 'City C',
                facilities: ['cardiology', 'oncology']
            }
            // Add more hospitals as needed
        ];

        // Initialize Chart.js for pie chart
        var ctx = document.getElementById('facilityPieChart').getContext('2d');
        var facilityTypes = countFacilityTypes(hospitals);
        var facilityPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: Object.keys(facilityTypes),
                datasets: [{
                    label: 'Facility Types',
                    data: Object.values(facilityTypes),
                    backgroundColor: [
                        '#007bff',
                        '#28a745',
                        '#dc3545',
                        '#ffc107',
                        '#17a2b8'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'right'
                },
                title: {
                    display: true,
                    text: 'Facility Type Distribution'
                }
            }
        });

        // Function to count facility types from hospitals data
        function countFacilityTypes(hospitals) {
            var typesCount = {};
            hospitals.forEach(function(hospital) {
                hospital.facilities.forEach(function(facility) {
                    if (typesCount.hasOwnProperty(facility)) {
                        typesCount[facility]++;
                    } else {
                        typesCount[facility] = 1;
                    }
                });
            });
            return typesCount;
        }
    </script>
</body>
</html>
