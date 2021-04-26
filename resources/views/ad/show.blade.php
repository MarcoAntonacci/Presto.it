<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{$ad->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
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
                            <img src="/img/cat.jfif" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/img/cat1.jfif" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/img/cat3.jfif" class="d-block w-100" alt="...">
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
                    <div class="card-body">
                      <h5 class="card-title">{{$ad->title}}</h5>
                      <p class="card-text">{{$ad->price}}</p>
                      <p class="card-text">{{$ad->created_at->format('d/m/Y')}}</p>
                      <p class="card-text">{{$ad->description}}</p>
                      <a href="{{route('ad.index')}}" class="btn btn-primary">Torna Indietro</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

</x-layout>
