@extends("backend.master")
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <h1>Brand list</h1>
    <hr>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Brand Name</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($brands as $brand)
        <tr>
          <th scope="row">{{$brand->id}}</th>
          <td>{{$brand->id}}</td>
          <td>
            <img class="border border-warning rounded-pill" width="110" height="50" src="{{url('brands/image/' . $brand->image)}}" alt="">
          </td>
          <td>
            <a class="btn btn-success" href="#">View</a>
            <a class="btn btn-success" href="#">Edit</a>
            <a class="btn btn-danger" href="#">Delet</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{route('add.brands')}}">
      <button type="button" class="btn btn-success">Add Brands</button>
    </a>
  </div>
</body>

</html>
@endsection