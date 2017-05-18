@extends('layouts.app')

@section('content')
<br><br><br><br>
  <div class="imond row">
    <h2 class="text-center imondwhite">Register</h2>
    <form class="form-horizontal" role="form" method="POST" action="/postregister">
      {{ csrf_field() }}

      <div class="control-group">
          <label for="name" class="imondwhite control-label" style="font-size: 17px; font-weight:900">First Name</label>

          <div class="span2">
              <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
          </div>
      </div>

      <div class="control-group">
          <label for="name" class="imondwhite control-label" style="font-size: 17px; font-weight:900">Last Name</label>

          <div class="span2">
              <input id="name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
          </div>
      </div>

      <div class="control-group">
          <label for="email" class="imondwhite control-label" style="font-size: 17px; font-weight:900">E-Mail Address</label>

          <div class="span2">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
          </div>
      </div>

      <div class="control-group">
          <label class="imondwhite control-label" style="font-size: 17px; font-weight:900">User Role</label>
          <div class="span2">
            <select class="span2" name="role">
              <option></option>
              <option>admin</option>
              <option>clerk</option>
            </select>
          </div>
      </div>

      <div class="control-group">
          <label for="password" class="imondwhite control-label" style="font-size: 17px; font-weight:900">Password</label>

          <div class="span2">
              <input id="password" type="password" class="form-control" name="password" required>

          </div>
      </div>

      <div class="control-group">
          <label for="password-confirm" class="col-md-4 imondwhite control-label" style="font-size: 17px; font-weight:900">Confirm Password</label>

          <div class="span2">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
      </div>

      <div class="control-group">

              <button type="submit" class="btn btn-primary">
                  Register
              </button>

      </div>
  </form>
  <hr>
  <div class="span3">
    <h3 class="text-right"><a class="imondwhite btn btn-large btn-success text-right" href="/">Alredy have an account? Login</a></h3>
  </div>
</div>

@endsection
