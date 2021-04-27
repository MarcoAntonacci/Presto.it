<x-layout>
<div class="container-fluid">
    <div class="row justify-content-center text-center">
        <div class="col-12 col-md-6">
            @if(session('flash'))
                <div class="alert alert-success">
                {{session('flash')}}
                </div>
            @endif
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h2 class="mt-5 pt-5 text-center">I nostri annunci:</h2>
    </div>
        <div class="row mt-5">
            @foreach ($ads as $ad)
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
            @endforeach
        </div>
</div>



    
    










</x-layout>