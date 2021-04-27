<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="mb-3">
                <div class="row g-0">
                  <div class="col-md-8">
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
                  <div class="col-md-4">
                    <div class="card-body ms-5">
                      <h5 class="card-title fs-2">{{$ad->title}}</h5>
                      <p class="card-text tc-accent fs-3">€ {{$ad->price}}</p>
                      <a href="{{route('category', ['cat'=>$ad->category->id])}}"><p class="card-text tc-black">{{$ad->category->name}}</p></a>
                      <small class="card-text date-style"><i>{{$ad->created_at->format('d/m/Y')}}</i></small>
                      <hr>
                      <p class="card-text text-justify">{{$ad->description}}</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-2">
          <a href="{{route('ad.index')}}" class="btn btn-primary">Torna Indietro</a>
        </div>
      </div>
    </div>

</x-layout>
