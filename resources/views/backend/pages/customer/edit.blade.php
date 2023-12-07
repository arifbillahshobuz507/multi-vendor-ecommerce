@extends("backend.master")
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h3 class="mt-3">
            Input Admin Information!
        </h3>
        <div class="col container mt-4 pt-4 pb-4 rounded border border-warning">
        <form action="{{route('update.customer', $customer->id)}}" method="post" class="was-validated" enctype="multipart/form-data">
            @csrf   
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" value="{{$customer->gmail}}" name="gmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email" required>
            </div>            
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="number" value="{{$customer->phone}}" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Unique Phone Number" required>
            </div>        
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
        </div>
    </div>
    
</main>
@endsection
