@extends('admin.dashboard')

@section('content')
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h5>New-Born Registration</h5>
  </div>
  <div class="widget-content nopadding">
    <form action="/birth/register" method="POST" class="form-horizontal">

      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <div class="control-group">
        <label class="control-label">Birth Cert No.</label>
        <div class="controls">
          <input class="span7" type="text" name="birthcert" value="{{old('birthcert')}}" placeholder="Enter Birth Certificate Number" required>
        </div>

        <label class="control-label">Names</label>
        <div class="controls">
          <input class="span7" type="text" name="names" value="{{old('names')}}" placeholder="Enter Names of the new-born" required>
        </div>
        <label class="control-label">Constituency</label>
        <div class="controls">
          <input class="span5" type="text" name="constituency" value="{{old('constituency')}}" placeholder="Constituency" required>
        </div>
          <label class="control-label">Location</label>
          <div class="controls">
            <input class="span5" type="text" name="location" value="{{old('location')}}" placeholder="Location" required>
          </div>
          <label class="control-label">Ward</label>
          <div class="controls">
            <input class="span5" type="text" name="ward" value="{{old('ward')}}" placeholder="Ward" required>
          </div>
      </div>

      <div class="control-group">
        <label class="control-label">Date of Birth</label>
        <div class="controls">
          <input class="span5" type="date" name="dob" value="{{old('dob')}}" placeholder="Date of Birth" required>
        </div>
      </div>


      <div class="control-group">
        <label class="control-label">Gender</label>
        <div class="controls">
          <select name="gender">
            <option>Male</option>
            <option>Female</option>
            <option>Others</option>
          </select>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Name of Father</label>
        <div class="controls">
          <input class="span5" type="text" name="name_of_father" value="{{old('name_of_father')}}" placeholder="Name Of Father" required>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Name of Mother</label>
        <div class="controls">
          <input class="span5" type="text" name="name_of_mother" value="{{old('name_of_mother')}}" placeholder="Name Of Mother" required>
        </div>
      </div>


      <div class="form-actions">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </form>
  </div>
</div>
@endsection
