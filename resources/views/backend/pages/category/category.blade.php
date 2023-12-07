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
    <h1>Category list</h1>
    <hr>
    <a href="{{route('add.categories')}}">
      <button type="button" class="btn btn-success">Add Categories</button>
    </a>

    <div class="col-11 container mt-5 rounded border border-warning">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Image</th>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <div class="mt-5">
          <tbody>
            @foreach($categories as $category)
            <tr>
              <th scope="row">{{$category->id}}</th>
              <td>
                <img width="100" src="{{url('category/image/' .$category->image)}}">
              </td>
              <td>{{$category->name}}</td>
              <td>
              <a class="btn" href="{{route('view.categori', $category->id)}}"><i class="fa-solid fa-eye" style="color: #1827fb;"></i></a>
              <a class="btn" href="{{route('edit.categori', $category->id)}}"><i class="fa-solid fa-pen-to-square" style="color: #11e85d;"></i></a>
              <a class="btn" href="{{route('delete.categori', $category->id)}}"><i class="fa-solid fa-trash" style="color: #eb0a0a;"></i></a>
            </td>
            </tr>
            @endforeach
          </tbody>
        </div>
      </table>
    </div>

  </div>
</body>

</html>
@endsection