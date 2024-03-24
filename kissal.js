
var map = L.map('map').setView([9.6412, -13.5784], 12);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Ajouter les marqueurs pour les quartiers à Conakry
var quartiers = [
    { nom: 'Koloma', coordonnees: [9.5947835, -13.6245924] },
    { nom: 'Hamdallaye', coordonnees: [9.5726627, -13.6571109] },
    { nom: 'Kaporo', coordonnees: [9.6139260, -13.6452606] },
    { nom: 'Lambagni', coordonnees: [9.6371911, -13.6104834] },
    { nom: 'Wanindara', coordonnees: [9.6322693, -13.5899211] },
    { nom: 'Kobaya', coordonnees: [9.6573188, -13.5982644] }
];

quartiers.forEach(function (quartier) {
    var marker = L.marker(quartier.coordonnees).addTo(map);
    marker.bindPopup("<b>" + quartier.nom + "</b>").openPopup();
});

// Ajouter un marqueur de danger
var dangerIcon = L.icon({
    iconUrl: 'images/undraw_Warning.png',
    iconSize: [30, 30],
    iconAnchor: [15, 30],
    popupAnchor: [0, -30]
});

var dangerMarker = L.marker([9.65, -13.59], { icon: dangerIcon }).addTo(map);
dangerMarker.bindPopup("<b>Zone de Danger</b>").openPopup();

// Ajouter la barre de recherche
L.Control.geocoder().addTo(map);

// Caroussel
let slideIndex = 0;

function moveSlide(n) {
    const slides = document.getElementsByClassName("carousel-slide")[0];
    const images = slides.getElementsByTagName("img");
    slideIndex += n;

    if (slideIndex >= images.length) {
        slideIndex = 0;
    }

    if (slideIndex < 0) {
        slideIndex = images.length - 1;
    }

    slides.style.transform = `translateX(-${slideIndex * 100}%)`;
}

// JavaScript pour initialiser la carte (utilisation de Leaflet.js par exemple)
var map = L.map('map').setView([0, 0], 2); // Centrer la carte sur le monde entier
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Exemple de marqueur sur la carte
var marker = L.marker([0, 0]).addTo(map);

// Code JavaScript pour récupérer et afficher des alertes en temps réel
// Ceci est simplifié et nécessiterait une connexion à une source de données en temps réel comme une API





