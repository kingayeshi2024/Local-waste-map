<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map & Locations - Local Waste Map</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to CSS file -->
    <script src="js/map.js" defer></script> <!-- Link to custom JS for map -->
</head>
<body>
    <header>
        <h1>Waste Disposal & Recycling Locations</h1>
        <p>Find waste disposal, recycling, and hazardous waste locations in Canberra.</p>
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
        <h2>Search and Filter Locations</h2>
        <!-- Search Bar -->
        <input type="text" id="searchBar" placeholder="Search for a location..." onkeyup="filterLocations()">

        <!-- Filter Dropdown -->
        <label for="locationFilter">Filter by Type:</label>
        <select id="locationFilter" onchange="filterLocations()">
            <option value="all">All Locations</option>
            <option value="waste">Waste Disposal</option>
            <option value="recycling">Recycling Centers</option>
            <option value="hazardous">Hazardous Waste</option>
        </select>

        <!-- Map -->
        <div class="map-container" id="mapContainer">
            <iframe
                id="mapFrame"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d336293.2446953069!2d148.999481375152!3d-35.2820001071216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b164d89f1fbe899%3A0x405421749ec7fd0!2sCanberra%20ACT%2C%20Australia!5e0!3m2!1sen!2sbt!4v1696423459690!5m2!1sen!2sbt"
                width="100%"
                height="500"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>

        <!-- List of Locations -->
        <h3>Locations List</h3>
        <ul id="locationsList">
            <li class="location-item" data-type="waste"><strong>Sydney Waste Disposal</strong> - Accepts General Waste</li>
            <li class="location-item" data-type="recycling"><strong>Melbourne Recycling Center</strong> - Accepts Recyclable Materials</li>
            <li class="location-item" data-type="hazardous"><strong>Perth Hazardous Waste Site</strong> - Accepts Hazardous Materials</li>
            <li class="location-item" data-type="waste"><strong>Brisbane Waste Center</strong> - Accepts General Waste</li>
            <li class="location-item" data-type="recycling"><strong>Canberra Recycling Hub</strong> - Accepts Plastics and Paper</li>
        </ul>
    </div>

    <footer>
        <p>&copy; 2024 Local Waste Map. All Rights Reserved.</p>
    </footer>
</body>
</html>
