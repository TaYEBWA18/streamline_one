<!-- extends the patients layout file which has the styling required for the sections  -->
@extends('patients.layouts')  

@section('content') 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Patient Information</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
            <a class="btn btn-primary" href="{{ route('patients.store') }}"> View Patients</a>
        </div>
    </div>            
</div>
   <!-- catch input for errors -->
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('patients.store') }}" method="POST" enctype='multipart/form-data'> 
<!-- csrf prevents input injection from the browswe-->
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong> 
                <input  type="text" name="first_name" class="form-control" placeholder="Name" value="{{ old('first_name') }}">
            </div>
            <div class="form-group">
                <strong>Last Name:</strong>
                <input  type="text" name="last_name" class="form-control" placeholder="Name" value="{{ old('last_name') }}">
            </div>
            <div class="form-group">
                <strong>Gender:</strong> <!-- for and id should be uniform -->
                <input  type="radio" id="male" name="gender" value="M" @if(old('gender')=='M') checked @endif>
                <label for="male">Male</label>
                <input  type="radio" id="female" name="gender" value="F" @if(old('gender')=='F') checked @endif>
                <label for="female">Female</label>
            </div>
            <div class="form-group">
                <strong>National ID:</strong>
                <input maxlength="14" minlength="14"  type="text" name="nin" class="form-control" placeholder="NIN" value="{{ old('nin') }}">
            </div>
            <div class="form-group">
                <strong>DATE OF BIRTH:</strong>
                <input  type="date" name="date_of_birth" class="form-control" placeholder="01/01/200" value="{{ old('date_of_birth') }}">
            </div>
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input  type="text" name="phone_number" class="form-control" placeholder="077777731" value="{{ old('phone_number') }}">
            </div>
            <div class="form-group">
                <strong>Email:</strong>
                <input  type="email" name="email" class="form-control" placeholder="you@gmail.com"  value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <strong>Marital Status:</strong>
                <input  type="radio" id="single" name="marital_status" value="1" @if(old('marital_status')=='1') checked @endif>
                <label for="single">Single</label>
                <input  type="radio" id="married" name="marital_status" value="2" @if(old('marital_status')=='2') checked @endif>
                <label for="married">Married</label>
                <input  type="radio" id="divorced" name="marital_status" value="3" @if(old('marital_status')=='3') checked @endif>
                <label for="divorced">Divorced</label>
                <input  type="radio" id="widowed" name="marital_status" value="4" @if(old('marital_status')=='4') checked @endif>
                <label for="widowed">Widowed</label>
            </div>
            <div class="form-group">
                <strong>Next of Kin:</strong>
                <input  type="text" name="next_of_kin" class="form-control" placeholder="NAME" value="{{ old('next_of_kin') }}">
            </div>
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input  maxlength="10" type="text" name="nok_phone_number" class="form-control" placeholder="077777731" value="{{ old('nok_phone_number') }}">
            </div>
            <div class="form-group">
                <strong>Relationship:</strong>
                <select name="relationship" id="relationship" class="form-control" placeholder="" >
                     <option value="">Select Relationship</option>
                     <option value="1"@selected(old('relationship')=='1')>Mother</option>  <!--Only for dropdown lists-->
                     <option value="2" @if(old('relationship')=='2') selected @endif>Father</option>
                     <option value="3" @if(old('relationship')=='3') selected @endif>Son</option>
                     <option value="4" @if(old('relationship')=='4') selected @endif>Daughter</option>
                     <option value="5" @if(old('relationship')=='5') selected @endif>Spouse</option>
                </select>
            </div>
            <div class="form-group">
                <strong>Profile Picture:</strong>
                <input  type="file" name="picture" class="form-control">
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection