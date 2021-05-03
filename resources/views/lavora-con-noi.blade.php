<x-layout>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
   @endif
    <div class="container-fluid body-work">
        <div class="row align-self-center">
          <div class="col-lg-10 col-xl-9 m-auto">
            <div class="card card-signin flex-row my-5 shadow">
              <div class="card-img-left4 d-none d-md-flex">
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">{{ __('ui.lavora con noi') }}</h5>
            <form method="POST" action="{{route('lavora.submit')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="adTitle" class="form-label">{{ __('ui.nome') }}:</label>
                  <input type="text" name="name" class="form-control" id="adTitle">
                </div>
                <div class="mb-3">
                  <label for="adPrice" class="form-label">Email:</label>
                  <input name="email" type="email" class="form-control" id="adPrice">
                </div>
                <div class="mb-3">
                    <label for="adPrice" class="form-label">{{ __('ui.msg') }}:</label>
                    <textarea name="message" id="adDescription" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('ui.invia') }}</button>
              </form>
            </div>
        </div>
      </div>
    </div>
</div>
</x-layout>
