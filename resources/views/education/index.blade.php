@extends('layouts.app')
@section('content')

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Educational Attainment</h2>
                <a class="btn btn-success" href="{{ route('educations.create') }}">Create Education</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
   
    <table class="table table-bordered mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Grade Level</th>
                <th scope="col">Year Graduated</th>
                <th scope="col">Name of School</th>
                <th scope="col">Details</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($education as $educations)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $educations->grade_level }}</td>
                <td>{{ $educations->year_graduated }}</td>
                <td>{{ $educations->name_of_school }}</td>
                <td>{{ $educations->details }}</td>
                <td>
                    <form action="{{ route('educations.destroy', $educations->id) }}" method="POST">
                        <!-- <div class="btn-group" role="group" aria-label="Education Actions"> -->
                            <a class="btn btn-primary btn-sm" href="{{ route('educations.edit', $educations->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Educational Attainment?')">Delete</button>
                        </div>
                        
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
</div>

@endsection
