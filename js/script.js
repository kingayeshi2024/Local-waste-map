// js/script.js

// Function to show the modal
function showModal() {
    document.getElementById('infoModal').style.display = 'block';
}

// Function to close the modal
function closeModal() {
    document.getElementById('infoModal').style.display = 'none';
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
    const modal = document.getElementById('infoModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
};
