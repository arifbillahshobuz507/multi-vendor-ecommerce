@extends("backend.master")
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brand</title>
</head>

<body>
  <div>
  <div class="row">
      <div class="col-md-10"><h4>Brand List</h4></div>
      <div class="col-md-2 "><a class="btn btn-success" href="{{route('add.brands')}}">Add Brands</a></div>
    </div>
    <hr>
    <div class="container col-11 rounded border border-warning">
      <table class="table table-striped ">
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
            <td>{{$brand->name}}</td>
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
      {{$brands->links()}}
    </div>     
  </div>
</body>

</html>
@endsection
