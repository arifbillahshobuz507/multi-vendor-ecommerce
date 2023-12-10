@extends("backend.master")
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h3 class="mt-3">
            Input Admin Information!
        </h3>
        <div class="col container mt-4 pt-4 pb-4 rounded border border-warning">
            <form action="{{route('update.admin', $admins->id)}}" method="post" class="was-validated" enctype="multipart/form-data">
                @csrf
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
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>

</main>
@endsection