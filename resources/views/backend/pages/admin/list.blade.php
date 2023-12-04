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
    <h1>Admin</h1>
    <hr>   
    <table class="table">
      <thead>
        <tr>          
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Role</th>
        </tr>
      </thead>
      <tbody>
        @foreach($admins as $admin)
        <tr>          
          <td>{{$admin->gmail}}</td>         
          <td>{{$admin->phone}}</td>
          <td>{{$admin->role}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$admins->links()}}
  </div>
</body>

</html>
@endsection();