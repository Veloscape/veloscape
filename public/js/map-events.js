//add a listener for click events
google.maps.event.addListener(map, 'click', function(event) {
    mapClick(event.latLng);
});

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
