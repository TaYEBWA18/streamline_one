@extends('patients.layouts')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> SHOW PATIENT</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $patient->first_name }}
                {{ $patient->last_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone number:</strong>
                {{ $patient->phone_number }}
            </div>
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $patient->gender }}
            </div>
            <div class="form-group">
                <strong>NN:</strong>
                {{ $patient->nin }}
            </div>
            <div class="form-group">
                <strong>Date of Birth:</strong>
                {{ $patient->date_of_birth }}
            </div>
            <div class="form-group">
                <strong>NEXT OF KIN:</strong>
                {{ $patient->next_of_kin }}
            </div>
            <div class="form-group">
                <strong>Phone:</strong>
                {{ $patient->nok_phone_number }}
            </div>
            <div class="form-group">
                <strong>Relationship:</strong>
                {{ $patient->relationship=='1'? 'Mother':
                ($patient->relationship=='2'? 'Father':
                ($patient->relationship=='3'? 'Daughter':
                ($patient->relationship=='4'? 'Son': 'Spouse'
                )))
                }}
            </div>
            
    
        </div>
    </div>
@endsection