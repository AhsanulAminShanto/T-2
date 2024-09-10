<?php
include 'db_connect.php';

// Function to generate a unique patient ID
function generatePatientID($conn) {
    $unique = false;
    $patientID = '';
    
    while (!$unique) {
        $patientID = 'PID' . str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $sql = "SELECT * FROM users WHERE patient_id='$patientID'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) == 0) {
            $unique = true;
        }
    }
    return $patientID;
}

// Sign up logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientID = generatePatientID($conn);
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $password = $_POST["password"];
    $repeatPassword = $_POST["repeat_password"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contact_number"];
    $dob = $_POST["dob"];
    $sex = $_POST["sex"];
    $age = $_POST["age"];
    $rememberMe = isset($_POST["remember_me"]) ? 1 : 0; // 1 if checked, 0 if not

    // Check if passwords match
    if ($password !== $repeatPassword) {
        echo "Passwords do not match!";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute SQL query to insert user data
        $sql = "INSERT INTO users (patient_id, first_name, last_name, password, address, email, contact_number, dob, sex, age, remember_me) VALUES ('$patientID', '$firstName', '$lastName', '$hashedPassword', '$address', '$email', '$contactNumber', '$dob', '$sex', '$age', '$rememberMe')";
        if (mysqli_query($conn, $sql)) {
            echo "Sign up successful!";
            // Redirect to login page
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="form-container">
    <h2>Sign Up</h2>
    <form method="post" action="signup.php">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="repeat_password">Repeat Password:</label>
        <input type="password" id="repeat_password" name="repeat_password" required><br><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number" required><br><br>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        
        <label for="sex">Sex:</label>
        <select id="sex" name="sex" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        
        <input type="checkbox" id="remember_me" name="remember_me">
        <label for="remember_me">Remember Me</label><br><br>
        
        <input type="submit" value="Sign Up">
        <div class="login-button">
            <a href="login.php">Login</a>
        </div>
    </form>
    </div>
</body>
</html>
