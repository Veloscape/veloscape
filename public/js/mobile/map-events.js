var index = 0;
var activeMarkerId = 0;
var menuVisible = true;

function updateQueryStringParameter(uri, key, value) {
    var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
    var separator = uri.indexOf('?') !== -1 ? "&" : "?";
    if (uri.match(re)) {
        return uri.replace(re, '$1' + key + "=" + value + '$2');
    }
    else {
        return uri + separator + key + "=" + value;
    }
}

function mapClick(location) {
    var path = poly.getPath();
    
    /* if path is empty then remove info page */
    if (path.getLength() == 0) {
        $(".map-hint").fadeOut("fast");
    }

    this.addMarker(location);
    path.push(location);

    var preUrl = partialUrl;
    preUrl = updateQueryStringParameter(preUrl, 'id', activeMarkerId.toString());
    preUrl = updateQueryStringParameter(preUrl, 'lat', location.lat());
    preUrl = updateQueryStringParameter(preUrl, 'lng', location.lng());
    $.ajax({
        url: preUrl,
            success: function(data) {
                addFormData(data);
            }
    });
}

function addMarker(location) {
    var marker = new google.maps.Marker({
        position: location,
        map: map,
        draggable: true,
        markerId: index,
    });

    activeMarkerId = marker.markerId;
    index++;

    google.maps.event.addListener(marker, 'click', function(event) {
        activeMarkerId = this.markerId;
    });
    
    $(".tab-disable-map").show();
    $(".tab-marker").show();
}

function changeMarkerGeo(id, location) {
    $("#"+id).find(".lat").val(location.lat());
    $("#"+id).find(".lng").val(location.lng());
    getFormattedAddress(location);
    
}

function addFormData(data) {
    var id = this.activeMarkerId.toString();
    $(".form-data").prepend(data);
    var lat = $("#"+ id).find(".lat").val();
    var lng = $("#"+ id).find(".lng").val();
    var latlng = new google.maps.LatLng(lat, lng);
    this.getFormattedAddress(latlng);
}

function getFormattedAddress(location) {
    var address;
    geocoder.geocode({'latLng': location}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            if (results[0]) {
                address = results[0].formatted_address;
            } else {
            address = 'No results found';
            } 
        } else {
            address = 'Geocoder failed due to: ' + status;
        }
        $("#"+this.activeMarkerId.toString()).find(".revgeo").val(address);
    });

}

/* menu toggle */
$(document).ready(function() {

    $(".marker-type").click(function() {
        var type = $(this).attr('id'); 
        $("#"+activeMarkerId).find(".type").val(type);
        
        $(".tab").hide();
    });

    $(".tab-dismiss").click(function() {
        $(".tab").hide();
    });

    $(".toggler").click(function() {
        $(".body-container").toggleClass("menu-collapsed");
        if (menuVisible) {
            $(this).children().switchClass("fa-angle-right", "fa-angle-left", 1000, "easInOutQuad");
        }
        else {
            $(this).children().switchClass("fa-angle-left", "fa-angle-right", 1000, "easInOutQuad");
        }
        menuVisible = !menuVisible;
    });

    $(".map-container").bind("transitionend", function() {
        google.maps.event.trigger(map, 'resize');
    });
});
