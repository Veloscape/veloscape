
//init poly settings
var poly;

function polyInitalize() {
    var polyOptions = {
        strokeColor: strokeColor,
        strokeOpacity: strokeOpacity,
        strokeWeight: strokeWeight,
    };
    poly = new google.maps.Polyline(polyOptions);
    poly.setMap(map);
}

polyInitialize();


function mapClick(location) {
    var path = poly.getPath();
 
    path.push(location);
    
    var marker = new google.maps.Marker({
        position: location,
        map: map,
    });
    $.ajax({
        url: '/blah',
        success: function(data) {
            $('.container').append(data);
        }
    });
}

//add a listener for click events
$(document).ready(function() {
    google.maps.event.addListener(map, 'click', function(event) {
        mapClick(event.latLng);
    });
});
