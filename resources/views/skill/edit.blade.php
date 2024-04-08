<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Skill</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Skill</h2>
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>
   
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">{{ session('status') }}</div>
    @endif
  
    <form action="{{ route('skill.update', $skills->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ $skills->name }}" class="form-control" placeholder="Name">
                    @error('name')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="percentage">Percentage:</label>
                    <input type="number" name="percentage" value="{{ $skills->percentage }}" class="form-control" placeholder="Percentage">
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
