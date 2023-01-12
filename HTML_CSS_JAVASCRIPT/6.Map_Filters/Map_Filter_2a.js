//GLOBAL VARIABLES LEAFLET

var User_latitude;
var User_longitude;
globalThis.User_latitude;
globalThis.User_longitude;

var map = L.map('map').setView([51.505, -0.09], 13);
var marker = L.marker([51.5, -0.09]).addTo(map);
var popup = L.popup();

map.locate({setView: true, maxZoom: 16});


function Current_User_Location(){
    map.locate({setView: true, maxZoom: 19});
    User_latitude = e.latlng.toString();
    User_longitude = e.latlng.toString();
    popup
        .setLatLng(e.latlng)
        .setContent("You are here " + e.latlng.toString())
        .oppenTo(map);
}



//EVENTS

document.querySelector('map_filter_1').addEventListener('click', function() {
    Current_User_Location();
        
});
