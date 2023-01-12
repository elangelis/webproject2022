//GLOBAL VARIABLES LEAFLET

var User_latitude;
var User_longitude;
User_latitude;
User_longitude;

var map = L.map('map').setView([51.505, -0.09], 13);
var marker = L.marker([51.5, -0.09]).addTo(map);
var popup = L.popup();

map.locate({setView: true, maxZoom: 16});


function Current_User_Location(){
    map.locate({setView: true, maxZoom: 19});
    User_latitude = e.latlng.lat;
    User_longitude = e.latlng.lng;
    popup
        .setLatLng(e.latlng)
        .setContent("You are here " + e.latlng.toString())
        .oppenTo(map);
}



//EVENTS

document.querySelector('map_filter_1').addEventListener('click', function() {
    Current_User_Location();

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "Map_Filter_2a.php?User_latitude=" + User_latitude + "&User_longitude=" + User_longitude, true);
    xmlhttp.send();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
});
