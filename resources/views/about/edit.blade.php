<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            padding-top: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-submit {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit About</h2>
            </div>
        </div>
    </div>
   
    @if(session('status'))
        <div class="alert alert-success mt-3">{{ session('status') }}</div>
    @endif
  
    <form action="{{ route('about.update', $about->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" class="form-control" value="{{ $about->description }}" placeholder="Enter Description">
                    @error('description')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $about->name }}" placeholder="Enter Name">
                    @error('name')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="text" name="birthday" class="form-control" value="{{ $about->birthday }}" placeholder="Enter Birthday">
                    @error('birthday')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="place_of_birth">Place of Birth:</label>
                    <input type="text" name="place_of_birth" class="form-control" value="{{ $about->place_of_birth }}" placeholder="Enter Place of Birth">
                    @error('place_of_birth')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="place_of_birth">Address:</label>
                    <input type="text" name="address" class="form-control" value="{{ $about->address }}" placeholder="Enter Address">
                    @error('address')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" name="age" class="form-control" value="{{ $about->age }}" placeholder="Enter Age">
                    @error('age')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" class="form-control" value="{{ $about->phone }}" placeholder="Enter Phone">
                    @error('phone')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ $about->email }}" placeholder="Enter Email">
                    @error('email')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="degree">Degree:</label>
                    <input type="text" name="degree" class="form-control" value="{{ $about->degree }}" placeholder="Enter Degree">
                    @error('degree')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                <a href="{{ route('about.index') }}" class="btn btn-primary btn-submit">Back</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>
