<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Waste Map</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Updated path to CSS file -->
    <script src="js/script.js" defer></script> <!-- Updated path to JavaScript file -->
</head>
<body>
    <header>
        <h1>Welcome to Local Waste Map</h1>
        <p>Your guide to responsible waste management!</p>
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
		<h2>Explore Waste Management Resources</h2>
		
		<div class="image-container">
			<img src="images/waste1.jpg" alt="Waste Management" />
		</div>
		
		<p>
			Local Waste Map is your one-stop solution for finding waste disposal and recycling services in your locality.
			Use our interactive map to discover the nearest waste management centers, and explore tips for reducing waste and recycling effectively.
		</p>
		
		<h3>Key Features of Local Waste Map</h3>
		<ul>
			<li>Interactive map with real-time waste disposal locations</li>
			<li>Comprehensive guides for waste reduction and recycling</li>
			<li>Community forum to discuss best waste management practices</li>
			<li>Reporting system for illegal dumping and waste issues</li>
		</ul>

		<h3>Why Waste Management Matters</h3>
		<p>
			Efficient waste management is critical for protecting the environment and promoting sustainability.
			By using the Local Waste Map, residents can take actionable steps to ensure proper waste disposal,
			minimize landfill use, and contribute to a cleaner, greener planet.
		</p>

		<button onclick="showModal()">More Info</button> <!-- Info button to show modal -->
	</div>


    <!-- Modal -->
    <div id="infoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Additional Information</h2>
            <p>
                This platform aims to empower local communities by providing information on waste disposal options,
                recycling practices, and ways to reduce waste. Our goal is to collaborate with local waste management
                authorities to keep our environment clean and sustainable.
            </p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Local Waste Map. All Rights Reserved.</p>
    </footer>
</body>
</html>
