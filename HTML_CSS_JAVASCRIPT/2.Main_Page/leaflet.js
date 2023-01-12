//GLOBAL VARIABLES LEAFLET

var map = L.map('map').setView([51.505, -0.09], 13);
var marker = L.marker([51.5, -0.09]).addTo(map);
var popup = L.popup();

var User_latitude;
var User_longitude;

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 8,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);





//TILES



//FUNCTIONS
function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);

}

function onMapClick2(e) {
    Current_User_Location();
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
}


function Current_User_Location(e){
    map.locate({setView: true, maxZoom: 10});
    User_latitude = e.latlng.toString();
    ser_longitude = e.latlng.toString();

    popup.setLatLng(e.latlng).setContent("You are here " + e.latlng.toString()).openOn(map);

}


map.on('click', onMapClick2);
Current_User_Location();

