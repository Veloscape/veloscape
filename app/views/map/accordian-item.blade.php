<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading{{ $id }}">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $id }}" aria-expanded="false" aria-controls="collapse{{ $id }}">
                {{ $title }}
            </a>
        </h4>
    </div>
    <div id="collapse{{ $id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $id }}">
        <div class="panel-body">
            @include('map.form')
        </div>
    </div>
</div>

