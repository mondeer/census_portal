@extends('admin.reports.location')

@section('results')

  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h3>{{$locale}} Registered Persons</h3>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered table-positive table-hover">

              <thead>
              <tr>
                  <th> Id.</th>
                  <th> Birth Certificate No</th>
                  <th> Full Names</th>
                  <th> District of Birth</th>
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

                  @foreach($adults as $adult)

                          <tr>
                            <td>
                              {{$adult->id}}
                            </td>
                            <td>
                              {{ $adult->birthcert }}
                            </td>
                            <td>
                              {{$adult->f_name}} {{$adult->m_name}} {{$adult->l_name}}
                            </td>
                            <td>
                              {{$adult->district_of_birth}}
                            </td>
                            <td>
                              {{$adult->constituency}}
                            </td>
                            <td>
                              {{$adult->location}}
                            </td>
                            <td>
                              {{$adult->ward}}
                            </td>
                            <td>
                              {{$adult->dob}}
                            </td>
                            <td>
                              {{$adult->gender}}
                            </td>
                            <td>
                              {{$adult->name_of_father}}
                            </td>
                            <td>
                              {{$adult->name_of_father}}
                            </td>
                            <td><a href="/adult/edit/{{$adult->id}}">Edit</a></td>
                          </tr>

                  @endforeach

            </table>
  </div>
</div>
@endsection
