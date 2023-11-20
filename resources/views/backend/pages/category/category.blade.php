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
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Image</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($categories as $category)
            <tr>
              <th scope="row">{{$category->id}}</th>
                <td >
                    <img width="100" src="{{url('category/image/' .$category->image)}}">
                </td>
              <td >{{$category->name}}</td>
                <td>
                    <a class="btn btn-success" href="#">View</a>
                    <a class="btn btn-success" href="#">Edit</a>
                    <a class="btn btn-danger" href="#">Delet</a>
                </td>
            </tr>
          @endforeach

          </tbody>
        </table>
      </div>
    </body>
</html>
@endsection
