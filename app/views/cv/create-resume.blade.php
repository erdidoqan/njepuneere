<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials/header')
</head>
  <body>
      @include('partials/nav')
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