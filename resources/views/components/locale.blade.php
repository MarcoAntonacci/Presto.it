  <form method="POST" action="{{route('locale', $lang)}}">
    @csrf
    <button type="submit" class="btn-lingue" >
      <span class="flag-icon flag-icon-{{$nation}} ms-3 "></span>
    </button>
  </form>

  {{-- <form action="{{route('locale',$lang)}}" method="POST">
    @csrf
    <button type="submit" class="nav-link" style="background-color: transparent; border:none;">
    <span class="flag-icon-{{$nation}}"></span>
    </button>

</form> --}}