<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Registrati:</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                          <label for="userMail" class="form-label">Indirizzo Mail:</label>
                          <input type="email" name="email" class="form-control" id="userMail">
                        </div>
                        <div class="mb-3">
                          <label for="userPass" class="form-label">Password:</label>
                          <input type="password" name="password" class="form-control" id="userPass">
                        </div>

                        <button type="submit" class="btn btn-primary">Accedi</button>
                  </form>
            </div>
        </div>
    </div>
    
    </x-layout>