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

    this.addMarker(location);
    /*this.getFormattedAddress(location);*/
    this.modifyAddress(location.lat() + ", " + location.lng());

    /* if path is empty then remove info page */
    if (path.getLength() == 0) {
        $(".side-info").fadeOut("fast");
    }

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

    var infowindow = new google.maps.InfoWindow({
        content: "<button type='button'>Delete</button>"
    });
    activeMarkerId = marker.markerId;
    index++;

    google.maps.event.addListener(marker, 'click', function(event) {
        activeMarkerId = this.markerId;
        changeFormFocus(this.markerId);
        infowindow.open(map, marker);
    });
    google.maps.event.addListener(marker, 'dragstart', function(event) {
        activeMarkerId = this.markerId;
    });
    google.maps.event.addListener(marker, 'drag', function(event) {
        poly.getPath().setAt(this.markerId, event.latLng);
    });
    google.maps.event.addListener(marker, 'dragend', function(event) {
        poly.getPath().setAt(this.markerId, event.latLng);
        changeMarkerGeo(this.markerId, event.latLng);
    });

}

function changeMarkerGeo(id, location) {
    $("#".id).find(".lat").val(location.lat());
    $("#".id).find(".lng").val(location.lng());
    getFormattedAddress(location);
    
}

function changeFormFocus(id) {
    $(".map-form-entity").hide();
    $("#"+id.toString()).show();
    modifyAddress($("#"+id.toString()).find(".revgeo").val());

}

function addFormData(data) {
    $(".content").prepend(data);
    changeFormFocus(activeMarkerId);
    var lat = $("#"+ this.activeMarkerId.toString()).find(".lat").val();
    var lng = $("#"+ this.activeMarkerId.toString()).find(".lng").val();
    var latlng = new google.maps.LatLng(lat, lng);
    this.getFormattedAddress(latlng);
}

function modifyAddress(address) {
    $(".marker-address").attr("title", address);
    $(".marker-address").text(address);
    $("#"+ this.activeMarkerId.toString()).find(".revgeo").val(address);
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
        this.modifyAddress(address);
    });

}

/* menu toggle */
$(document).ready(function() {
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
