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
    <h1>Admin List</h1>
    <hr>
    <a href="{{route('add.users')}}">
      <button type="button" class="btn btn-success">Add Admin</button>
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
    @foreach($admins as $admin)
    <tr>
      <th scope="row">{{$admin->id}}</th>
      <td>{{$admin->first_name}}</td>
      <td>{{$admin->last_name}}</td>
      <td>{{$admin->gmail}}</td>
      <td>{{$admin->phone}}</td>
      <td>{{$admin->password}}</td>
    </tr>  
    
    @endforeach
  </tbody>
</table>
{{$admins->links()}}
  </div>
</body>

</html>
@endsection();

          


        
        