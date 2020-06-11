<div class="conatiner m-0 p-0">

    {{-- Button test --}}
    <button type="button" class="btn btn-primary ml-5" id="test">Boutton Test</button>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#modalAddVideo">
    Adicionar um video
    </button>

    <div class="row m-5">
        @foreach ($videos as $video)
            <div class="col-md-3">
                <div id="video" class="card w-100" style="width: 18rem;">
                    
                    <div class="card-body">
                        {{-- {!! $variable !!} afficher une string comme balise --}}
                       {!!$video->video!!}
                        <h5 class="card-title">{{$video->nomVideo}}</h5>
                        <p class="card-text">{{$video->heureVideo}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>