<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Local Waste Map</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to CSS file -->
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <p>Have questions or feedback? We'd love to hear from you.</p>
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
        <!-- Contact Form -->
        <h2>Get in Touch</h2>
        <form action="submit_contact.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Local Waste Map. All Rights Reserved.</p>
    </footer>
</body>
</html>
