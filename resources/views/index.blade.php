<x-layout>
    <h1 class="tc-accent">Presto.it</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
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
