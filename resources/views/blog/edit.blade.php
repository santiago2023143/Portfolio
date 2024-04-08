<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Blog</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Edit Blog</h2>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-3">
                {{ session('status') }}
            </div>
            @endif

            <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" value="{{ $blog->image }}" class="form-control-file">
                    @error('image')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
                    @error('title')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" name="date" value="{{ $blog->date }}" class="form-control">
                    @error('date')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="details">Details:</label>
                    <input type="text" name="details" value="{{ $blog->details }}" class="form-control">
                    @error('details')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('blog.index') }}">Back</a>

            </form>
        </div>
    </div>

</div>

</body>
</html>
