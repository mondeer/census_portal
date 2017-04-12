@extends('admin.dashboard')

@section('content')
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h5>Death Registration</h5>
  </div>
  <div class="widget-content nopadding">
    <form action="#" method="get" class="form-horizontal">

      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <div class="control-group">
        <label class="control-label">Names</label>
        <div class="controls">
          <input class="span7" type="text" name="names" value="{{old('names')}}" placeholder="Enter Names of the Deceased">
        </div>
        <label class="control-label">Constituency</label>
        <div class="controls">
          <input class="span5" type="text" name="constituency" value="{{old('constituency')}}" placeholder="Constituency">
        </div>
          <label class="control-label">Location</label>
          <div class="controls">
            <input class="span5" type="text" name="location" value="{{old('location')}}" placeholder="Location">
          </div>
          <label class="control-label">Ward</label>
          <div class="controls">
            <input class="span5" type="text" name="ward" value="{{old('ward')}}" placeholder="Ward">
          </div>
      </div>

      <div class="control-group">
        <label class="control-label">Date of Birth</label>
        <div class="controls">
          <input class="span5" type="date" name="dob" value="{{old('dob')}}" placeholder="Date of Birth">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Date of Death</label>
        <div class="controls">
          <input class="span5" type="date" name="dod" value="{{old('dod')}}" placeholder="Date of Death">
        </div>
      </div>


      <div class="control-group">
        <label class="control-label">Gender</label>
        <div class="controls">
          <label>
            <input type="radio" name="gender" />
            Male</label>
          <label>
            <input type="radio" name="gender" />
            Female</label>
        </div>
      </div>


      <div class="form-actions">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </form>
  </div>
</div>
@endsection
