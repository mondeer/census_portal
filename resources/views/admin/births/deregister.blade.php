@extends('admin.dashboard')

@section('content')
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h3>Registered Births</h3>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-striped table-positive table-hover">

              <thead>
              <tr>
                  <th> Id.</th>
                  <th> Birth Certificate No</th>
                  <th> Full Names</th>
                  <th> Constituency</th>
                  <th> Location</th>
                  <th> Ward</th>
                  <th> Date of Birth</th>
                  <th> Gender</th>
                  <th> Fathers Name</th>
                  <th> Mothers Name</th>

              </tr>
              </thead>
              <tbody>

                  @foreach($births as $birth)

                          <tr>
                            <td>
                              {{$birth->id}}
                            </td>
                            <td>
                              {{ $birth->birthcert }}
                            </td>
                            <td>
                              {{$birth->names}}
                            </td>
                            <td>
                              {{$birth->constituency}}
                            </td>
                            <td>
                              {{$birth->location}}
                            </td>
                            <td>
                              {{$birth->ward}}
                            </td>
                            <td>
                              {{$birth->dob}}
                            </td>
                            <td>
                              {{$birth->gender}}
                            </td>
                            <td>
                              {{$birth->name_of_father}}
                            </td>
                            <td>
                              {{$birth->name_of_father}}
                            </td>
                            <td><form class="delete" action="/births/destroy/{{ $birth->id }}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" value="Delete">
                          </form></td>
                          </tr>

                  @endforeach

            </table>
  </div>
</div>
@endsection
