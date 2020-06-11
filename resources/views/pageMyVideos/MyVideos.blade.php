<div class="conatiner m-0 p-0">
    <button class="btn btn-primary"></button>
    <div class="row">
        @foreach ($myVideos as $video)
            <div class="col-md-3">
                {{$video}}
            </div>
        @endforeach
    </div>
</div>