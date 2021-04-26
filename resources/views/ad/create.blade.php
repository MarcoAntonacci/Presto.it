<x-layout>
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1>Inserisci il tuo annuncio:</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
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
                    <label for="adPrice" class="form-label">Descrizione annuncio:</label>
                    <textarea name="description" id="adDescription" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Inserisci Annuncio</button>
              </form>
        </div>
    </div>
</div>








</x-layout>