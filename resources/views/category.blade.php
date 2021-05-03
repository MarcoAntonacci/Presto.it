<x-layout>
    <div class="container">
      <div class="row">
        <h2 class="mt-5 text-center">{{$category}}</h2>
      </div>
        <div class="row">
          @if (count($ads)==0)
          <div class="text-center">
              <h3>{{ __('ui.msg no annunci') }}</h3>
              <img class="img-revisor" src="/img/ops.png" alt="Niente annunci">
              <p>{{ __('ui.vuoi essere il primo') }}</p>
              <a class="btn btn-outline-secondary" href="{{route('ad.create')}}">{{ __('ui.ins il tuo annuncio') }}</a>
            </div>
          @endif
            @foreach ($ads as $ad)
            <div class="col-12 col-md-4">
                <div class="card shadow-ads">
                  @foreach ($ad->adImages as $key => $image)
                      <span class="carousel-item {{$key == 0 ? 'active' : '' }}">
                          <img src="{{$image->getUrl(414, 276)}}" class="card-img-top" alt="...">
                      </span>
                  @endforeach
                    <div class="card-body">
                      <h5 class="card-title">{{$ad->title}}</h5>
                      <p class="card-text tc-accent">{{$ad->price}}</p>
                      <p class="card-text text-truncate">{{$ad->description}}</p>
                      <a href="{{route('ad.show', compact('ad'))}}" class="btn btn-primary">{{ __('ui.dettaglio annuncio') }}</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
</div>






</x-layout>