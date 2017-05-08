@extends('admin.dashboard')

@section('content')



<div class="widget-box">
  <h1>Filter Population By Gender</h1>
  <div id="search">
    <form class="" action="/filter/gender" method="post">
      {{csrf_field()}}
      <div class="controls">
        <select name="gender">
          <option>Male</option>
          <option>Female</option>
          <option>Others</option>
        </select>
      </div>
      <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
    </form>
  </div>
  @yield('results')

</div>
@endsection
