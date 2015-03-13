var map;
var poly;
var nodes = [];
var geocoder;

//map center geocode
var lat = -33.8681;
var lng = 151.2075;

//map int settings
var center = new google.maps.LatLng(lat, lng);
var zoom = 15;
var mapTypeId = google.maps.MapTypeId.ROADMAP;

//init poly settings
var strokeColor = '#33CC33';
var strokeOpacity = 1.0;
var strokeWeight = 5;

function polyInitialize() {
    var polyOptions = {
        strokeColor: strokeColor,
        strokeOpacity: strokeOpacity,
        strokeWeight: strokeWeight
    };
    poly = new google.maps.Polyline(polyOptions);
    poly.setMap(map);
}

function initialize() {
    var mapOptions = {
        center: center,
        zoom: zoom,
        streetViewControl: false,
        mapTypeControl: false,
        mapTypeId: mapTypeId,
        styles: style
    };

    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    geocoder = new google.maps.Geocoder();
    polyInitialize(); 
    
    google.maps.event.addListener(map, 'click', function(event) {
        mapClick(event.latLng);
    });

   
}

google.maps.event.addDomListener(window, 'load', initialize);

