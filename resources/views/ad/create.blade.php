<x-layout>
  <div class="container">
    @if ($errors->any())
        <div class="alert alert-danger my-5">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="container-fluid body-create">
        <div class="row align-self-center">
          <div class="col-lg-10 col-xl-9 m-auto">
            <div class="card card-signin flex-row my-5 ">
              <div class="card-img-left3 d-none d-md-flex">
                 <!-- Background image for card set in CSS! -->
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">{{ __('ui.inserisci annuncio') }}</h5>
            <form method="POST" action="{{route('ad.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                
                <div class="mb-3">
                  <label for="adTitle" class="form-label">{{ __('ui.titolo annuncio') }}</label>
                  <input type="text" name="title" class="form-control" id="adTitle">
                </div>
                <div class="mb-3">
                  <label for="adPrice" class="form-label">{{ __('ui.prezzo') }}</label>
                  <input type="text" name="price" class="form-control" id="adPrice">
                </div>
                <div class="mb-3">
                    <label for="adCategory" class="form-label">{{ __('ui.categoria') }}</label>
                    <select name="category">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>
                <div class="mb-3">
                  <label for="adImages" class="form-label">{{ __('ui.immagini') }}</label>
                  <div class="dropzone" id="drophere"></div>
                  @error('images')
                    <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="adPrice" class="form-label">{{ __('ui.descrizione annuncio') }}</label>
                    <textarea name="description" id="adDescription" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('ui.inserisci annuncio') }}</button>
              </form>
            </div>
        </div>
      </div>
    </div>
</div>

</x-layout>