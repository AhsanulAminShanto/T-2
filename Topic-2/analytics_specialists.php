<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Specialist Analytics</title>
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
        <a class="navbar-brand" href="#">Hospital Specialist Analytics</a>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <!-- Hospital Selection -->
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Select Hospital
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="hospital-select">Select Hospital:</label>
                                <select class="form-control" id="hospital-select" required>
                                    <option value="1">Hospital A</option>
                                    <option value="2">Hospital B</option>
                                    <option value="3">Hospital C</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary" id="show-analytics-btn">Show Analytics</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Specialist Analytics -->
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Specialists Distribution
                    </div>
                    <div class="card-body">
                        <canvas id="specialistDistributionChart" width="400" height="300"></canvas>
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
    <script src="analytics.js"></script>
</body>
</html>
