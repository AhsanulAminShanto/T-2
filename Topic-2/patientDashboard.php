<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Monitoring Dashboard</title>
    <link rel="stylesheet" href="style1.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google Fonts (Roboto) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="info-section">
                    <h2>Patient Demographics</h2>
                    <p>Update your personal information and view demographic analytics.</p>
                    <ul class="list-unstyled">
                        <li><a href="form_demographic.php">Update Demographics</a></li>
                        <li><a href="analytics_demographic.php">View Demographic Analytics</a></li>
                    </ul>
                </div>
            </div>
        

            <div class="col-md-6">
                <div class="info-section">
                    <h2>Patient Diagnosis</h2>
                    <p>Record your diagnosis information and track diagnosis analytics.</p>
                    <ul class="list-unstyled">
                        <li><a href="form_diagnosis.php">Record Diagnosis</a></li>
                        <li><a href="analytics_diagnosis.php">View Diagnosis Analytics</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-section">
                    <h2>Risk Analysis</h2>
                    <p>Assess and analyze your risk factors.</p>
                    <ul class="list-unstyled">
                        <li><a href="form_risk_analysis.php">Conduct Risk Analysis</a></li>
                        <li><a href="analytics_risk_analysis.php">View Risk Analysis Analytics</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-section">
                    <h2>Notifications</h2>
                    <p>Manage and view your health notifications.</p>
                    <ul class="list-unstyled">
                        <li><a href="form_notifications.php">Set Notifications</a></li>
                        <li><a href="analytics_notifications.php">View Notifications Analytics</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-section">
                    <h2>Specialists</h2>
                    <p>Connect with healthcare specialists.</p>
                    <ul class="list-unstyled">
                        <li><a href="form_specialists.php">Find Specialists</a></li>
                        <li><a href="analytics_specialists.php">Specialist Analytics</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-section">
                    <h2>Facilities</h2>
                    <p>Locate and analyze healthcare facilities.</p>
                    <ul class="list-unstyled">
                        <li><a href="form_facilities.php">Search Facilities</a></li>
                        <li><a href="analytics_facilities.php">Facility Analytics</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10">
                <div class="info-section">
                    <h2>Doctor Search & Appointment</h2>
                    <p>Find doctors, view available appointments, and book your appointment.</p>
                    <ul class="list-unstyled">
                        <li><a href="doctor_search.php">Search Doctors</a></li>
                        <li><a href="schedule_appointment.php">Schedule Appointment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


