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
                <th scope="col">Categori Name</th>
            </tr>
          </thead>
          <tbody>
          @foreach($categories as $category)
            <tr>
              <th class="col-4" scope="row">{{$category->id}}</th>
                <td class="col-4">
                    <img width="100" src="{{url('category/image/' .$category->image)}}">
                </td>
              <td class="col-4">{{$category->name}}</td>
            </tr>
          @endforeach

          </tbody>
        </table>
      </div>
    </body>
</html>
@endsection
