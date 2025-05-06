document.addEventListener("DOMContentLoaded", function () {
    const map = L.map('map').setView([14.7573, 120.9486], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution:
            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    L.marker([14.7573, 120.9486])
        .addTo(map)
        .bindPopup('Barangay Patubig')
        .openPopup();
});
