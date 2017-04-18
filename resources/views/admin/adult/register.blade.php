@extends('admin.dashboard')

@section('content')
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
    <h5>Adult Registration</h5>
  </div>
  <div class="widget-content nopadding">
    <form action="/adult/register" method="POST" class="form-horizontal">

      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <div class="control-group">
        <label class="control-label">Birth Cert No.</label>
        <div class="controls">
          <input class="span7" type="text" name="birthcert" value="{{old('birthcert')}}" placeholder="Enter Birth Certificate Number" required>
        </div>

        <label class="control-label">National ID</label>
        <div class="controls">
          <input class="span7" type="number" name="national_id" value="{{old('national_id')}}" placeholder="National ID" required>
        </div>

        <label class="control-label">First Name</label>
        <div class="controls">
          <input class="span7" type="text" name="f_name" value="{{old('f_name')}}" placeholder="Enter First Name" required>
        </div>

        <label class="control-label">Middle Name</label>
        <div class="controls">
          <input class="span7" type="text" name="m_name" value="{{old('m_name')}}" placeholder="Enter Middle Name" required>
        </div>

        <label class="control-label">Last Name</label>
        <div class="controls">
          <input class="span7" type="text" name="l_name" value="{{old('l_name')}}" placeholder="Enter Last Name" required>
        </div>

        <label class="control-label">District Of Birth</label>
        <div class="controls">
          <select name="district_of_birth">
            <option></option>
            <option></option>
            <option>Keiyo District</option>
            <option>Marakwet District</option>
          </select>
        </div>

        <label class="control-label">Constituency</label>
        <div class="controls">
          <select id="test" name="constituency" onchange="showDiv(this)">
            <option></option>
            <option>Keiyo North</option>
            <option>Keiyo South</option>
            <option>Marakwet East</option>
            <option>Marakwet West</option>
          </select>
        </div>
<!-- Hidden divs for wards -->

        <label class="control-label">Select Ward</label>
        <div class="controls" id="keiyo_south" style="display:none;">
          <select name="ward">
            <option></option>
            <option>Chemoibon</option>
            <option>Chepsigot</option>
            <option>Kabiemit</option>
            <option>Kamwosor</option>
            <option>Kaptarakwa</option>
            <option>Kibargoi</option>
            <option>Kitany</option>
            <option>Kocholwo</option>
            <option>Maoi<</option>
            <option>Marichor</option>
            <option>Metkei</option>
            <option>Mosop</option>
            <option>Nyaru</option>
            <option>Soy</option>
            <option>Tumeiyo</option>
          </select>
        </div>

        <div class="controls" id="keiyo_north" style="display:none;">
          <select name="ward">
            <option></option>
            <option>Central</option>
            <option>Irong</option>
            <option>Kapkonga</option>
            <option>Kapterik</option>
            <option>Kessup</option>
            <option>Sergoit</option>
            <option>Kamogich</option>
            <option>Kapchemutwa</option>
            <option>Keu<</option>
            <option>Kiptuilong</option>
            <option>Kokwao</option>
            <option>Mutei</option>
          </select>
        </div>

        <div class="controls" id="mara_east" style="display:none;">
          <select name="ward">
            <option></option>
            <option>Embobut/Embolot</option>
            <option>Endo</option>
            <option>Kapyego</option>
            <option>Sambirir</option>
          </select>
        </div>

        <div class="controls" id="mara_west" style="display:none;">
          <select name="ward">
            <option></option>
            <option>Arror</option>
            <option>Chebororwa</option>
            <option>Cherang'any</option>
            <option>Chesuman</option>
            <option>Kamoi</option>
            <option>Kapsowar</option>
            <option>Koibarak</option>
            <option>Kuserwo</option>
            <option>Lelan<</option>
            <option>Moiben</option>
            <option>Sengwer</option>
          </select>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Location</label>
        <div class="controls">
          <input class="span5" type="text" name="location" value="{{old('location')}}" placeholder="Location" required>
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
