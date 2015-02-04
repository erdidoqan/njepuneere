<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>

  <body>
      @include('partials/nav')
            @yield('content')
              <div class="container">
              <div class="col-sm-8">
                
              </div>
                <div class="col-sm-8" >

                  @include('partials/ilan')
                  
                </div>
                <div class="col-sm-4" style="margin-top:20px;">
                  @include('partials/sidebar')
                </div>
              </div>
      @include('partials/footer')
  </body>
</html>

