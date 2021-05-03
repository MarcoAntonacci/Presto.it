{{-- 
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 align-items-center">
            <form class="d-flex" method="GET" action="{{route('search')}}">
                <button id="miniBtn" class="btn btn-primary rounded-pill" type="submit"><i class="fas fa-search"><span> Cerca</span></i></button>
                <input id="miniSearch" class="form-control me-2 rounded-pill" name="q" type="search" placeholder="Cosa stai cercando?" aria-label="Cerca">             
              </form>
        </div>
    </div>
</div> --}}


<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 align-items-center">
            <button id="myBtn2" class="unclear" title="searchBar"><i class="fas fs-2 fa-search"></i></button>
            <span id="searchContainer" class="hide">
            <form class="d-flex" method="GET" action="{{route('search')}}">
                <button id="miniBtn" class="btn btn-primary rounded-pill" type="submit"><i class="fas fa-search"></i></button>
                <input id="miniSearch" class="form-control me-2 rounded-pill" name="q" type="search" placeholder="Cosa stai cercando?" aria-label="Cerca">             
            </form>
        </span>
        </div>
    </div>
</div>