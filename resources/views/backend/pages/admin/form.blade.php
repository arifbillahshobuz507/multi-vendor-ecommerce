@extends("backend.master")
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h1>
            Input your Information!
        </h1>
        <form action="{{route('sotre.admin')}}" method="post" class="was-validated" enctype="multipart/form-data">
            @csrf   
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="gmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email" required>
            </div>            
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Unique Phone Number" required>
            </div>            
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>            
            </div>     
                       
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    
</main>
@endsection
