<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
    
    <title>404 - Njepuneere - Rruga më e thjeshtë për të gjetur punë</title>

  </head>

  <body>
    @include('partials/nav')
      <div class="section1">
<div class="containert">
  <div class="col-md-12">
  <div class="search-box-name">
      One of the 64,669 job ads for you!
  </div>
  <div class="search-form">

    <div class="colon-search"> 
                {{ Form::open(array('url' => 'search')) }}
          <input class="form-control input-lg"  type="text" name="search" placeholder="Find jobs and more" id="project">
    </div>
    <div class="colon-place">
      {{Form::work_place()}}
    </div>

    <div class="colon-button">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-success btn-lg" style="border-radius: 5px;">
          <span class="fa fa-1x fa-search"></span> 
        </button>
      </span>
    </div>
    </div>
     {{ Form::close() }}
  
  <div class="search-tags">
    Popular searches: <a href="#"  class="text-turgay">Web Desing</a>, <a href="#" class="text-turgay">PHP Developer</a>, <a href="#" class="text-turgay">Mundësi Punësimi</a>
  </div>
  </div>
</div>
</div>

      <div class="container">
        <div class="col-sm-12" style="margin-top:30px;">
          <div class="error-template">
            <h1>Oops!</h1><h2>404 Not Found</h2>
            <div class="error-details">
                Sorry, an error has occured, Requested page not found!
            </div>
            <div class="error-actions">
              <a href="/" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-home"></span> Take Me Home </a>
              <a href="{{URL::previous()}}" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-arrow-left"></span></a>
                @if(!Auth::user())
                  <a href="/BireyGiris" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span> To Login </a>
                  <a href="/BireyKayit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-user"></span> To Register </a>
                @endif
            </div>
          </div>
        </div>
      </div>
@include('partials/footer')
<script type="text/javascript">
$(document).ready(function() {
  $('html').animate({scrollTop: 0},'slow');});
</script>
  </body>
</html>

