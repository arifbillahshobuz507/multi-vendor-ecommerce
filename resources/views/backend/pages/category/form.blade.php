@extends('backend.master')
@section('content')
    <main class="fluid ">
        <div class="container col-6">
            <h1>
                Input your Category Information!
            </h1>
            <form action="{{ route('stor.categories') }}" method="post" class="mt-5">
                @csrf
                <div class="form-group">
                    <label class="mt-2" for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter Your Last Name">
                </div>
                @error('category_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label class="mt-2" for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter Your Last Name">
                </div>
                <div class="form-group">
                    <label class="mt-2" for="exampleInputEmail1">Dresscription</label>
                    <textarea name="descripton" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main>
@endsection
