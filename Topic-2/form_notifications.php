<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Portal</title>
    <link rel="stylesheet" href="style11.css">
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
        <header>
            <h1>Welcome, Dr. John Doe</h1>
            <nav>
                <ul>
                    <li><a href="#patients">View Patients</a></li>
                    <li><a href="#send-notification">Send Notification</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>

        <section id="patients">
            <h2>Patients List</h2>
            <div class="patient-list">
                <!-- Patient data will be dynamically populated here -->
            </div>
        </section>

        <section id="send-notification">
            <h2>Send Notification</h2>
            <form id="notification-form">
                <div class="form-group">
                    <label for="notification-message">Notification Message:</label>
                    <textarea id="notification-message" name="message" rows="4" required></textarea>
                </div>
                <div class="form-group">
    <label>Select Patients:</label><br>
    <div class="checkbox-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="patient1" name="patients[]" value="Patient A">
            <label class="form-check-label" for="patient1">Patient A</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="patient2" name="patients[]" value="Patient B">
            <label class="form-check-label" for="patient2">Patient B</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="patient3" name="patients[]" value="Patient C">
            <label class="form-check-label" for="patient3">Patient C</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="patient4" name="patients[]" value="Patient D">
            <label class="form-check-label" for="patient4">Patient D</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="patient5" name="patients[]" value="Patient E">
            <label class="form-check-label" for="patient5">Patient E</label>
        </div>
    </div>
</div>


                <button type="submit">Send Notification</button>
            </form>
        </section>
    </div>

    <script src="script.js"></script>
</body>

</html>
