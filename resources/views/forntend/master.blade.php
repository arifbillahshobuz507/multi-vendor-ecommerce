<!doctype html>
<html class="no-js" lang="en">
@include("forntend.includes.styleAndJs")

<body class="template-index body-full-width    product-card-layout-04  enable_text_color_title hide_compare_homepage quick_shop_option_2 show_image_loading">
  <div class="body-content-wrapper">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">Skip to content</a>
    <!-- BEGIN sections: header-group -->
    @include("forntend.includes.header")
    <!-- END sections: header-group -->
    <h1 class="hidden">new-ella-demo</h1>

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "new-ella-demo",
        "potentialAction": {
          "@type": "SearchAction",
          "target": "https:\/\/new-ella-demo.myshopify.com\/search?q={search_term_string}",
          "query-input": "required name=search_term_string"
        },
        "url": "https:\/\/new-ella-demo.myshopify.com"
      }
    </script>
    <main id="MainContent" class="wrapper-body content-for-layout focus-none" role="main" tabindex="-1">

      <!-- BEGIN sections: banner -->
      @yield('banner')
      <!-- END sections: banner -->



      <!-- BEGIN sections: horigental-group -->
      @yield('horigental')
      <!-- END sections: horigental-group -->



      <!-- BEGIN sections: bye_one_get_one-group -->
      @yield('bye_one_get_one')

      <!-- END sections: bye_one_get_one-group -->
    

      <!-- BEGIN sections: memberships-group -->
      @yield('memberships')

      <!-- END sections: memberships-group -->
      

      <!-- BEGIN sections: best_selling-group -->
      @yield('best_selling')
      <!-- END sections: best_selling-group -->



      <!-- BEGIN sections: containt_8-group -->
      @yield('content_8')
      <!-- END sections: containt_8-group -->



      <!-- BEGIN sections: containt_9-group -->
      @yield('content_9')
      <!-- END sections: containt_9-group -->



      <!-- BEGIN sections: containt_9-group -->
      @yield('content_13')
      <!-- END sections: containt_9-group -->




      <!-- BEGIN sections: containt_10-group -->
      @yield('content_10')
      <!-- END sections: containt_10-group -->



      <!-- BEGIN sections: containt_11-group -->
      @yield('content_11')
      <!-- END sections: containt_11-group -->





      <!-- BEGIN sections: containt_12-group -->
      @yield('content_12')
      <!-- END sections: containt_12-group -->



      <!-- BEGIN sections: about-group -->
      @yield('about')
      END sections: about-group


    </main>

    <!-- BEGIN sections: footer-group -->
    <div class="wrapper-footer">
      @include("forntend.includes.footer")
    </div>
    <!-- END sections: footer-group -->



    <!-- BEGIN sections: mobail-app-mantetance-group -->
    @include("forntend.includes.mobaile")
    <!-- END sections: mobail-app-mantetance-group -->

    <x-notify::notify />
    @notifyJs
</body>

</html>