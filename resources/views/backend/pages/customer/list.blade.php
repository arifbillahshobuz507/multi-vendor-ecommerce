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
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>

      @foreach ($customers as $customer )
    <tr>

        <th scope="row">{{$customer->id}}</th>
        <td>{{$customer->first_name}}</td>
        <td>{{$customer->last_name}}</td>
        <td>{{$customer->gmail}}</td>
        <td>{{$customer->password}}</td>
        <td>{{$customer->phone}}</td>
    </tr>
    @endforeach


  </tbody>
</table>
{{$customers->links()}}
  </div>
</body>

</html>
@endsection();





