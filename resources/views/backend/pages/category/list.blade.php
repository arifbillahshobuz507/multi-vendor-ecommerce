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
  <div class="row mt-3">
      <div class="col-md-10"><h4>Category list </h4></div>
      <div class="col-md-2 "><a class="btn btn-success" href="{{route('category.add')}}">Add Category </a></div>
    </div>
    <hr>

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
              <a class="btn" href="{{route('category.view', $category->id)}}"><i class="fa-solid fa-eye" style="color: #1827fb;"></i></a>
              <a class="btn" href="{{route('category.edit', $category->id)}}"><i class="fa-solid fa-pen-to-square" style="color: #11e85d;"></i></a>
              <a class="btn" href="{{route('category.delete', $category->id)}}"><i class="fa-solid fa-trash" style="color: #eb0a0a;"></i></a>
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