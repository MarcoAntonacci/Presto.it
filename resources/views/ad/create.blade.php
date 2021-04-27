<x-layout>

    <div class="container-fluid body-create">
        <div class="row align-self-center">
          <div class="col-lg-10 col-xl-9 m-auto">
            <div class="card card-signin flex-row my-5 ">
              <div class="card-img-left3 d-none d-md-flex">
                 <!-- Background image for card set in CSS! -->
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Inserisci annuncio</h5>
            <form method="POST" action="{{route('ad.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="adTitle" class="form-label">Titolo annuncio:</label>
                  <input type="text" name="title" class="form-control" id="adTitle">
                </div>
                <div class="mb-3">
                  <label for="adPrice" class="form-label">Prezzo:</label>
                  <input type="text" name="price" class="form-control" id="adPrice">
                </div>
                <div class="mb-3">
                    <label for="adCategory" class="form-label">Category:</label>
                    <select name="category">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>
                <div class="mb-3">
                    <label for="adPrice" class="form-label">Descrizione annuncio:</label>
                    <textarea name="description" id="adDescription" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Inserisci Annuncio</button>
              </form>
            </div>
        </div>
      </div>
    </div>
</div>

</x-layout>