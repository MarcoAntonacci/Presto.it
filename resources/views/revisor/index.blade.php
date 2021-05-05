<x-layout>

    @if ($ad)

    <div class="container mt-5">
        <div class="row text-center">
          <h3 class="mb-5">{{ __('ui.hai ancora') }} <span class="tc-accent fs-1"> {{\App\Models\Ad::ToBeRevisionedCount()}}</span> {{ __('ui.annunci da revisionare') }}</h3>
            <div class="mb-3">
                <div class="row align-items-center justify-content-center">

                  {{-- Dati --}}
                  <div class="row justify-content-center mb-3">
                    <div class="col-12 col-md-5 card p-3 m-3">
                      <h5>Titolo Annuncio:</h5>
                      <h5 class="card-title fs-2 tc-accent">{{$ad->title}}</h5>
                    </div>
                    <div class="col-12 col-md-5 card p-3 m-3">
                      <h5>Prezzo:</h5>
                      <h5 class="card-title fs-2 tc-accent">€ {{$ad->price}}</h5>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-12 col-md-5 card p-3 m-3">
                      <h5>Categoria:</h5>
                      <a href="{{route('category', ['cat'=>$ad->category->id])}}"><p class="card-text tc-accent fw-bold">{{$ad->category->name}}</p></a>
                    </div>
                    <div class="col-12 col-md-5 card p-3 m-3">
                      <h5>Data:</h5>
                      <small class="card-text fw-bold tc-accent"><i>{{$ad->created_at->format('d/m/Y')}}</i></small>
                    </div>
                  </div>

                  {{-- Descrizione --}}
                  <div class="row justify-content-center m-3">
                    <div class="col-12 col-md-6 card p-3">
                      <h5>Descrizione:</h5>
                      <p class="card-text text-justify">{{$ad->description}}</p>
                    </div>
                  </div>

                {{-- Carousel --}}
                <div class="col-12">
                @foreach ($ad->adImages as $image)
                  <div class="card mb-3">
                    <div class="row p-2">
                      <div class="card-body col-md-6 border-end">
                        <h5 class="tc-accent">Immagine</h5>
                        <img src="{{$image->getUrl(245, 163)}}" class="img-fluid" alt="...">
                      </div>
                      <div class="col-md-3 border-end">
                         <h5 class="tc-accent mt-3">Tags</h5>
                          <div class="p-2">
                            @if ($image->labels)
                              @foreach ($image->labels as $label)
                                  <p class="d-inline">{{$label}},</p>
                              @endforeach
                            @endif
                          </div>                          
                      </div>
                      <div class="col-md-3">
                        <div class="card-body">
                          <h5 class="tc-accent">Revisione Immagini</h5>
                            <p>Adulti: <span class="{{$image->adult}}"></span></p>
                            <p>Satira: <span class="{{$image->spoof}}"></span></p>
                            <p>Medicina: <span class="{{$image->medical}}"></span></p>
                            <p>Violenza: <span class="{{$image->violence}}"></span></p>
                            <p>Razzismo: <span class="{{$image->racy}}"></span></p>                           
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
          </div>
        </div>

      {{-- Tasti --}}
      <div class="container">
        <div class="row justify-content-center mt-4">
          <div class="col-12 col-md-2 text-center m-2">
            <form method="POST" action="{{route('revisor.reject', $ad->id)}}">
              @csrf
                  <button type="submit" class="btn btn-danger">{{ __('ui.rifiuta') }}</button>
            </form>
          </div>
          <div class="col-12 col-md-2">
            <div class="text-center m-2">
              <a href="{{route('revisor.trash')}}" class="btn btn-primary">{{ __('ui.cestino') }}</a>
            </div>
          </div>
          <div class="col-12 col-md-2 text-center m-2">
            <form method="POST" action="{{route('revisor.accept', $ad->id)}}">
              @csrf
                  <button type="submit" class="btn btn-success mb-3">Accetta</button>
            </form>
          </div>

        </div>
      </div>


    </div>



@else
<div class="text-center mt-5">
  <h3>{{ __('ui.niente da revisionare') }}</h3>
  <img class="img-revisor mb-3" src="/img/Emptye.png" alt="Niente da fare">
  <div class="col-2 mx-auto">
    <a href="{{route('revisor.trash')}}" class="btn btn-primary">{{ __('ui.cestino') }}</a>
  </div>
</div>

@endif

<div class="dummyHeight"></div>
</x-layout>
