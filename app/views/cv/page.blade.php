<!DOCTYPE html>
<html lang="en">
  <head>
@include('partials/header')
  </head>
  <body>
      @include('partials/nav')
<div class="container">
    <div style="margin-top:70px;">
      @include('cv/aside')
    </div>
    
    <div class="col-xs-2" style="margin-top:70;">
      @include('cv/side')
    </div>
    <div class="col-xs-10" style="margin-top:70;">
      @yield('content')
    </div>
</div>
@include('partials/footer')

  </body>
</html>

