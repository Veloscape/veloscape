<script type="text/javascript">
    function mapClick(location) {
        var path = poly.getPath();
        path.push(location);

        var marker = new google.maps.Marker({
            position: location,
            map: map,
        });
        $.ajax({
            url: '{{URL::route('partialMarkerFeedback')}}',
                success: function(data) {
                $('#accordion').append(data);
                $('#accordion').accordion("refresh");
            }
        });
    }
</script>
