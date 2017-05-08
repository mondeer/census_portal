@extends('admin.reports.gender')

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

                  @foreach($persons as $person)

                          <tr>
                            <td>
                              {{$person->id}}
                            </td>
                            <td>
                              {{ $person->birthcert }}
                            </td>
                            <td>
                              {{$person->f_name}} {{$person->m_name}} {{$person->l_name}}
                            </td>
                            <td>
                              {{$person->district_of_birth}}
                            </td>
                            <td>
                              {{$person->constituency}}
                            </td>
                            <td>
                              {{$person->location}}
                            </td>
                            <td>
                              {{$person->ward}}
                            </td>
                            <td>
                              {{$person->dob}}
                            </td>
                            <td>
                              {{$person->gender}}
                            </td>
                            <td>
                              {{$person->name_of_father}}
                            </td>
                            <td>
                              {{$person->name_of_father}}
                            </td>
                            <td><a href="/adult/edit/{{$person->id}}">Edit</a></td>
                          </tr>

                  @endforeach

            </table>
  </div>
</div>
@endsection
