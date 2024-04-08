@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Experience</h2>
                <a class="btn btn-success" href="{{ route('experience.create') }}">Create Experience</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
    <div class="alert alert-success mt-2" role="alert">
        {{ $message }}
    </div>
    @endif
   
    <div class="table-responsive mt-3">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Year Created</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experience as $exp)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $exp->title }}</td>
                    <td>{{ $exp->year_created }}</td>
                    <td>{{ $exp->description }}</td>
                    <td>
                        <form action="{{ route('experience.destroy', $exp->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('experience.edit', $exp->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Experience?')">Delete</button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
