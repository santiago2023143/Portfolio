@extends('layouts.app')
@section('content')

<div class="container mt-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Skill</h2>
                <a class="btn btn-success" href="{{ route('skill.create') }}">Create Skill</a>
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
                    <th scope="col">Percentage</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skill as $skills)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $skills->name }}</td>
                    <td>{{ $skills->percentage }}</td>
                    <td>
                        <form action="{{ route('skill.destroy', $skills->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('skill.edit', $skills->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this skill?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
