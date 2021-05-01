<footer class="bg-accent text-center text-white sticky-bottom mt-5">
    <div class="container p-4">
      <div class="row justify-content-center">
        <div class="col-8">

{{-- SOCIAL --}}
      <section class="mb-4 d-flex justify-content-around tc-black">
            <i class="fab p-2 fa-facebook-f anim1 fs-3"></i>

            <i class="fab p-2 fa-twitter anim1 fs-3"></i>

            <i class="fab p-2 fa-google anim1 fs-3"></i>

            <i class="fab p-2 fa-instagram anim1 fs-3"></i>

            <i class="fab p-2 fa-linkedin-in anim1 fs-3"></i>
      </section>
    </div>
</div>

      {{-- TESTO GENERICO --}}
<div class="row justify-content-center align-items-center">
       <div class="col-12 col-md-4">
           <p>PRESTO.it S.p.A.</p>
           <p>Via a caso , 70010, Bari (BA)</p>
           <p>Partita Iva 1234567890</p>
       </div>
       <div class="col-12 col-md-4">
            <img src="/img/presto-logo-white.png" alt="Presto logo" class="img-fluid mini-logo1">
      </div>
       <div class="col-12 col-md-4">
            <p><a href="{{route('lavora-con-noi')}}">Lavora con Noi</a></p>
            <p>Privacy Policy</p>
            <p>Cookie Policy</p>
      </div>

</div>

</div>


  <div class="container-fluid">
    <div class="row">
        {{-- COPYRIGHT --}}
      <div class="text-center p-3 d-flex justify-content-center" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 SEO & Webmaster: <span class="tc-black ms-3"> Team C.O.D.A.</span>
        <span>
          @include('components.locale', ['lang'=>'it', 'nation'=>'it'])
        </span>
        <span>
          @include('components.locale', ['lang'=>'en', 'nation'=>'gb'])
        </span>
        <span>
          @include('components.locale', ['lang'=>'es', 'nation'=>'es'])
        </span>
      </div>
    </div>
  </div>

  </footer>


  {{-- <form method="POST" action="{{route('locale', 'it')}}">
    @csrf
    <button type="submit" >
      <span class="flag-icon flag-icon-it ms-3"></span>
    </button>
  </form> --}}
