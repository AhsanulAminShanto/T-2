<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Facilities Suggestion</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Hospital Facilities Suggestion</a>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <!-- Facilities Suggestion Form -->
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Suggest New Facility
                    </div>
                    <div class="card-body">
                        <form action="process_facilities.php" method="POST">
                            <div class="form-group">
                                <label for="facility-name">Facility Name:</label>
                                <input type="text" class="form-control" id="facility-name" name="facility_name" required>
                            </div>
                            <div class="form-group">
                                <label for="facility-description">Description:</label>
                                <textarea class="form-control" id="facility-description" name="facility_description" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

