var map;

//map center geocode
var lat = -33.8681;
var lng = 151.2075;

//map int settings
var center = new google.maps.LatLng(lat, lng);
var zoom = 15;
var mapTypeId = google.maps.MapTypeId.ROADMAP;

//stroke settings
var strokeColor = '#333333';
var strokeOpacity = 1.0;
var strokeWeight = 3;

function initialize() {
    var mapOptions = {
        center: center,
        zoom: zoom,
        mapTypeId: mapTypeId 
    };
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    
}

google.maps.event.addDomListener(window, 'load', initialize);
