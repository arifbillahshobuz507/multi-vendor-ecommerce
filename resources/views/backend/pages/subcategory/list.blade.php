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
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody class="col-12">
            @foreach($subcategories as $subcategory)
            <tr>
                <th class="col-2" scope="row">{{$subcategory->id}}</th>
                <td class="col-2">{{$subcategory->name}}</td>
                <td class="col-3">
                    <img width="20%" height="60" src="{{url('/subCategory/image/' . $subcategory->image)}}">
                </td>
                <td class="col-2">{{$subcategory->category->name}}</td>
                <td class="col-2">
                    <a class="btn btn-secondary" href="#">View</a>
                    <a class="btn btn-success" href="#">Edit</a>
                    <a class="btn btn-danger" href="#">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $subcategories->links() }}

</div>
</body>
</html>
@endsection
