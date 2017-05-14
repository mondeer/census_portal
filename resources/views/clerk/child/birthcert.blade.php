@extends('clerk.dashboard')

@section('content')
<a href="{{ route('/birthcert',['download'=>'pdf']) }}">Download PDF</a>
      @foreach($children as $person)
            <div class="row">
              <div class="span9 text-center col-md-offset-2">
                <h1>Certificate of Birth</h1>
                <h2>EMC</h2>
              </div>
              <div class="span3">
                <br><br>
                <h2 class="text-right">{{$person->birthcert}}</h2>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="span3">
                <p> <b>First Name:&emsp;</b> {{$person->f_name}}</p>
              </div>
              <div class="span3">
                <p> <b>Middle Name:&emsp;&emsp;&emsp;</b> {{$person->m_name}}</p>
              </div>
              <div class="span3">
                <p> <b>Last Name:</b> {{$person->l_name}}</p>
              </div>
            </div>

            <div class="row">
              <div class="span3">
                <p> <b>Constituency:</b> {{$person->constituency}}</p>
              </div>
              <div class="span3">
                <p> <b>Location:&emsp;&emsp;&emsp;&emsp;&emsp; </b> {{$person->location}}</p>
              </div>
              <div class="span3">
                <p> <b>Ward:&emsp;&emsp;&emsp;</b> {{$person->ward}}</p>
              </div>
            </div>

            <div class="row">
              <div class="span3">
                <p> <b>Date of Birth:</b> {{$person->dob}}</p>
              </div>
              <div class="span3">
                <p> <b>District Of Birth:&emsp;&emsp;</b> {{$person->district_of_birth}}</p>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="span3">
                <p> <b>Gender:&emsp;</b> {{$person->gender}}</p>
              </div>
              <div class="span3">
                <p> <b>Fathers Name:</b> {{$person->name_of_father}}</p>
              </div>
              <div class="span3">
                <p> <b>Location:&emsp;</b> {{$person->name_of_mother}}</p>
              </div>

            </div>
            <br><br><br>
            <div class="span6">
              <em>This certificate is system generated, can be used for official purposes.</em>
            </div>

        @endforeach
@endsection
