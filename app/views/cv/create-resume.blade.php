<!DOCTYPE html>
<html lang="en">
  <body>
      @include('partials/nav-in')
<div class="container">
    <div class="col-xs-3" style="margin-top:30;">
      @include('cv/create-side')
    </div>
    <div class="col-xs-9" style="margin-top:30;">
      @include('cv/create-resume-ic')
    </div>
</div>
@include('partials/footer')

  </body>
</html>