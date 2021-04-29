<x-layout>
    @if ($ad)

    <div class="container mt-5 pt-5">
      <div class="row">
          <div class="mb-3">
              <div class="row g-0 align-items-center">

                {{--Tasto Reject  --}}
                <div class="col-3">
                  <a href="{{route('revisor.index')}}" class="btn btn-primary">Torna alla Zona Revisori</a>
                </div>
                
                {{-- Carousel --}}
                <div class="col-md-3">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="/img/cat.jfif" class="d-block w-100 img-show" alt="{{$ad->name}}">
                        </div>
                        <div class="carousel-item">
                          <img src="/img/cat1.jfif" class="d-block w-100 img-show" alt="{{$ad->name}}">
                        </div>
                        <div class="carousel-item">
                          <img src="/img/cat3.jfif" class="d-block w-100 img-show" alt="{{$ad->name}}">
                        </div>
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
                <div class="col-md-3">
                  <div class="card-body ms-5">
                    <h5 class="card-title fs-2">{{$ad->title}}</h5>
                    <p class="card-text tc-accent fs-3">€ {{$ad->price}}</p>
                    <a href="{{route('category', ['cat'=>$ad->category->id])}}"><p class="card-text tc-black">{{$ad->category->name}}</p></a>
                    <small class="card-text date-style"><i>{{$ad->created_at->format('d/m/Y')}}</i></small>
                  </div>
                </div>

                {{-- Tasto Accept --}}
                <div class="col-md-3">
                  <form method="POST" action="{{route('revisor.accept', $ad->id)}}">
                    @csrf
                        <button type="submit" class="btn btn-success">Accetta</button>
                  </form>
                </div>
              </div>
            </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6">
        <p class="card-text text-justify">{{$ad->description}}</p>
      </div>
    </div>
  </div>

  @else
<div class="text-center mt-5">
  <h3>Non ci sono annunci nel cestino</h3>
  <img class="img-revisor mb-3" src="/img/Emptye.png" alt="Niente da fare">
  <div class="col-2 mx-auto">
    <a href="{{route('revisor.index')}}" class="btn btn-primary">Torna alla Zona Revisori</a>
  </div>
</div>

    @endif
<div class="dummyHeight"></div>
</x-layout>