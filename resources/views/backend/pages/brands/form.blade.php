@extends("backend.master")
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h1>
            Input your Brand Detals!
        </h1>
        <form action="{{route('sotre.brand')}}" method="post" class="was-validated" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Brand Name</label>
                <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Brand Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Brand Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Brand type" >
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</main>
@endsection
