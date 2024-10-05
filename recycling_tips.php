<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recycling Tips - Local Waste Map</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to CSS file -->
    <script src="js/tips.js" defer></script> <!-- Link to custom JS -->
</head>
<body>
    <header>
        <h1>Recycling & Waste Reduction Tips</h1>
        <p>Learn how to recycle effectively and reduce waste.</p>
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
        <!-- Section: Recycling Tips -->
        <div class="section">
            <h2>Recycling Tips</h2>
            <img src="images/recycling_tips.jpg" alt="Recycling Tips" class="section-image" onclick="toggleContent('recyclingTipsContent')">
            <p>Learn the best ways to recycle and avoid contamination in your recycling bin. <a href="#" onclick="toggleContent('recyclingTipsContent')">Read More</a></p>
            <div id="recyclingTipsContent" class="section-content" style="display: none;">
                <ul class="recycling-tips">
                    <li>Rinse containers before recycling.</li>
                    <li>Know what’s recyclable in your area.</li>
                    <li>Flatten cardboard boxes to save space.</li>
                    <li>Keep lids on plastic bottles.</li>
                    <li>Separate paper and plastic.</li>
                    <li>Recycle electronics at e-waste centers.</li>
                    <li>Compost food scraps.</li>
                    <li>Reuse items where possible.</li>
                    <li>Avoid wishful recycling (don’t put non-recyclables in the bin).</li>
                    <li>Stay informed about your city’s recycling policies.</li>
                </ul>
            </div>
        </div>

        <!-- Section: Waste Reduction Strategies -->
        <div class="section">
            <h2>Waste Reduction Strategies</h2>
            <img src="images/waste_reduction.jpg" alt="Waste Reduction Strategies" class="section-image" onclick="toggleContent('wasteReductionContent')">
            <p>Discover simple ways to reduce waste in your daily life. <a href="#" onclick="toggleContent('wasteReductionContent')">Read More</a></p>
            <div id="wasteReductionContent" class="section-content" style="display: none;">
                <ul class="waste-reduction-strategies">
                    <li>Reduce single-use plastics.</li>
                    <li>Buy in bulk to reduce packaging.</li>
                    <li>Donate unwanted items.</li>
                    <li>Carry a reusable water bottle.</li>
                    <li>Repurpose old items creatively.</li>
                </ul>
            </div>
        </div>

        <!-- Section: Local Recycling Programs -->
        <div class="section">
            <h2>Local Recycling Programs</h2>
            <img src="images/local_programs.jpg" alt="Local Recycling Programs" class="section-image" onclick="toggleContent('localProgramsContent')">
            <p>Get involved in local recycling programs in Canberra. <a href="#" onclick="toggleContent('localProgramsContent')">Read More</a></p>
            <div id="localProgramsContent" class="section-content" style="display: none;">
                <ul class="featured-programs">
                    <li><strong>Curbside Recycling:</strong> Weekly collection of recyclables.</li>
                    <li><strong>E-Waste Collection Days:</strong> Special events for recycling electronics.</li>
                    <li><strong>Composting Workshops:</strong> Learn how to compost at home.</li>
                </ul>
            </div>
        </div>

        <!-- New Section: FAQ and Resource Library -->
        <div class="section">
            <h2>Frequently Asked Questions (FAQ)</h2>
            <div class="faq">
                <h3>1. What materials can I recycle?</h3>
                <p>You can recycle paper, cardboard, glass bottles, aluminum cans, and some plastics (check with your local recycling center for specific guidelines).</p>

                <h3>2. How should I prepare my recyclables?</h3>
                <p>Ensure that your recyclables are clean and dry. Rinse out any containers, and flatten cardboard boxes to save space.</p>

                <h3>3. Can I recycle electronics?</h3>
                <p>Yes! Many local recycling centers have special collection days for electronic waste (e-waste), where you can drop off old computers, phones, and batteries.</p>

                <h3>4. What should I do with hazardous waste?</h3>
                <p>Hazardous waste, such as chemicals and batteries, should be taken to designated hazardous waste collection points.</p>
            </div>

            <h2>Resource Library</h2>
            <ul class="resource-library">
                <li><a href="documents/recycling_guide.pdf" target="_blank">Recycling Guide (PDF)</a></li>
                <li><a href="documents/composting_tips.pdf" target="_blank">Composting Tips (PDF)</a></li>
                <li><a href="documents/waste_reduction_ideas.pdf" target="_blank">Waste Reduction Ideas (PDF)</a></li>                
            </ul>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Local Waste Map. All Rights Reserved.</p>
    </footer>
</body>
</html>
