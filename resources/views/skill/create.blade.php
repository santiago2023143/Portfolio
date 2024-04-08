<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Skills</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Add Skills</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('status'))
        <div class="alert alert-success mt-3">{{ $message }}</div>
    @endif
   
    <form action="{{ route('skill.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    @error('name')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="percentage">Percentage:</label>
                    <input type="number" name="percentage" class="form-control" placeholder="Enter Percentage">
                    @error('percentage')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
                <a class="btn btn-primary" href="{{ route('skill.index') }}">Back</a>

            </div>
        </div>
    </form>
</div>

</body>
</html>
