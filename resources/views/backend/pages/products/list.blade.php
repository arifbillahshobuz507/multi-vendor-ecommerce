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
          <td>{{$product->name}}</td>
            <td class="col-4">
                <img width="100" src="{{url('product/image/' .$product->image)}}">
            </td>
          <td>{{$product->category->name}}</td>
          <td>{{$product->subcategory->name}}</td>
          <td>{{$product->brand->name}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->release_data}}</td>
          <td>
              <a class="btn btn-success" href="">View</a>
              <a class="btn btn-success" href="{{route('edite.product',$product->id)}}">Edit</a>
              <a class="btn btn-success" href="{{route('delete.product',$product->id)}}">Delet</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
      {{$products->links()}}

  </div>

</body>

</html>
@endsection
