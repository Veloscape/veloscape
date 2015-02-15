<script type="text/javascript">
    var index = 0;

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
            draggable: true
        });
        var preUrl = '{{ URL::route('partialMarkerFeedback') }}';
        preUrl = updateQueryStringParameter(preUrl, 'id', index.toString());
        index++;
        $.ajax({
            url: preUrl,
                success: function(data) {
                $('#accordion').append(data);
                $('#accordion').accordion("refresh");
            }
        });
    }
</script>
