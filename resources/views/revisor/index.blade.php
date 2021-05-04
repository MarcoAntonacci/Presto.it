<x-layout>

    @if ($ad)

    <div class="container mt-5">
        <div class="row text-center">
          <h3 class="mb-5">{{ __('ui.hai ancora') }} <span class="tc-accent fs-1"> {{\App\Models\Ad::ToBeRevisionedCount()}}</span> {{ __('ui.annunci da revisionare') }}</h3>
            <div class="mb-3">
                <div class="row align-items-center justify-content-center">

                  {{-- Dati --}}
                  <div class="col-12">
                    <div class="card-body">
                      <h5 class="card-title fs-2">{{$ad->title}}</h5>
                      <p class="card-text tc-accent fs-3">€ {{$ad->price}}</p>
                      <a href="{{route('category', ['cat'=>$ad->category->id])}}"><p class="card-text tc-black">{{$ad->category->name}}</p></a>
                      <small class="card-text date-style"><i>{{$ad->created_at->format('d/m/Y')}}</i></small>
                    </div>
                  </div>

                  {{-- Descrizione --}}
                  <div class="row justify-content-center m-3">
                    <div class="col-11 col-md-6 card">
                      <p class="card-text text-justify">{{$ad->description}}</p>
                    </div>
                  </div>
                  
                {{-- Carousel --}}
                <div class="col-12 col-md-5">

                @foreach ($ad->adImages as $image)
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <img src="{{$image->getUrl(245, 163)}}" class="img-fluid" alt="...">
                      </div>
                      <div class="col-md-4">
                        <div class="card-body">
                          <p class="card-text"></p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

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
