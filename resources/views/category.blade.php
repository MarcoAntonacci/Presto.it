<x-layout>
    <div class="container">
      <div class="row">
        <h2 class="mt-5 text-center">{{$category}}</h2>
      </div>
        <div class="row">
          @if (count($ads)==0)
          <div class="text-center">
              <h3>Ops... sembra che non ci siano ancora annunci in questa categoria...</h3>
              <img class="img-revisor" src="/img/ops.png" alt="Niente annunci">
              <p>Vuoi essere il primo?</p>
              <a class="btn btn-outline-secondary" href="{{route('ad.create')}}">Inserisci il tuo annuncio</a>
            </div>
          @endif
            @foreach ($ads as $ad)
            <div class="col-12 col-md-4">
                <div class="card shadow-ads">
                    @foreach ($ad->adImages as $image)
                      <img src="{{$image->getUrl(414, 276)}}" class="card-img-top" alt="...">
                    @endforeach
                    <div class="card-body">
                      <h5 class="card-title">{{$ad->title}}</h5>
                      <p class="card-text">{{$ad->price}}</p>
                      <p class="card-text">{{$ad->description}}</p>
                      <a href="{{route('ad.show', compact('ad'))}}" class="btn btn-primary">Dettaglio dell'annuncio</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
</div>






</x-layout>