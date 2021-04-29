<x-layout>

    @if(session('Access.denied'))
        <div class="alert alert-danger">Accesso non consentito</div>
    @endif

    @if(session('message'))
        <div class="alert alert-success text-center">La tua richiesta è stata inoltrata con successo</div>
    @endif


{{-- MASTHEAD --}}

@guest
    <div class="masthead m-0">
        <div class="position-relative overflow-hidden p-3 p-md-5 text-center my-0">
            <div class="col-md-5 p-lg-5 me-auto my-5 mast-smoke">
            <h1 class="display-4 tc-accent font-weight-normal">E' arrivato il momento di fare affari!</h1>
            <p class="lead font-weight-normal tc-black"></p>
            <a class="btn btn-outline-secondary" href="{{route('register')}}">Inizia Presto</a>
            </div>
        </div>
    </div>
@else
<div class="masthead2 m-0">
    <div class="position-relative overflow-hidden p-3 p-md-5 my-0 text-center">
        <div class="col-md-5 p-lg-5 me-auto my-5 mast-smoke">
        <h1 class="display-4 tc-black font-weight-normal">Cosa vuoi vendere?</h1>
        <p class="lead font-weight-normal tc-black"></p>
        <a class="btn btn-outline-secondary" href="{{route('ad.create')}}">Inserisci il tuo annuncio</a>
        </div>
    </div>
</div>
@endguest

{{-- BARRA DI RICERCA --}}
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <form class="d-flex" method="GET" action="{{route('search')}}">
                <input class="form-control me-2 rounded-pill" name="q" type="search" placeholder="Cosa stai cercando?" aria-label="Cerca">
                <button class="btn btn-primary rounded-pill" type="submit"><i class="fas fa-search"><span> Cerca</span></i></button>
              </form>
        </div>
    </div>
</div>

{{-- CATEGORIES --}}
    <div class="container mt-5">
        <h3 class="text-center my-5">Le nostre categorie:</h3>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($categories as $category)
            <div class="col-12 col-sm-6 col-md-3 mx-auto">
                <div class="card card-style shadow-ads">
                    <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title"><i class="fas fa-shopping-cart"></i> {{$category->name}}</h5>
                    </div>
                    <div class="mb-3">
                        <a href="{{route('category', ['cat'=>$category->id])}}" class="btn btn-outline-light">Esplora</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    {{-- ANNUNCI --}}
    <div class="container mb-5 pb-5">
        <div class="row">
            <h3 class="text-center my-5 pt-5">Gli ultimi annunci inseriti:</h3>
            <div class="container">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($ads as $ad)
                @if ($ad->is_accepted == true)
                        <div class="col-12 col-md-4">
                            <div class="card shadow-ads">
                                <img src="/img/default.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$ad->title}}</h5>
                                    <p class="card-text tc-accent">{{$ad->price}} €</p>
                                    <a href="{{route('category', ['cat'=>$ad->category->id])}}"><p class="card-text tc-black">{{$ad->category->name}}</p></a>
                                    <hr>
                                    <p class="card-text text-truncate">{{$ad->description}}</p>
                                        <div class="text-center">
                                            <a href="{{route('ad.show', compact('ad'))}}" class="btn btn-primary">Dettaglio dell'annuncio</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                @endif
            @endforeach
            </div>
        </div>
        </div>
    </div>
</x-layout>
