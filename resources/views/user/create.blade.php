<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Users Form </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Add User</h2>
            </div>
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              
                    <input type="hidden" name="role"  class="form-control" value="spectator">
                  
                <div class="form-group">
                    <label for="name">User Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter User Name">
                    @error('name')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                    @error('email')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                    @error('password')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>
