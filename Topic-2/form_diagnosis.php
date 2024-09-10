<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Diagnosis Form</title>
    <link rel="stylesheet" href="style7.css">
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
        <h1>Patient Diagnosis Form</h1>
        <form action="submit_diagnosis.php" method="post">
            <label for="patient_id">Patient ID:</label>
            <input type="text" id="patient_id" name="patient_id" required><br>
            
            <label for="diagnosis">Diagnosis:</label>
            <input type="text" id="diagnosis" name="diagnosis" required><br>
            
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br>
            
            <label for="diagnosis_report">Diagnosis Report:</label>
            <textarea id="diagnosis_report" name="diagnosis_report" rows="6" required></textarea><br>
            
            <label for="treatment_plan">Treatment Plan:</label>
            <textarea id="treatment_plan" name="treatment_plan" rows="4" required></textarea><br>
            
            <label for="medications">Medications Prescribed:</label>
            <input type="text" id="medications" name="medications" required><br>
            
            <label for="follow_up_date">Follow-up Date:</label>
            <input type="date" id="follow_up_date" name="follow_up_date" required><br>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

