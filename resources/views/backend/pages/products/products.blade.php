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
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Product Name</th>
          <th scope="col">Pomo Code </th>
          <th scope="col">qty</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mango</td>
          <td>#dh9f</td>
          <td>2</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Tv</td>
          <td>#9x3r</td>
          <td>1</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>banana</td>
          <td>#5b9d2 #9cfd</td>
          <td>8</td>
        </tr>
      </tbody>
    </table>
    <a href="{{route('add.products')}}">
      <button type="button" class="btn btn-success">Add Products</button>
    </a>
  </div>

</body>

</html>
@endsection