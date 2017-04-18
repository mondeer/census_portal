@extends('admin.dashboard')

@section('content')
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h3>Deregister Persons</h3>
  </div>
  <div class="widget-content">
    <table class="table table-bordered table-hover">

              <thead>
              <tr>
                  <th> Id.</th>
                  <th> Birth Certificate No</th>
                  <th> National ID</th>
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
                              {{ $adult->national_id }}
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
                            <td><form class="delete" action="/adult/destroy/{{ $adult->id }}" method="post">
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
