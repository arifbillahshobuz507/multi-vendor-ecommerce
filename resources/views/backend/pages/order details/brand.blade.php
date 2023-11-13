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
    <h1>Brand list</h1>
    <hr>    
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Pomo Code </th>
      <th scope="col">qty</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>adidas</td>
      <td>#9990</td>
      <td>20000000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>flla</td>
      <td>#88x3r</td>
      <td>1999999</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>nike</td>
      <td>#5b9d33</td>
      <td>9999999</td>
    </tr>
  </tbody>
</table>
<a href="{{route('add.brands')}}">
  <button type="button" class="btn btn-success" >Add Brands</button>
</a>
</div>
    

</body>

</html>
@endsection