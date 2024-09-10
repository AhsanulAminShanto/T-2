<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Risk Assessment Form</title>
    <link rel="stylesheet" href="style9.css">
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
        <h1>Risk Assessment Form</h1>
        <form action="submit_risk_assessment.php" method="post">
            <!-- Health and Lifestyle Information -->
            <fieldset>
                <legend>Health and Lifestyle Information</legend>
                <div class="form-group">
                    <label for="primary_physician">Primary Care Physician:</label>
                    <input type="text" id="primary_physician" name="primary_physician" required>
                </div>
                <div class="form-group">
                    <label for="emergency_contact">Emergency Contact:</label>
                    <input type="text" id="emergency_contact" name="emergency_contact" required>
                </div>
                <div class="form-group">
                    <label for="health_insurance_provider">Health Insurance Provider:</label>
                    <input type="text" id="health_insurance_provider" name="health_insurance_provider" required>
                </div>
                <div class="form-group">
                    <label for="smoking_status">Smoking Status:</label>
                    <select id="smoking_status" name="smoking_status" required>
                        <option value="current">Current Smoker</option>
                        <option value="former">Former Smoker</option>
                        <option value="never">Never Smoked</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alcohol_consumption">Alcohol Consumption:</label>
                    <input type="text" id="alcohol_consumption" name="alcohol_consumption" required>
                </div>
                <div class="form-group">
                    <label for="physical_activity">Physical Activity:</label>
                    <input type="text" id="physical_activity" name="physical_activity" required>
                </div>
                <div class="form-group">
                    <label for="dietary_habits">Dietary Habits:</label>
                    <textarea id="dietary_habits" name="dietary_habits" rows="4" required></textarea>
                </div>
            </fieldset>

            <!-- Medical History -->
            <fieldset>
                <legend>Medical History</legend>
                <div class="form-group">
                    <label for="diagnosis_date">Diagnosis Date:</label>
                    <input type="date" id="diagnosis_date" name="diagnosis_date" required>
                </div>
                <div class="form-group">
                    <label for="type_of_diabetes">Type of Diabetes:</label>
                    <input type="text" id="type_of_diabetes" name="type_of_diabetes" required>
                </div>
                <div class="form-group">
                    <label for="comorbidities">Comorbidities:</label>
                    <textarea id="comorbidities" name="comorbidities" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="medications">Medications:</label>
                    <textarea id="medications" name="medications" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="allergies">Allergies:</label>
                    <textarea id="allergies" name="allergies" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="previous_hospitalizations">Previous Hospitalizations:</label>
                    <textarea id="previous_hospitalizations" name="previous_hospitalizations" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="family_history">Family History:</label>
                    <textarea id="family_history" name="family_history" rows="4" required></textarea>
                </div>
            </fieldset>

            <!-- Health Monitoring Data -->
            <fieldset>
                <legend>Health Monitoring Data</legend>
                <div class="form-group">
                    <label for="blood_glucose_levels">Blood Glucose Levels:</label>
                    <textarea id="blood_glucose_levels" name="blood_glucose_levels" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="hba1c_levels">HbA1c Levels:</label>
                    <textarea id="hba1c_levels" name="hba1c_levels" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="blood_pressure">Blood Pressure:</label>
                    <textarea id="blood_pressure" name="blood_pressure" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="weight">Weight:</label>
                    <input type="text" id="weight" name="weight" required>
                </div>
                <div class="form-group">
                    <label for="height">Height:</label>
                    <input type="text" id="height" name="height" required>
                </div>
                <div class="form-group">
                    <label for="bmi">BMI:</label>
                    <input type="text" id="bmi" name="bmi" required>
                </div>
                <div class="form-group">
                    <label for="cholesterol_levels">Cholesterol Levels:</label>
                    <textarea id="cholesterol_levels" name="cholesterol_levels" rows="4" required></textarea>
                </div>
            </fieldset>

            <!-- Psychological and Social Data -->
            <fieldset>
                <legend>Psychological and Social Data</legend>
                <div class="form-group">
                    <label for="mental_health_status">Mental Health Status:</label>
                    <textarea id="mental_health_status" name="mental_health_status" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="social_support">Social Support:</label>
                    <textarea id="social_support" name="social_support" rows="4" required></textarea>
                </div>
            </fieldset>

            <!-- Risk Assessment Data -->
            <fieldset>
                <legend>Risk Assessment Data</legend>
                <div class="form-group">
                    <label for="risk_factors">Risk Factors:</label>
                    <textarea id="risk_factors" name="risk_factors" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="medication_side_effects">Side Effects of Medication:</label>
                    <textarea id="medication_side_effects" name="medication_side_effects" rows="4" required></textarea>
                </div>
            </fieldset>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
