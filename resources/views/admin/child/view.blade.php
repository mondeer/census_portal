@extends('admin.dashboard')

@section('content')
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h3>Registered Persons</h3>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-striped table-bordered table-hover">

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
                              {{$birth->f_name}} {{$birth->m_name}} {{$birth->l_name}}
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
                            <td><a href="/births/edit/{{$birth->id}}">Edit</a></td>
                          </tr>

                  @endforeach

            </table>
  </div>
</div>
@endsection
