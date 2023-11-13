@extends("backend.master")
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Category</title>
</head>
<body>
<div>
    <h1>SubCategory list</h1>
    <hr>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Sub Categori Name</th>
            <th scope="col">Image</th>
            <th scope="col">Categori Id</th>
            <th scope="col">Pomo Code</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">3</th>
            <td>Dairy</td>
            <td>#5b9d2 #9cfd</td>
            <td>60</td>
        </tr>
        </tbody>
    </table>
    <a href="{{route('add.subcategory')}}">
        <button type="button" class="btn btn-success">Add Categories</button>
    </a>
</div>
</body>
</html>
@endsection
