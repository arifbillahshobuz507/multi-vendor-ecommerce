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
        </tr>
        </thead>
        <tbody class="col-12">
            @foreach($subcategories as $category)
            <tr>
                <th class="col-2" scope="row">{{$category->id}}</th>
                <td class="col-2">{{$category->sub_category_name}}</td>
                <td class="col-3">
                    <img width="20%" height="60" src="{{url('/subCategory/image/' . $category->image)}}">
                </td>
                <td class="col-2">{{$category->categories->id}}</td>
                <td class="col-2">456fsd</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $subcategories->links() }}

</div>
</body>
</html>
@endsection
