document.addEventListener("DOMContentLoaded", function () {
    const map = L.map('map').setView([14.775663181415643, 120.95956319002052], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution:
            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    L.marker([14.775663181415643, 120.95956319002052])
        .addTo(map)
        .bindPopup('Barangay Patubig')
        .openPopup();
});
