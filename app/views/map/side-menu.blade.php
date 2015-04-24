<div class="side-info" style="z-index: 2">
    <div class="centered">
        <h1 class="light"> 
        Place a marker by left-clicking anywhere on the map to begin
        </h1>
    </div>
</div>
<div class="side-main" style="z-index: 1">
    <div class="options">
        <div class="options-btn" data-toggle="tooltip" data-placement="left" title="Search location">
            <button type="button" class="btn">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </button>
        </div>
        <div class="options-btn" data-toggle="tooltip" data-placement="left" title="Clear all markers">
            <button type="button" class="btn">
                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
            </button>
        </div>
        <div class="options-btn" data-toggle="tooltip" data-placement="left" title="Map help">
            <button type="button" class="btn">
                <i class="fa fa-question" style="font-size: 25px"></i>
            </button>
        </div>
        <div class="options-btn btn-done" data-toggle="tooltip" data-placement="left" title="Submit route">
            <button type="button" class="btn">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <div class="inner">
        @include('map.confirm')
    </div>

    <!--
    <div class="top">
        <div class="header">
             <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-search"><i class="fa fa-search"></i>&nbsp;Search</button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-reset"><i class="fa fa-refresh fa-rotate-90"></i>&nbsp;Reset Map</button>
                </div>
            </div>
        </div>
        <div class="marker-address h3">
            ...
        </div>

        <div class="content">
        </div>
    </div>
    --!>

    <!--
    <div class="bottom">
            <button type="button" class="btn btn-block btn-submit">
                <i class="fa fa-save"></i>
                <span>&nbsp;Submit</span>
            </button>
    </div>
    --!>

</div>
