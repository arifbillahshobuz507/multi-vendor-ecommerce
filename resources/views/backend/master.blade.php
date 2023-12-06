use notify;
<!DOCTYPE html>
<html lang="en">

<head>

@notifyCss
<style type="text/css"> .notify{ z-index: 1000000; margin-top: 4%; } </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>mcom</title>
    
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{url('backend/assect')}}/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
   
</head>
<body class="sb-nav-fixed">

    <!-- header section start -->

    @include("backend.includes.header")

    <!-- header section end -->

    <div id="layoutSidenav">
        <!-- sidebar section start -->


        @include("backend.includes.slidebar")
       

        <!-- sidebar section end -->

        <div id="layoutSidenav_content">
            <!-- contaient section start -->

            @yield('content')           
            
            <!-- contaient section end -->
            
            
            
            <!-- footer start part -->
            
            
            <!-- @include("backend.includes.footer")
             -->

            <!-- footer end part  -->
            
        </div>
    </div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{url('backend/assect')}}/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{url('backend/assect')}}/assets/demo/chart-area-demo.js"></script>
    <script src="{{url('backend/assect')}}/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{url('backend/assect')}}/js/datatables-simple-demo.js"></script>
    <script src="https://kit.fontawesome.com/0e1a4f4959.js" crossorigin="anonymous"></script>
    <x-notify::notify />
    @notifyJs
</body>

</html>