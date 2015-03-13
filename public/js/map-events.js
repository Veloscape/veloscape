var index = 0;
var activeMarkerId = 0;
var formEntity;

var dgreen = {
    url: '/img/markers/diamond-green.png',
    size: new google.maps.Size(30, 44),
    origin: new google.maps.Point(0,0),
    anchor: new google.maps.Point(15,27)
};

var mgreen = {
    url: '/img/markers/measle-green.png',
    size: new google.maps.Size(20, 20),
    origin: new google.maps.Point(0,0),
    anchor: new google.maps.Point(10, 10)
};

function mapClick(location) {
    inactivateOldMarker();      /** set old marker (if any) icon to measle **/
    activeMarkerId = index;     /** set activeMarkerId to new index **/
    
    addFormData(formEntity, location);        /** add form entity for new marker **/
    this.addMarker(location);       /** add new marker to map at location **/
    this.modifyAddress(location.lat() + ", " + location.lng());     /** assign placeholder address **/

    /* if path is empty then remove info page */
    var path = poly.getPath();
    if (path.getLength() == 0) {
        $(".side-info").fadeOut("fast");
        $(".top").show();
    }
    path.push(location);
    
    index++;        /** lastly update index for new entries **/
}


function addMarker(location) {
    var marker = new google.maps.Marker({
        position: location,
        map: map,
        draggable: true,
        markerId: index,
        icon: dgreen 
    });
    
    nodes.push(marker);         /** add new marker to list of markers for ref **/

    google.maps.event.addListener(marker, 'click', function(event) {
        setActiveMarker(this.markerId);
        changeFormFocus(this.markerId);
    });
    google.maps.event.addListener(marker, 'dragstart', function(event) {
        setActiveMarker(this.markerId);
    });
    google.maps.event.addListener(marker, 'drag', function(event) {
        poly.getPath().setAt(this.markerId, event.latLng);
    });
    google.maps.event.addListener(marker, 'dragend', function(event) {
        poly.getPath().setAt(this.markerId, event.latLng);
        changeMarkerGeo(this.markerId, event.latLng);
    });

}

function inactivateOldMarker() {
    var oldMarker = getMarker(activeMarkerId);
    if (oldMarker != null) {
        oldMarker.setIcon(mgreen);
    }
}

function setActiveMarker(id) {
    inactivateOldMarker();
    var newMarker = getMarker(id);
    newMarker.setIcon(dgreen);
    activeMarkerId = id;
}

function getMarker(id) {
    for (i = 0; i < nodes.length; i++) {
        if (nodes[i].markerId == id) {
            return nodes[i];
        }
    }
    return null;
}

function changeMarkerGeo(id, location) {
    $("#"+id).find(".lat").val(location.lat());
    $("#"+id).find(".lng").val(location.lng());
    getFormattedAddress(location);
    
}

function changeFormFocus(id) {
    $(".map-form-entity").hide();
    $("#"+id.toString()).show();
    modifyAddress($("#"+id.toString()).find(".revgeo").val());

}

function addFormData(template, location) {
    var data = template.replace(/blank/g, activeMarkerId);
    $(".content").prepend(data);                                        /** add form entity for new entry **/
    $("#blank").first().attr("id", activeMarkerId);                     /** assign marker id to new entity **/
    
    activateFormEvents();                                                  /** enable js-functions **/
    changeMarkerGeo(activeMarkerId, location);                          /** fill in form geo-code **/
    changeFormFocus(activeMarkerId);                                    /** hide other entities **/
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

/** form js effects **/
function activateFormEvents() {
    
    $(".btn-path").slice(0,6).hover(
        function() {
            if ($(this).hasClass("active")) {
                return;
            }
            $(this).find(".fa").css("visibility", "visible");
        },
        function() {
            $(this).find(".fa").css("visibility", "hidden");
        }
    );

    $(".btn-path").slice(0,6).click(function() {
        var type = $(this).data("type");
        $(this).parent().find(".type").val(type);
        $(this).parent().find(".btn-path").removeClass("active");
        $(this).addClass("active");
    });

    $(".btn-delete").first().hover(
        function() {
            $(this).find(".fa").hide();
            $(this).append("<span>Delete</span>");
        },
        function() {
            $(this).children().show();
            $(this).find("span:first").remove();
        }
    );

    $(".btn-prev").first().hover(
        function() {
            if ($(this).hasClass("disabled")) {
                return;
            }

            $(this).find(".fa").hide();
            $(this).append("<span>Previous Point</span>");
        },
        function() {
            if ($(this).hasClass("disabled")) {
                return;
            }
            $(this).children().show();
            $(this).find("span:first").remove();
        }
    );

    $(".btn-next").first().hover(
        function() {
            if ($(this).hasClass("disabled")) {
                return;
            }

            $(this).find(".fa").hide();
            $(this).append("<span>Next Point</span>");
        },
        function() {
            if ($(this).hasClass("disabled")) {
                return;
            }
            $(this).children().show();
            $(this).find("span:first").remove();
        }
    );

    $(".noUi-slider").slice(0,5).noUiSlider({
        start: [3],
        step: 1,
        connect: "lower",
        range: {
            'min': [1],
            'max': [5]
        }
    });
    $(".noUi-slider").on({
        slide: function() {
            var val = $(this).val();
            $(this).parent().find(".rate-input").val(val);
            var set = $(this).parent().find(".rate-value").data("set");
            var label = rateLabels[parseInt(set)][parseInt(val)-1];
            $(this).parent().find(".rate-value").children().text(label);
        }
    });

}

function dismissSubmitPane() {
    $(".side-confirm").removeClass("active");
    $(".map-confirm").removeClass("active");
}

function resetMap() {
    $(".top").hide();
    $(".side-info").fadeIn("fast");
    $(".content").empty();
    poly.getPath().clear();
    for (i = 0; i < nodes.length; i++) {
        nodes[i].setMap(null);
    }
    index = 0;
}

/* menu toggle */
$(document).ready(function() {
    $.ajax({
        url: formEntityUrl,
            success: function(data) {
                formEntity = data;
            }
    });

    $(".toggler").click(function() {
        $(".side-main").css("visibility", "visible");
        $(".body-container").toggleClass("menu-collapsed");
        if ($(".body-container").hasClass("menu-collapsed")) {
            $(this).children().switchClass("fa-angle-right", "fa-angle-left", 1000, "easInOutQuad");
        }
        else {
            $(this).children().switchClass("fa-angle-left", "fa-angle-right", 1000, "easInOutQuad");
        }
    });

    $(".map-container").bind("transitionend", function() {
        google.maps.event.trigger(map, 'resize');
        if ($(".body-container").hasClass("menu-collapsed")) {
            $(".side-main").css("visibility", "hidden");
        }
    });
    
    $(".side-confirm").bind("transitionend", function() {
        if ($(this).hasClass("active")) return;
        $(this).css("visibility", "hidden");
    });

    $(".btn-submit").click(function() {
        $(".side-confirm").css("visibility", "visible");
        $(".side-confirm").addClass("active");
        $(".map-confirm").addClass("active");

    });

    $(".dismiss-submit").click(function() {
        dismissSubmitPane();
    });

    $(".btn-reset").click(function() {
        resetMap();
    });

});
