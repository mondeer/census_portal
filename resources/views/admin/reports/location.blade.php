@extends('admin.dashboard')

@section('content')



<div class="widget-box">
  <h1>Filter Population By Location</h1>
  <div id="search">
    <form class="" action="/filter/location" method="post">
      {{csrf_field()}}
      <input type="text" name="location" placeholder="Search here..."/>
      <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
    </form>
  </div>
  @yield('results')

</div>
@endsection
