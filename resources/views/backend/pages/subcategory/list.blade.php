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
    <h1>SubCategory list</h1>
    <hr>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Categori Name</th>
            <th scope="col">Pomo Code </th>
            <th scope="col">qty</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>fruit</td>
            <td>#c54u</td>
            <td>500</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>meat</td>
            <td>#3c9b</td>
            <td>4</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Dairy</td>
            <td>#5b9d2 #9cfd</td>
            <td>60</td>
        </tr>
        </tbody>
    </table>
    <a href="{{route('add.categories')}}">
        <button type="button" class="btn btn-success">Add Categories</button>
    </a>
</div>


</body>

</html>
@endsection
