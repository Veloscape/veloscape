var index = 0;
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
    path.push(location);

    var marker = new google.maps.Marker({
        position: location,
        map: map,
        draggable: true,
        lineId: index++,
    });

    google.maps.event.addListener(marker, 'drag', function(event) {
        poly.getPath().setAt(this.lineId, event.latLng);
    });
    google.maps.event.addListener(marker, 'dragend', function(event) {
        poly.getPath().setAt(this.lineId, event.latLng);
    });
    /**
    var preUrl = partialUrl;
    preUrl = updateQueryStringParameter(preUrl, 'id', index.toString());
    index++;
    $.ajax({
        url: preUrl,
            success: function(data) {
            $('#accordion').append(data);
            $('#accordion').accordion("refresh");
        }
    });
    **/
}

/* menu toggle */
$(document).ready(function() {
    $(".toggler").click(function() {
        $(".body-container").toggleClass("menu-collapsed");
        google.maps.event.trigger(map, 'resize');
        if (menuVisible) {
            $(this).children().switchClass("fa-angle-right", "fa-angle-left", 1000, "easInOutQuad");
        }
        else {
            $(this).children().switchClass("fa-angle-left", "fa-angle-right", 1000, "easInOutQuad");
        }
        menuVisible = !menuVisible;
    });
});
