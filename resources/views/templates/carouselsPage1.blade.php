<section>
    <a href="{{route('MyVideos.index')}}"><h1 class="ml-5 pl-5 text-light">Os meus videos</h1></a>
    {{-- Carousel meus videos --}}
    <div id="carousel1" class="carousel slide py-5" data-ride="carousel">
        <div class="carousel-inner">
            {{-- creer un controle pour afficher les mes videos 
            Si var =! 0 et var <= 3
            Sinon Si var =! 0 et var <= 6
            Sinon Si var =! 0 var > 6
            Sinon  --}}
            @if (count($videos) != 0 && count($videos) <= 3)
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    @for ($i = 0; $i < count($videos); $i++)
                        <div class="col-md-3 ">
                            <iframe class="w-100" height="300px"  src="{{$videos[$i]->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    @endfor
                    
                </div>
            </div>
            @elseif (count($videos) != 0 && count($videos) <= 6)
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-md-3 ">
                            {!!$videos[$i]->video!!}
                        </div>
                    @endfor
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    @for ($i = 3; $i < (count($videos)); $i++)
                        <div class="col-md-3 ">
                            {!!$videos[$i]->video!!}
                        </div>
                    @endfor
                </div>
            </div>
            @elseif (count($videos) != 0 && count($videos) > 6)
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        @for ($i = 0; $i < 3; $i++)
                        <div class="col-md-3 ">
                            {!!$videos[$i]->video!!}
                        </div>
                    @endfor
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        @for ($i = 3; $i < 6; $i++)
                        <div class="col-md-3 ">
                            {!!$videos[$i]->video!!}
                        </div>
                    @endfor
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        @if (count($videos) <= 9)
                            @for ($i = 6; $i < count($videos); $i++)
                                <div class="col-md-3 ">
                                    {!!$videos[$i]->video!!}
                                </div>
                            @endfor
                        @else
                            @for ($i = 6; $i < 9; $i++)
                                <div class="col-md-3 ">
                                    {!!$videos[$i]->video!!}
                                </div>
                            @endfor
                        @endif
                        
                    </div>
                </div>
            @else
                <p>Pas de videos</p>
            @endif
            
        </div>
        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="pt-5">
    <a href=""><h1 class="ml-5 pl-5 text-light">Videos a ver</h1></a>
    {{-- Carousel Videos a ver --}}
    <div id="carousel2" class="carousel slide py-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-3 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-3 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-3 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-3 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="pt-5">
    <a href=""><h1 class="ml-5 pl-5 text-light">Videos de Programaçao</h1></a>
    {{-- Carousel Videos de Programaçao --}}
    <div id="carousel3" class="carousel slide py-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-4 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-4 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-4 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 ">
                        <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/gphzDRBl-Mo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>