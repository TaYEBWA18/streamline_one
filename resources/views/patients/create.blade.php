@extends('patients.layouts') 
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Patient</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="#"> Back</a>
        </div>
    </div>            
</div>
   
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
   
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                <input required type="text" name="first_name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Last Name:</strong>
                <input required type="text" name="last_name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Gender:</strong>
                <input required type="radio" id="male" name="gender" value="M">
                <label for="male">Male</label>
                <input required type="radio" id="female" name="gender" value="F">
                <label for="female">Female</label>
            </div>
            <div class="form-group">
                <strong>National ID:</strong>
                <input maxlength="14" minlength="14" required type="text" name="nin" class="form-control" placeholder="NIN">
            </div>
            <div class="form-group">
                <strong>DATE OF BIRTH:</strong>
                <input required type="date" name="date_of_birth" class="form-control" placeholder="01/01/200">
            </div>
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input required type="text" name="phone_number" class="form-control" placeholder="077777731">
            </div>
            <div class="form-group">
                <strong>Marital Status:</strong>
                <input required type="radio" id="single" name="marital_status" value="1">
                <label for="single">Single</label>
                <input required type="radio" id="married" name="marital_status" value="2">
                <label for="married">Married</label>
                <input required type="radio" id="divorced" name="marital_status" value="3">
                <label for="divorced">Divorced</label>
                <input required type="radio" id="widowed" name="marital_status" value="4">
                <label for="widowed">Widowed</label>
            </div>
            <div class="form-group">
                <strong>Next of Kin:</strong>
                <input required type="text" name="next_of_kin" class="form-control" placeholder="NAME">
            </div>
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input required maxlength="10" type="text" name="nok_phone_number" class="form-control" placeholder="077777731">
            </div>
            <div class="form-group">
                <strong>Relationship:</strong>
                <select name="relationship" id="relationship" class="form-control" placeholder="">
                     <option value="1">Mother</option>
                     <option value="2">Father</option>
                     <option value="3">Son</option>
                     <option value="4">Daughter</option>
                     <option value="5">Spouse</option>
                </select>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection