//GLOBAL VARIABLES LEAFLET
var map = L.map('map').setView([51.505, -0.09], 13);
var marker = L.marker([51.5, -0.09]).addTo(map);
var popup = L.popup();

map.locate({setView: true, maxZoom: 16});

var polygon = L.polygon([
    [51.509, -0.08],
    [51.503, -0.06],
    [51.51, -0.047]
]).addTo(map);

var circle = L.circle([51.508, -0.11], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map);




//TILES

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);



//FUNCTIONS
function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);
}

function onMapClick2(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
}


function Current_User_Location(){
    map.locate({setView: true, maxZoom: 19});
    var User_latitude = e.latlng.toString();
    var User_longitude = e.latlng.toString();
    popup
        .setLatLng(e.latlng)
        .setContent("You are here " + e.latlng.toString())
        .openOn(map);
}

Current_User_Location();
//EVENT LISTENERS




//POPUPS

marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
circle.bindPopup("I am a circle.");
polygon.bindPopup("I am a polygon.");

var popup = L.popup()
    .setLatLng([51.513, -0.09])
    .setContent("I am a standalone popup.")
    .openOn(map); //ME OPENTO kleinei ta proigoumena popups kai emfanizetai auto


