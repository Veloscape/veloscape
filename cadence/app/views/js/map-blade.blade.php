<script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAA4Yq0AZ9MYvZz5gz_9WUZPzYOguRYWaM"></script>
<script type="text/javascript">
    var formEntityUrl = '{{ URL::route('partialMarkerFeedback') }}';
    var rateLabels = [
        ['Very Unsafe', 'Moderately Unsafe', 'Neutral', 'Moderately Safe', 'Very Safe'],
        ['Difficult Movement', 'Moderately Difficult Movement', 'Neutral', 'Moderately Easy Movement', 'Very Easy Movement'],
        ['Horrible', 'Moderately Unenjoyable', 'Neutral', 'Very Enjoyable', 'Happy Days!'],
        ];
</script>
