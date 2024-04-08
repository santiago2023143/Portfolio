<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Blog</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
  
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Add Blog</h2>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success mb-3">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="blog_image">Image:</label>
            <input type="file" name="blog_image" class="form-control-file">
            @error('blog_image')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
            @error('title')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control" placeholder="Date">
            @error('date')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="details">Details:</label>
            <input type="text" name="details" class="form-control" placeholder="Details">
            @error('details')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('blog.store') }}">Back</a>

    </form>

</div>

</body>
</html>
