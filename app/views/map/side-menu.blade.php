<!--
<div class="side-info" style="z-index: 2">
<div class="centered">
    <h1 class="light"> 
    Place a marker by left-clicking anywhere on the map to begin
    </h1>
</div>
</div>
--!>

<div class="side-main" style="z-index: -1">
    
    <div class="top">
        

        <div class="header">
             <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="fa fa-search"></i>&nbsp;Search</button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="fa fa-refresh fa-rotate-90"></i>&nbsp;Reset Map</button>
                </div>
            </div>
        </div>
        <div class="marker-content">
            <div class="marker-address h3">
                Address here
            </div>

            <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-left fa-fw"></i></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="fa fa-trash-o fa-fw"></i></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-right fa-fw"></i></button>
                </div>
            </div>
            <div class="content">
                @include('map.template') 
            </div>
        </div>
    </div>
    

    <div class="btn submit h3">
        <button type="submit" class="btn btn-block">Submit</button>
    </div>
</div>
