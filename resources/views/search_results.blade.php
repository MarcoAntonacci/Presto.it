<x-layout>
     <div class="container">
        <div class="row">
            <h2 class="mt-5 text-center">Risultati ricerca per: {{$q}}</h2>
        </div>
            <div class="row mt-5">
                @foreach ($ads as $ad)
                    @if ($ad->is_accepted == true)
                            <div class="col-12 col-md-4 mb-3">
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
                    @endif
                @endforeach
            </div>
            <div class="row">
                <h2 class="mt-5 text-center">Potrebbe anche interessarti:</h2>
            </div>
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                @foreach ($relations as $relation)
                    @if ($relation->is_accepted == true)
                        @foreach ($ads as $ad )
                            @if ($ad->id !== $relation->id)
                                <div class="col-12 col-md-4">
                                    <div class="card shadow">
                                        <img src="/img/default.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$relation->title}}</h5>
                                            <p class="card-text tc-accent">{{$relation->price}} €</p>
                                            <a href="{{route('category', ['cat'=>$relation->category->id])}}"><p class="card-text tc-black">{{$relation->category->name}}</p></a>
                                            <hr>
                                            <p class="card-text">{{$relation->description}}</p>
                                                <div class="text-center">
                                                    <a href="{{route('ad.show', compact('ad'))}}" class="btn btn-primary">Dettaglio dell'annuncio</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    @endif
                @endforeach
                </div>

    </div>
</x-layout>
