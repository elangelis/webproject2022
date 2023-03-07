//GLOBAL VARIABLES LEAFLET
//alert("Leaflet Start ");

const map = L.map('map');
let marker,circle,polygon,popup;

map.setView([0, 0], 18);
marker = L.marker([51.5, -0.09]).addTo(map);

circle = L.circle([51.508, -0.11], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map);

polygon = L.polygon([
    [51.509, -0.08],
    [51.503, -0.06],
    [51.51, -0.047]
]).addTo(map);

popup = L.popup()
    .setLatLng([51.513, -0.09])
    .setContent("I am a standalone popup.")
    .openOn(map);



function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);
}
function MyComponent() {
    useMapEvents({
        click(e){
            alert(e.latlng)
        }
    })
}
L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom:18,
    minZoom:15,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
circle.bindPopup("I am a circle.");
polygon.bindPopup("I am a polygon.");

const options = {
    enableHighAccuracy: true, 
    // Get high accuracy reading, if available (default false)
    timeout: 5000, 
    // Time to return a position successfully before error (default infinity)
    maximumAge: 2000, 
    // Milliseconds for which it is acceptable to use cached position (default 0)
    };

function error(err){
    
    if (err.code==1){
        alert("Please allow Geolocation Access");

    }else{
        alert("Cannot Get Current Location");
    }
}

function success(position){
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    var accuracy = position.coords.accuracy; // Accuracy in metres

    if(marker){
        map.removeLayer(marker);
        map.removeLayer(circle);
    }

    marker = L.marker([lat,lng]).addTo(map);
    circle = L.circle([lat,lng],{radius:100}).addTo(map);
    map.fitBounds(circle.getBounds());
    map.setView([lat,lng],18);
}

navigator.geolocation.watchPosition(success, error, options);

//alert(" Leaflet Loaded");