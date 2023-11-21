@extends("backend.master")
@section('content')
<main class="fluid ">
    <div class="container col-6">
        <h1>
            Input your Information!
        </h1>
        <form action="{{route('update.products', $product->id)}}" class="was-validated" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" value="{{$product->name}}" name="product_name" class="form-control"  placeholder="Enter Your Product Name" required>
            </div>
            <div class="form-group">
                <label class="mt-2">Category Name</label>
                <select class="form-control" name="category_id" required>
                    @foreach($categories as $category)
                        <option @if($product->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="mt-2">Sub Category Name</label>
                <select class="form-control" name="subcategory_id" required>
                    @foreach($subcategories as $subcategory)
                        <option @if ($product->subcategory_id==$subcategory->id) selected @endif value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="mt-2">Brand Name</label>
                <select class="form-control" name="brand_id" required>
                    @foreach($brands as $brand)
                        <option  @if($product->brand_id==$brand->id) selected @endif value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="release_data">Release Date</label>
                <input type="date" value="{{$product->release_data}}" name="release_data" class="form-control" id="release_data" required>
            </div>
            <div class="form-group">
                <label for="quantity">Stock Quantity</label>
                <input type="number" value="{{$product->quantity}}" name="quantity" class="form-control" id="quantity" placeholder="stock Quantity" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" value="{{$product->price}}" name="price" class="form-control" id="price" placeholder="Enter Your Price" required>
            </div>
            <div class="form-group">
                <label class="mt-2" for="exampleInputEmail1">Image</label>
                <input type="file" value="{{$product->image}}"  name="image" class="form-control" id="image">
            </div>
            <div class="form-group">
                <label class="mt-2" for="descripton">Dresscription</label>
                <textarea name="descripton"  class="form-control" id="" cols="30" rows="10">{{$product->descripton}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</main>
@endsection
