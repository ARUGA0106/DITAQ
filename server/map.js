// Initialize Leaflet map
var map = L.map('map').setView([-6.369028, 34.888822], 6); // Centered on Tanzania

// Add a tile layer (OpenStreetMap as an example)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Example: Add a marker
L.marker([-6.7924, 39.2083]).addTo(map)
    .bindPopup('DIT sensor_1. (Dar es salaam, Tanzania)')
    .openPopup();
