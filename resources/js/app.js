import './bootstrap';
import 'flowbite';

// Function to toggle dropdown visibility
function toggleDropdown(dropdownId) {
    var dropdownMenu = document.getElementById(dropdownId);
    dropdownMenu.classList.toggle('hidden');
}

// Add event listeners for button clicks (if needed)
document.getElementById('innovation-btn').addEventListener('click', function() {
    console.log('Innovation Hub button clicked');
});

document.getElementById('apply-btn').addEventListener('click', function() {
    console.log('Click Here to Apply button clicked');
});
