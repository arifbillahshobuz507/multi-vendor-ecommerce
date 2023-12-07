@notifyCss
@include("backend.includes.style")

<main class="fluid ">
    <div class="container col-6">
        <h3 class="mt-3">
            Input Customer Information!
        </h3>
        <div class="col container mt-4 pt-4 pb-4 rounded border border-warning">
        <form action="{{route('sotre.customer')}}" method="post" class="was-validated">
            @csrf   
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="gmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email" required>
            </div>            
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Phone Number" required>
            </div>            
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>            
            </div>     
                       
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
        </div>
    </div>
    
</main>
<x-notify::notify />
@notifyJs


