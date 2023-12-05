@extends("backend.master")
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h1>
            Edit your Information!
        </h1>
        <form action="{{route('update.admin',$admins->id)}}" method="post" class="was-validated" enctype="multipart/form-data">
           
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="first_name" class="form-control is-valid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your First Name" required>
            </div>
            @error('first_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Last Name" required>
            </div>
            @error('last_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" value="{{$admins->gmail}}" name="gmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email" required>
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="number" value="{{$admins->phone}}" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Unique Phone Number" required>
            </div>
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
                <select name="role" value="{{$admins->role}}" id="" class="form-control" required>
                    <option value="admin">Admin</option>
                    <option value="manage">manegar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date of Birth</label>
                <input type="date" name="birth_day" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            @error('birth_day')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your address" required>
            </div>
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <select name="gender" id="" class="form-control" required>
                    <option value="mail">mail</option>
                    <option value="femail">femail</option>
                </select>
            </div>
            @error('gender')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</main>
@endsection