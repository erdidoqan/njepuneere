<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>
  <body>
      @include('partials/nav')
        <div class="container">
          <div class="col-sm-8" style="margin-top:70px;">
            @yield('content')
          </div>
          <div class="col-sm-4" style="margin-top:70px;">
            @include('ilan/side')
          </div>
        </div>
      @include('partials/footer')
  </body>
</html>

