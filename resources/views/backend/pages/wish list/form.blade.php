@extends("backend.master")
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h1>
            Input your Brand Detals!
        </h1>
        <form action="{{route('sotre.brand')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Brand Name</label>
                <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Brand Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Brand Logo</label>
                <input type="file" name="brand_logo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Brand Type</label>
                <input type="text" name="brand_type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Brand type">
            </div>            
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</main>
@endsection