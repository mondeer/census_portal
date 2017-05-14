@extends('clerk.dashboard')

@section('content')
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h5>Update Registration Details</h5>
  </div>
  <div class="widget-content nopadding">
    <form action="/clerk/births/edit/{{$birth->id}}" method="POST" class="form-horizontal">

      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" name="_method" value="put">

      <div class="control-group">

        <label class="control-label">Names</label>
        <div class="controls">
          <input class="span7" type="text" name="names" value="{{$birth->names}}" placeholder="Enter Names of the new-born" required>
        </div>
        <label class="control-label">Constituency</label>
        <div class="controls">
          <input class="span5" type="text" name="constituency" value="{{$birth->constituency}}" placeholder="Constituency" required>
        </div>
          <label class="control-label">Location</label>
          <div class="controls">
            <input class="span5" type="text" name="location" value="{{$birth->location}}" placeholder="Location" required>
          </div>
          <label class="control-label">Ward</label>
          <div class="controls">
            <input class="span5" type="text" name="ward" value="{{$birth->ward}}" placeholder="Ward" required>
          </div>
      </div>

      <div class="control-group">
        <label class="control-label">Name of Father</label>
        <div class="controls">
          <input class="span5" type="text" name="name_of_father" value="{{$birth->name_of_father}}" placeholder="Name Of Father" required>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Name of Mother</label>
        <div class="controls">
          <input class="span5" type="text" name="name_of_mother" value="{{$birth->name_of_mother}}" placeholder="Name Of Mother" required>
        </div>
      </div>


      <div class="form-actions">
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </form>
  </div>
</div>
@endsection
