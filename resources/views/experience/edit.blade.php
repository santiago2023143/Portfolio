<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Experience</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Add Experience</h2>
            </div>
        </div>
    </div>

    @if(session('status'))
    <div class="alert alert-success mt-2" role="alert">
        {{ session('status') }}
    </div>
    @endif
   
    <form action="{{ route('experience.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
            @error('title')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="year_created">Year Created:</label>
            <input type="text" name="year_created" class="form-control" placeholder="Year Created">
            @error('year_created')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" class="form-control" placeholder="Description">
            @error('description')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('experience.store') }}">Back</a>

    </form>
</div>

</body>
</html>
