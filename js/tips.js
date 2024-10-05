// js/tips.js

function toggleContent(contentId) {
    const content = document.getElementById(contentId);
    
    if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "block"; // Show the content
    } else {
        content.style.display = "none"; // Hide the content
    }
}
