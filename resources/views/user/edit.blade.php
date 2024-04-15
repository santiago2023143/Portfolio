<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit User</h2>
            </div>
        </div>
    </div>
   
    @if(session('status'))
        <div class="alert alert-success mt-3">{{ session('status') }}</div>
    @endif
  
    <form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">User Name:</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter User Name">
                    @error('name')
                     <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Enter Email">
                    @error('email')
                      <div class="alert alert-danger mt-1">{{ $message }}</div>
                   @enderror
                </div>
            </div>
        </div>

     
                    <input type="hidden" name="role" value="{{ $user->role }}" class="form-control" placeholder="Enter Role">
                    
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>
