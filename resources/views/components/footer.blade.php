<footer class="bg-accent text-center text-white sticky-bottom mt-5">
    <div class="container p-4">
      <div class="row justify-content-center">
        <div class="col-8">

{{-- SOCIAL --}}
      <section class="mb-4 d-flex justify-content-around tc-black">
            <i class="fab p-2 fa-facebook-f anim1"></i>
  
            <i class="fab p-2 fa-twitter anim1"></i>
  
            <i class="fab p-2 fa-google anim1"></i>

            <i class="fab p-2 fa-instagram anim1"></i>
  
            <i class="fab p-2 fa-linkedin-in anim1"></i>
      </section>
  
{{-- NEWSLETTER --}}
      <section class="">
        <form action="" method="POST">
          @csrf
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <p class="pt-2 tc-white">
                <strong>Iscriviti alla nostra newsletter</strong>
              </p>
            </div>
  
            <div class="col-md-5 col-12">
              <div class="form-outline form-white mb-4">
                <input type="email" id="email" name="email" class="form-control" required="true"/>
                <label class="form-label tc-black" for="email">Indirizzo Email</label>
              </div>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-outline-light mb-4 tc-white">
                Iscriviti
              </button>
            </div>
          </div>
        </form>
        @if(session('flash'))
          <div class="alert alert-success">
            {{session('flash')}}
          </div>
        @endif
      </section>
      
  
      {{-- TESTO GENERICO --}}
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
          repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
          eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
      </section>

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
        {{-- COPYRIGHT --}}
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 SEO & Webmaster: <span class="tc-black"> Team C.O.D.A.</span>
      </div>
    </div>
  </div>
  
  </footer>
