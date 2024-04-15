@extends('layouts.app')
@section('content')

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog</h2>
                @if(auth()->user()->role == 'Admin')
                <a class="btn btn-success" href="{{ route('blog.create') }}">Create Blog</a>
                @endif
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
   
    <table class="table table-bordered mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Details</th>
                @if(auth()->user()->role == 'Admin')
                <th scope="col">Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($blog as $blogs)
            <tr>
                <td>{{ ++$i }}</td>
                <td>
                    @if($blogs->blog_image)
                        <img src="{{ asset('storage/' . $blogs->blog_image) }}" alt="Blog Image" style="max-width: 100px;">
                    @else
                        <img src="{{ asset('assets/img/portfolio-1.jpg') }}" alt="Placeholder Image" style="max-width: 100px;">
                    @endif
                </td>
                <td>{{ $blogs->title }}</td>
                <td>{{ $blogs->date }}</td>
                <td>{{ $blogs->details }}</td>
                @if(auth()->user()->role == 'Admin')
                <td>
                    <form action="{{ route('blog.destroy', $blogs->id) }}" method="POST">
                        <a class="btn btn-primary btn-sm" href="{{ route('blog.edit', $blogs->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Blog?')">Delete</button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
  
</div>

@endsection
