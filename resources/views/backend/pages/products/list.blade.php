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
    <h1>Products list</h1>
    <hr>
      <a href="{{route('add.product')}}">
          <button type="button" class="btn btn-success">Add Products</button>
      </a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Product Name</th>
          <th scope="col">Image</th>
          <th scope="col">Category Name</th>
          <th scope="col">Sub category Name</th>
          <th scope="col">Brand Name</th>
          <th scope="col">Price</th>
          <th scope="col">Stock Quantity</th>
          <th scope="col">Release Date</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($products as $product)
        <tr>
          <th scope="row">{{$product->id}}</th>
          <td>{{$product->id}}</td>
          <td>{{$product->id}}</td>
          <td>{{$product->id}}</td>
          <td>{{$product->id}}</td>
          <td>{{$product->id}}</td>
          <td>{{$product->id}}</td>
          <td>{{$product->id}}</td>
          <td>{{$product->id}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
      {{$products->links()}}

  </div>

</body>

</html>
@endsection
