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
    <a href="{{route('add.subcategory')}}">
        <button type="button" class="btn btn-success">Add Sub Categories</button>
    </a>
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
        @foreach($subcategories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->id}}</td>
            <td>{{$category->sub_category_name}}</td>
            <td>
                <img width="10%" src="{{url('/subCategory/image/' . $category->image)}}">
            </td>
            <td>{{$category->category_id}}</td>
            <td>{{$category->descripton}}</td>
            <td>{{$category->id}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $subcategories->links() }}

</div>
</body>
</html>
@endsection
