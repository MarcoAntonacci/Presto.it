<x-layout>
    <div class="container mt-5 pt-5">
        <h3 class="text-center my-5">Le nostre categorie:</h3>
        <div class="row row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($categories as $category)
            <div class="col-12 col-md-2">
                <div class="card card-style">
                    <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title">{{$category->name}}</h5>
                    </div>
                    <div class="mb-3">
                        <a href="{{route('category', ['cat'=>$category->id])}}" class="btn btn-outline-light">Esplora</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container mb-5 pb-5">
        <div class="row">
            <h3 class="text-center my-5 pt-5">Gli ultimi annunci inseriti:</h3>
            <div class="container">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($ads as $ad)
                    <div class="col-12 col-md-4">
                        <div class="card shadow">
                            <img src="/img/default.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$ad->title}}</h5>
                                <p class="card-text tc-accent">{{$ad->price}} €</p>
                                <a href="{{route('category', ['cat'=>$ad->category->id])}}"><p class="card-text tc-black">{{$ad->category->name}}</p></a>
                                <hr>
                                <p class="card-text">{{$ad->description}}</p>
                                    <div class="text-center">
                                        <a href="{{route('ad.show', compact('ad'))}}" class="btn btn-primary">Dettaglio dell'annuncio</a>
                                    </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>  
        </div>
        </div>
    </div>
</x-layout>
