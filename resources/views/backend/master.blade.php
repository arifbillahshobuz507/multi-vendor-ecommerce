<!DOCTYPE html>
<html lang="en">

<head>


@include("backend.includes.style")

   
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
   
    
    @include("backend.includes.js")
 
</body>

</html>