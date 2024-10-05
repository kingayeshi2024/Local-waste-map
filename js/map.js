// js/map.js

// Function to filter locations by search and type
function filterLocations() {
    const searchInput = document.getElementById('searchBar').value.toLowerCase();
    const filterType = document.getElementById('locationFilter').value;
    const locations = document.getElementById('locationsList').getElementsByClassName('location-item');

    // Loop through all location items and filter them
    for (let i = 0; i < locations.length; i++) {
        const location = locations[i];
        const locationText = location.textContent.toLowerCase();
        const locationType = location.getAttribute('data-type');

        // Check if location matches the search and filter criteria
        if ((locationText.includes(searchInput) || searchInput === '') &&
            (filterType === 'all' || locationType === filterType)) {
            location.style.display = ""; // Show matching location
        } else {
            location.style.display = "none"; // Hide non-matching location
        }
    }
}
