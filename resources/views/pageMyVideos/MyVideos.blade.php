<div class="conatiner m-0 p-0">

    <div class="row ml-3">
        {{-- Button test --}}
        <button type="button" class="btn btn-primary ml-5" id="test">Boutton Test</button>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#modalAddVideo">
        Adicionar um video
        </button>
    </div>
    
    <div class="row my-5"><h1 class="text-light mx-auto">Os Meus Videos</h1></div>

    <div class="row p-0">
        @foreach ($videos as $video)
            <div class="col-md-3 p-0 my-3">
                <div id="video" class="card w-100" style="width: 18rem;">
                    <div class="card-body">
                        {{-- {!! $variable !!} afficher une string comme balise --}}
                        {!!$video->video!!}
                        <h5 class="card-title">{{maxStr($video->nomVideo, 40)}}</h5>
                        <p class="card-text">{{$video->heureVideo}}</p>
                        <span class="border border-dark">{{$video->filtre}}</span>
                        {{-- <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#modalMyVideo">
                        Ver Video
                        </button> --}}
                        <a href="{{route('MyVideos.show', $video->id)}}" class="btn btn-primary">Ver Video</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>