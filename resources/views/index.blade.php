<x-layout>
    <div class="container mt-5">
        <div class="row row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($categories as $category)
            <div class="col-12 col-md-2">
                <div class="card">
                    <div class="card-body card-style">
                      <a href="{{route('category', ['cat'=>$category->id])}}"><h5 class="card-title">{{$category->name}}</h5></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <h3>Gli ultimi annunci inseriti:</h3>
        @foreach ($ads as $ad)
        <p>{{$ad->title}}</p>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="/img/default.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$ad->title}}</h5>
                          <p class="card-text">{{$ad->price}}</p>
                          <p class="card-text">{{$ad->description}}</p>
                          <a href="{{route('ad.show', compact('ad'))}}" class="btn btn-primary">Dettaglio dell'annuncio</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
