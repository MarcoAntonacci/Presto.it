<x-layout>

    @if ($ad)

    <div class="container mt-5">
        <div class="row text-center">
          <h3 class="mb-5">Hai ancora <span class="tc-accent fs-1"> {{\App\Models\Ad::ToBeRevisionedCount()}}</span> annuncio/i da revisionare!</h3>
            <div class="mb-3">
                <div class="row align-items-center justify-content-center">



                    {{-- Carousel --}}
                    <div class="col-12 col-md-5">
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">

                            @foreach ($ad->adImages as $key => $image)
                              <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <img src="{{$image->getUrl(414, 276)}}" class="card-img-top" alt="...">
                              </div>
                            @endforeach

                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                    </div>

                    {{-- Dati --}}
                    <div class="col-12 col-md-3">
                      <div class="card-body">
                        <h5 class="card-title fs-2">{{$ad->title}}</h5>
                        <p class="card-text tc-accent fs-3">€ {{$ad->price}}</p>
                        <a href="{{route('category', ['cat'=>$ad->category->id])}}"><p class="card-text tc-black">{{$ad->category->name}}</p></a>
                        <small class="card-text date-style"><i>{{$ad->created_at->format('d/m/Y')}}</i></small>
                      </div>
                    </div>

                </div>
              </div>
      </div>
      {{-- Descrizione --}}
      <div class="row justify-content-center">
        <div class="col-11 col-md-6 card">
          <p class="card-text text-justify">{{$ad->description}}</p>
        </div>
      </div>

      {{-- Tasti --}}
        <div class="row justify-content-center mt-4">
          <div class="col-12 col-md-2">
            <a href="{{route('revisor.trash')}}" class="btn btn-primary mb-3">Vai al cestino</a>
          </div>
          <div class="col-12 col-md-2">
            <form method="POST" action="{{route('revisor.reject', $ad->id)}}">
                @csrf
                    <button type="submit" class="btn btn-danger mb-3">Rifiuta</button>
              </form>
          </div>
          <div class="col-12 col-md-2">
            <form method="POST" action="{{route('revisor.accept', $ad->id)}}">
                @csrf
                    <button type="submit" class="btn btn-success mb-3">Accetta</button>
              </form>
          </div>

        </div>

    </div>



@else
<div class="text-center mt-5">
  <h3>Non ci sono annunci da revisionare</h3>
  <img class="img-revisor mb-3" src="/img/Emptye.png" alt="Niente da fare">
  <div class="col-2 mx-auto">
    <a href="{{route('revisor.trash')}}" class="btn btn-primary">Vai al cestino</a>
  </div>
</div>

@endif

<div class="dummyHeight"></div>
</x-layout>
