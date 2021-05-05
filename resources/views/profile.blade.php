<x-layout>

    <div class="container">
        <div class="row">
            <h2 class="mt-5 text-center">Il tuo profilo:</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mt-5 ">
                <img src="/img/profilovuoto.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-4 mt-5">
                <h5 class="mb-0">Nome Utente: </h5> <span>{{Auth::user()->name}}</span>

                @if (Auth::user()->is_revisor == 1)
                    <h5 class="mb-0 mt-3">Ruolo:</h5><span class="tc-accent"> Revisore</span>
                    @else
                    <h5 class="mb-0 mt-3">Ruolo:</h5><span class="tc-accent"> Utente</span> <br>
                    <small>(Vuoi lavorare con noi? <a class="tc-accent" href="{{route('lavora-con-noi')}}">Clicca qui</a>)</small>
                @endif

                <h5 class="mb-0 mt-3">Email Registrata: </h5> <span class="">{{Auth::user()->email}}</span>
                <h5 class="mb-0 mt-3">Registrato il: </h5> <span class="">{{Auth::user()->created_at->format('d/m/Y')}}</span>
                <h5 class="mb-0 mt-3">Aggiornato il: </h5> <span class="">{{Auth::user()->updated_at->format('d/m/Y')}}</span>
            </div>
        </div>
    </div>








</x-layout>
