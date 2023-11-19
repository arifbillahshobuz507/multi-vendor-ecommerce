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
    <h1>Customer List</h1>
    <hr>
    <a href="{{route('add.customer')}}">
      <button type="button" class="btn btn-success">Add Customer</button>
    </a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Image</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($customers as $customer )
        <tr>
          <th scope="row">{{$customer->id}}</th>
          <td>{{$customer->first_name}}</td>
          <td>{{$customer->last_name}}</td>
          <td>
            <img class="border border-warning rounded-pill" width="110" height="50" src="{{url('customer/image/' . $customer->image)}}" alt="">
          </td>
          <td>{{$customer->gmail}}</td>
          <td>{{$customer->phone}}</td>
          <td>{{$customer->gender}}</td>
          <td>
            <a href="#">View</a>
            <a href="#">Edit</a>
            <a href="#">Delet</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$customers->links()}}
  </div>
</body>

</html>
@endsection();