@extends('admin.dashboard')

@section('content')



<div class="widget-box">
  <h1>Filter Population By Ward</h1>
  <div id="search">
    <form class="" action="/filter/ward" method="post">
      {{csrf_field()}}
      <div class="controls">
        <select name="ward">
          <option></option>
          <option>Chemoibon</option>
          <option>Chepsigot</option>
          <option>Kabiemit</option>
          <option>Kamwosor</option>
          <option>Kaptarakwa</option>
          <option>Kibargoi</option>
          <option>Kitany</option>
          <option>Kocholwo</option>
          <option>Maoi</option>
          <option>Marichor</option>
          <option>Metkei</option>
          <option>Mosop</option>
          <option>Nyaru</option>
          <option>Soy</option>
          <option>Tumeiyo</option>
          <option>Central</option>
          <option>Irong</option>
          <option>Kapkonga</option>
          <option>Kapterik</option>
          <option>Kessup</option>
          <option>Sergoit</option>
          <option>Kamogich</option>
          <option>Kapchemutwa</option>
          <option>Keu</option>
          <option>Kiptuilong</option>
          <option>Kokwao</option>
          <option>Mutei</option>
          <option>Embobut/Embolot</option>
          <option>Endo</option>
          <option>Kapyego</option>
          <option>Sambirir</option>
          <option>Arror</option>
          <option>Chebororwa</option>
          <option>Cherang'any</option>
          <option>Chesuman</option>
          <option>Kamoi</option>
          <option>Kapsowar</option>
          <option>Koibarak</option>
          <option>Kuserwo</option>
          <option>Lelan<</option>
          <option>Moiben</option>
          <option>Sengwer</option>
        </select>
      </div>
      <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
    </form>
  </div>
  @yield('results')

</div>
@endsection
