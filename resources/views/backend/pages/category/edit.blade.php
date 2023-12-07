@extends('backend.master')
@section('content')
    <main class="fluid ">
        <div class="container col-8">
            <h1>
                Input your Category Information!
            </h1>
            <hr>
            <div class=" container pb-5 rounded border border-warning">
            <form action="{{ route('update.categori', $categories->id) }}" method="post" class="mt-5" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input value="{{$categories->name}}" type="text" name="category_name" class="form-control" id="category_name"
                        aria-describedby="emailHelp" placeholder="Enter Your Category Name">
                </div>
                <div class="form-group">
                    <label class="mt-2" for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label class="mt-2" for="exampleInputEmail1">Dresscription</label>
                    <textarea name="descripton" class="form-control" id="" cols="30" rows="10">{{$categories->descripton}}</textarea>
                </div>                
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
            </div>            
        </div>
    </main>
@endsection
