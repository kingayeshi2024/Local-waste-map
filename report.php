<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Issue - Local Waste Map</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to CSS file -->
</head>
<body>
    <header>
        <h1>Report a Waste Management Issue</h1>
        <p>Help us keep the environment clean by reporting any waste-related issues you encounter.</p>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="map.php">Map & Locations</a>
        <a href="recycling_tips.php">Recycling Tips</a>
        <a href="report.php">Report Issues</a>
        <a href="contact.php">Contact</a>
		<a href="feedback.php">Feedback</a>
    </nav>

    <div class="container">
        <!-- Report Issue Form -->
        <h2>Report an Issue</h2>
        <form action="submit_issue.php" method="POST">
            <label for="issue_type">Issue Type:</label>
            <select name="issue_type" id="issue_type" required>
                <option value="Illegal Dumping">Illegal Dumping</option>
                <option value="Overflowing Bins">Overflowing Bins</option>
                <option value="Hazardous Waste">Hazardous Waste</option>
                <option value="Other">Other</option>
            </select>

            <label for="location">Location (Address or Area):</label>
            <input type="text" id="location" name="location" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" required></textarea>

            <button type="submit">Submit Issue</button>
        </form>

        <!-- New Section: Community Reporting -->
        <div class="community-reporting">
            <h2>Community Reporting</h2>
            <p>View the issues that have been reported by other community members. This helps in identifying recurring problems in certain areas.</p>
            <ul id="communityReportsList">
                <li><strong>Illegal Dumping</strong> - Reported at King St, Sydney - <em>Pending Resolution</em></li>
                <li><strong>Overflowing Bins</strong> - Reported at Queen St, Melbourne - <em>Resolved</em></li>
                <li><strong>Hazardous Waste</strong> - Reported at Road Ave, Perth - <em>Pending Resolution</em></li>
            </ul>
        </div>

        <!-- New Section: Tracking Issues -->
        <div class="issue-tracking">
            <h2>Track Your Issue</h2>
            <form action="track_issue.php" method="POST">
                <label for="tracking_id">Enter your Tracking ID:</label>
                <input type="text" id="tracking_id" name="tracking_id" required>
                <button type="submit">Track Issue</button>
            </form>
            <p>Check the status of issues you have reported by entering your tracking ID above.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Local Waste Map. All Rights Reserved.</p>
    </footer>
</body>
</html>
