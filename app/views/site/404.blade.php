<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>

  <body>
    @include('partials/nav')
      <div class="section1">     
        <div class="container">
          <div class="col-md-12">
            <div class="col-sm-7"> 
              {{ Form::open(array('url' => 'search')) }}
              <input id="search-fld" class="form-control input-lg"  type="text" name="search" placeholder="Find jobs and more" data-autocomplete='"ActionScript","Scala","Scheme"'>
            </div>
            <div class="col-sm-3">
              {{Form::work_place()}}
            </div>
            <div class="col-sm-2">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-success btn-block btn-lg" ><span class="glyphicon glyphicon-search"></span> Job Search</button>
              </span>
            </div>
              {{ Form::close() }}
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
              <a href="/" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-home"></span>Take Me Home </a>
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

