@extends("backend.master")
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h1>
            Input your Information!
        </h1>
        <form action="{{route('stor.categories')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gender</label><br>
                <input type="radio" name="radio"id="male">
                <label for="male">Male</label><br>
                <input type="radio" name="radio"id="female">
                <label for="female">Female</label>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</main>
@endsection