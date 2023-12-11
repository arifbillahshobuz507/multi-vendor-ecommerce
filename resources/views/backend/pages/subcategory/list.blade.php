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
        <div class="row mt-3">
            <div class="col-md-10">
                <h4>Sub Category list </h4>
            </div>
            <div class="col-md-2 "><a class="btn btn-success" href="{{route('subcategory.add')}}">Add Subcategory </a></div>
        </div>
        <hr>

        <div class="container col-11 mt-5 rounded border border-warning">
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
                        <td>
                            <a class="btn" href="{{route('subcategory.view', $subcategory->id)}}"><i class="fa-solid fa-eye" style="color: #1827fb;"></i></a>
                            <a class="btn" href="{{route('subcategory.edit', $subcategory->id)}}"><i class="fa-solid fa-pen-to-square" style="color: #11e85d;"></i></a>
                            <a class="btn" href="{{route('subcategory.delete', $subcategory->id)}}"><i class="fa-solid fa-trash" style="color: #eb0a0a;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $subcategories->links() }}

    </div>
</body>

</html>
@endsection