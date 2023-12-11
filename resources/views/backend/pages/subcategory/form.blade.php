@extends('backend.master')
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h4>
            Input your Sub Category Information!
        </h4>
        <hr>
        <div class="container rounded border border-warning">
            <form action="{{ route('store.subcategory') }}" method="post" class="mt-5" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="mt-2">Sub Category Name</label>
                    <input type="text" name="sub_category_name" class="form-control" placeholder="Enter Your Sub Category Name" required>
                </div>
                @error('sub_category_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label class="mt-2">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label class="mt-2">Category Name</label>
                    <select class="form-control" name="category_id" required>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label class="mt-2">Dresscription</label>
                    <textarea name="descripton" class="form-control" id="" cols="10" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>

    </div>
</main>
@endsection