<x-layout>
    @if ($ad)

    <div class="container mt-5 pt-5">
      <div class="row text-center">
        <h3 class="mb-5">Hai ancora <span class="tc-accent fs-1"> {{\App\Models\Ad::ToBeRevisionedCount()}}</span> annuncio/i nel cestino</h3>
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




                {{-- Tasti--}}
            <div class="row justify-content-around">
                <div class="col-12 col-md-3">
                    <a href="{{route('revisor.index')}}" class="btn btn-primary my-4">Torna alla Zona Revisori</a>
                  </div>
                <div class="col-12 col-md-3">
                  <form method="POST" action="{{route('revisor.accept', $ad->id)}}">
                    @csrf
                        <button type="submit" class="btn btn-success my-4">{{ __('ui.accetta') }}</button>
                  </form>
                </div>
            </div>
              </div>
            </div>



  @else
<div class="text-center mt-5">
  <h3>Non ci sono annunci nel cestino</h3>
  <img id="empty" class="img-revisor mb-3" src="/img/Emptye.png" alt="Niente da fare">
  <div class="col-2 mx-auto">
    <a href="{{route('revisor.index')}}" class="btn btn-primary">Torna alla Zona Revisori</a>
  </div>
</div>

    @endif

</x-layout>
