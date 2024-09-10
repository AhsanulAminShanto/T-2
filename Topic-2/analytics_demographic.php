<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demographic Data Analytics</title>
    <link rel="stylesheet" href="style6.css">
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
            <h1>Demographic Data Analytics</h1>
        </header>
        <section class="filters">
            <h2>Filters</h2>
            <form id="filterForm">
                <div class="filter-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="all">All</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="ageRange">Age Range:</label>
                    <input type="text" id="ageRange" name="ageRange" placeholder="e.g., 20-40">
                </div>
                <div class="filter-group">
                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location" placeholder="City, Country">
                </div>
                <div class="filter-group">
                    <button type="submit">Apply Filters</button>
                </div>
            </form>
        </section>
        <section class="analytics-results">
            <h2>Analytics Results</h2>
            <div class="analytics-table">
                <table>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Location</th>
                            <th>Occupation</th>
                            <th>Education Level</th>
                            <th>Income Level</th>
                        </tr>
                    </thead>
                    <tbody id="resultsBody">
                        <!-- Data will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <script src="script.js"></script>
</body>
</html>
