<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Demographic Form</title>
    <link rel="stylesheet" href="style.css">
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
        <h1>Patient Demographic Form</h1>
        <form action="submit_demographic.php" method="post">
            <!-- Basic Personal Information -->
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required><br>
            
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br>
            
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br>
            
            <!-- Contact Information -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required><br>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br>
            
            <!-- Socio-Economic Information -->
            <label for="marital_status">Marital Status:</label>
            <select id="marital_status" name="marital_status" required>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="widowed">Widowed</option>
            </select><br>
            
            <label for="occupation">Occupation:</label>
            <input type="text" id="occupation" name="occupation" required><br>
            
            <label for="education_level">Education Level:</label>
            <select id="education_level" name="education_level" required>
                <option value="high_school">High School</option>
                <option value="bachelor">Bachelor's Degree</option>
                <option value="master">Master's Degree</option>
                <option value="doctorate">Doctorate</option>
                <option value="other">Other</option>
            </select><br>
            
            <label for="income_level">Income Level:</label>
            <input type="text" id="income_level" name="income_level" required><br>
            
            <!-- Health and Lifestyle Information -->
            <label for="primary_care_physician">Primary Care Physician:</label>
            <input type="text" id="primary_care_physician" name="primary_care_physician" required><br>
            
            <label for="emergency_contact">Emergency Contact:</label>
            <input type="text" id="emergency_contact" name="emergency_contact" required><br>
            
            <label for="health_insurance">Health Insurance:</label>
            <input type="text" id="health_insurance" name="health_insurance" required><br>
            
            <label for="smoking_status">Smoking Status:</label>
            <select id="smoking_status" name="smoking_status" required>
                <option value="current">Current Smoker</option>
                <option value="former">Former Smoker</option>
                <option value="never">Never Smoked</option>
            </select><br>
            
            <label for="alcohol_consumption">Alcohol Consumption:</label>
            <select id="alcohol_consumption" name="alcohol_consumption" required>
                <option value="none">None</option>
                <option value="occasional">Occasional</option>
                <option value="regular">Regular</option>
            </select><br>
            
            <label for="physical_activity">Physical Activity:</label>
            <select id="physical_activity" name="physical_activity" required>
                <option value="none">None</option>
                <option value="light">Light</option>
                <option value="moderate">Moderate</option>
                <option value="heavy">Heavy</option>
            </select><br>
            
            <label for="dietary_habits">Dietary Habits:</label>
            <input type="text" id="dietary_habits" name="dietary_habits" required><br>
            
            <!-- Medical History -->
            <label for="diagnosis_date">Diagnosis Date:</label>
            <input type="date" id="diagnosis_date" name="diagnosis_date" required><br>
            
            <label for="type_of_diabetes">Type of Diabetes:</label>
            <select id="type_of_diabetes" name="type_of_diabetes" required>
                <option value="type1">Type 1</option>
                <option value="type2">Type 2</option>
                <option value="gestational">Gestational</option>
                <option value="other">Other</option>
            </select><br>
            
            <label for="comorbidities">Comorbidities:</label>
            <input type="text" id="comorbidities" name="comorbidities" required><br>
            
            <label for="medications">Medications:</label>
            <input type="text" id="medications" name="medications" required><br>
            
            <label for="allergies">Allergies:</label>
            <input type="text" id="allergies" name="allergies" required><br>
            
            <label for="previous_hospitalizations">Previous Hospitalizations:</label>
            <input type="text" id="previous_hospitalizations" name="previous_hospitalizations" required><br>
            
            <label for="family_history">Family History:</label>
            <input type="text" id="family_history" name="family_history" required><br>
            
            <!-- Health Monitoring Data -->
            <label for="blood_glucose_levels">Blood Glucose Levels:</label>
            <input type="text" id="blood_glucose_levels" name="blood_glucose_levels" required><br>
            
            <label for="hba1c_levels">HbA1c Levels:</label>
            <input type="text" id="hba1c_levels" name="hba1c_levels" required><br>
            
            <label for="blood_pressure">Blood Pressure:</label>
            <input type="text" id="blood_pressure" name="blood_pressure" required><br>
            
            <label for="weight">Weight:</label>
            <input type="text" id="weight" name="weight" required><br>
            
            <label for="height">Height:</label>
            <input type="text" id="height" name="height" required><br>
            
            <label for="bmi">BMI:</label>
            <input type="text" id="bmi" name="bmi" required><br>
            
            <label for="cholesterol_levels">Cholesterol Levels:</label>
            <input type="text" id="cholesterol_levels" name="cholesterol_levels" required><br>
            
            <!-- Psychological and Social Data -->
            <label for="mental_health_status">Mental Health Status:</label>
            <input type="text" id="mental_health_status" name="mental_health_status" required><br>
            
            <label for="social_support">Social Support:</label>
            <input type="text" id="social_support" name="social_support" required><br>
            
            <!-- Risk Assessment Data -->
            <label for="risk_factors">Risk Factors:</label>
            <input type="text" id="risk_factors" name="risk_factors" required><br>
            
            <label for="side_effects_of_medication">Side Effects of Medication:</label>
            <input type="text" id="side_effects_of_medication" name="side_effects_of_medication" required><br>
            
            <!-- Consent and Preferences -->
            <label for="informed_consent">Informed Consent:</label>
            <input type="checkbox" id="informed_consent" name="informed_consent" required>
            <label for="informed_consent">I agree to the collection and use of my data.</label><br>
            
            <label for="communication_preferences">Communication Preferences:</label>
            <select id="communication_preferences" name="communication_preferences" required>
                <option value="email">Email</option>
                <option value="phone">Phone</option>
                <option value="text">Text</option>
            </select><br>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>


