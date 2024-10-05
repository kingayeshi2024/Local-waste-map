<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Local Waste Map</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to CSS file -->
</head>
<body>
    <header>
        <h1>Feedback Form</h1>
        <p>Your feedback helps us improve our services. Please leave your comments or suggestions below.</p>
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
        <!-- Feedback Form -->
        <h2>Submit Your Feedback</h2>
        <form action="submit_feedback.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Feedback:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit Feedback</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Local Waste Map. All Rights Reserved.</p>
    </footer>
</body>
</html>
