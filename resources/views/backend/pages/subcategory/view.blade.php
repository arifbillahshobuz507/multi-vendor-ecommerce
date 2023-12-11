@extends("backend.master")
@section('content')
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Emexso - Product Landing Page</title>

  <!--bootstrap css-->
  <link rel="stylesheet" type="text/css" href="https://easiblock.com/html/emexso/demo/assets/css/bootstrap.min.css">
  <!--main css-->
  <link rel="stylesheet" type="text/css" href="https://easiblock.com/html/emexso/demo/assets/css/style.css">
</head>

<body>
  <!--start feature area-->
  <section id="feat-area" class="bg-gray col-11 container mt-5 two" >
    <div class="container">
      <div class="row">
        <!--start heading-->
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
          <div class="sec-heading text-center">           
            <h2>Sub Category Details</h2>
          </div>
        </div>
        <!--end heading-->
      </div>
      <div class="row">
        <div class="col-md-4">
          <!--start Deteail single-->
          <div class="feat-single two mt-5">            
            <div class="feat-cont">
            <h4 class="container">Name: {{$sub_categories->name}}</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feat-img d-table">
            <div class="d-table-cell align-middle text-center">
              <img class="img-fluid animation-jump rounded border border-warning" src="{{url('subCategory/image/' .$sub_categories->image)}}" alt="image">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <!--start Image single-->
          <div class="feat-single two ml-4 mt-5">            
            <div class="feat-cont">
            <h4 class="container">Description</h4>
            <h4>{{$sub_categories->descripton}}</h4>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </section>
  <!--end Image area-->
  <!--bootstrap js-->
  <script src="https://easiblock.com/html/emexso/demo/assets/js/bootstrap.min.js"></script>  
  <!--main js-->
  <script src="https://easiblock.com/html/emexso/demo/assets/js/custom.js"></script>
</body>

</html>
@endsection