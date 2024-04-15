@extends('layouts.app') 
@section('content')

<div class="container mt-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>About</h2>
                <!-- <a class="btn btn-success" href="{{ route('about.create') }}">Create About</a> -->
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
                    <th scope="col">Description</th>
                    <th scope="col">Name</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Place of Birth</th>
                    <th scope="col">Address</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Degree</th>
                    @if(auth()->user()->role == 'Admin')
                    <th scope="col">Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($about as $info)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $info->description }}</td>
                    <td>{{ $info->name }}</td>
                    <td>{{ $info->birthday }}</td>
                    <td>{{ $info->place_of_birth }}</td>
                    <td>{{ $info->address }}</td>
                    <td>{{ $info->age }}</td>
                    <td>{{ $info->phone }}</td>
                    <td>{{ $info->email }}</td>
                    <td>{{ $info->degree }}</td>
                    @if(auth()->user()->role == 'Admin')
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-sm mr-2" href="{{ route('about.edit', $info->id) }}">Edit</a>
                            <form action="{{ route('about.destroy', $info->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                            </form>
                        </div>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
