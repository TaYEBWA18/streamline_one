@extends('patients.layouts')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>USERS' TABLE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sign_up') }}"> ADD USER</a>
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
            <th>Email</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td></td>
            <td>{{ $user->name}}</td> <!--concacting name -->
            <td>{{ $user->phone}}</td>
            <td>{{ ($user->gender =='M')? 'Male':'Female'}}</td>
            <td>{{ $user->email}}</td>
           
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $users->links() !!}
      
@endsection