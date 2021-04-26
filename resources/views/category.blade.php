<x-layout>

    <div class="container">
        <div class="row">
            @foreach ($ads as $ad)
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
            @endforeach
        </div>
</div>






</x-layout>