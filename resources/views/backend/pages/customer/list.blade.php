@extends("backend.master")
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer List</title>
</head>

<body>
  <div>
    <div class="container">
      <h3 class="col align-self-start"></h3>
      <h3 class="col align-self-end"></h3>
    </div>
    <div class="row">
      <div class="col-md-10">
        <h4>Customer</h4>
      </div>
    </div>

    <hr>
    <div class="col-8 container mt-5 rounded border border-warning">
      <table class="table col-1">
        <thead>
          <tr>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col container">Action</th>

          </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
          <tr>
            <td>{{$customer->gmail}}</td>
            <td>{{$customer->phone}}</td>
            <td>
              <a class="btn" href="{{route('view.customer', $customer->id)}}"><i class="fa-solid fa-eye" style="color: #1827fb;"></i></a>
              <a class="btn" href="{{route('edit.customer', $customer->id)}}"><i class="fa-solid fa-pen-to-square" style="color: #11e85d;"></i></a>
              <a class="btn" href="{{route('delete.customer', $customer->id)}}"><i class="fa-solid fa-trash" style="color: #eb0a0a;"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


    {{$customers->links()}}
  </div>
</body>

</html>
@endsection();