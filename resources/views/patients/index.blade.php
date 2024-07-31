@extends('patients.layouts')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PATIENTS TABLE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('patients.create') }}"> Create New Patient</a>
                <a class="btn btn-success" href="{{ route('home') }}">Back</a>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <!-- table to return the inserted patients' data -->
        <tr>
            <th>Profile</th>
            <th>Name</th>
            <th>Phone number</th>
            <th>Gender</th>
            <th>NIN</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($patients as $patient)
        <tr>
            <td></td>
            <td>{{ $patient->first_name}} {{ $patient->last_name }}</td> <!--concacting name -->
            <td>{{ $patient->phone_number}}</td>
            <td>{{ ($patient->gender =='M')? 'Male':'Female'}}</td>
            <td>{{ $patient->nin}}</td>
            <td>{{ $patient->email}}</td>
            <td>
                <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('patients.show',$patient->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $patients->links() !!}
      
@endsection