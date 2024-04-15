@extends('layouts.app') 
@section('content')

<div class="container-fluid px-4">        

    <div class="row">
        
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Users</h2>
                @if(auth()->user()->role == 'Admin')
                <a class="btn btn-success" href="{{ route('users.create') }}">Create User</a>
                @endif
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
   
    <div class="table-responsive mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    @if(auth()->user()->role == 'Admin')
                    <th scope="col">Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    @if(auth()->user()->role == 'Admin')
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            <a class="btn btn-primary btn-action" href="{{ route('users.edit', $user->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-action" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  
</div>

@endsection
