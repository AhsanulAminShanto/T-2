<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "health_monitoring";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";

    // Prepare and execute SQL query to insert data into table
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
    <link rel="stylesheet" href="style5.css">
    <style>
        /* Custom styles */
        nav {
            background-color: #333;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .logo-container {
            text-align: center;
            margin: 20px 0;
        }

        .content {
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <a href="index.php">Home </a>
        <a href="https://www.yourarticlelibrary.com/countries/bangladesh/top-12-hospitals-in-bangladesh-with-pictures/34412">Top Rated Hospital</a>
        <a href="https://heliumdoc.com/bd/doctors/internal+medicine-diabetes-dhaka/">Top Rated Doctor</a>
        <a href="contact.php">Contact Us</a>
    </nav>

    <!-- Contact Form -->
    <div class="contact-form-tittle">
        <h2>Contact Us </h2>
    </div>
    <div class="contact-form">
        <form id="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- Display Input (if needed) -->
    <div class="display-input" id="displayInput">
        <!-- Input from JS -->
    </div>

    <!-- Thank you message -->
    <p><center>Thank you for staying with us</center></p>

    <!-- Footer -->
    <footer id="footer_text">
        <p>&copy; @2024 All Rights Reserved.</p>
    </footer>

    <!-- Include JavaScript -->
    <script src="script.js"></script>
</body>
</html>

