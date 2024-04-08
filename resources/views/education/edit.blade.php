<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Educational Attainment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit Educational Attainment</h2>
            </div>
        </div>
    </div>
   
    @if(session('status'))
        <div class="alert alert-success mt-1 mb-1">{{ session('status') }}</div>
    @endif
  
    <form action="{{ route('educations.update', $education->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="grade_level">Grade Level:</label>
                    <input type="text" name="grade_level" value="{{ $education->grade_level }}" class="form-control" placeholder="Grade Level">
                    @error('grade_level')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="year_graduated">Year Graduated:</label>
                    <input type="text" name="year_graduated" value="{{ $education->year_graduated }}" class="form-control" placeholder="Year Graduated">
                    @error('year_graduated')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name_of_school">Name of School:</label>
                    <input type="text" name="name_of_school" value="{{ $education->name_of_school }}" class="form-control" placeholder="Name of School">
                    @error('name_of_school')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="details">Details:</label>
                    <textarea name="details" class="form-control" placeholder="Details">{{ $education->details }}</textarea>
                    @error('details')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('blog.index') }}">Back</a>
            </div>
        </div>

       

    </form>
</div>

</body>
</html>
