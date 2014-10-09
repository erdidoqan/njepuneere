<!DOCTYPE html>
<html lang="en">
  <head>
      @include('partials/header')
  </head>

  <body>
@include('partials/nav')
    
    <div class="container">
    <div class="row">

    <div class="col-lg-5"  style="margin-top:54px;">
            
       <div class="well profile">
            <div class="col-sm-12">
             <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                        
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <h2>{{ ucwords(Auth::user()->username) }} {{ ucwords(Auth::user()->sname) }}</h2>
                    <p><strong>Email: </strong> {{ Auth::user()->email }} </p>
                    <p><strong>Kayıt: </strong> {{ Carbon::createFromTimeStamp(strtotime(Auth::user()->created_at))->formatLocalized('%A %d %B %Y')}} </p>

                    <p><strong>Skills: </strong>
                        <span class="tags">html5</span> 
                        <span class="tags">css3</span>
                        <span class="tags">jquery</span>
                    </p>
                </div>        
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Takip </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> Profil </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <button class="btn btn-primary btn-block"><span class="fa fa-gear"></span> Çıkıs </button>
                </div>
            </div>
       </div>                 
    </div>
        <div class="col-lg-7" style="margin-top:54px;">

        @yield('content')
        </div>
        
        
      </div>
      
      <hr>
      
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Erdi Company 2014 &middot; Facebook &middot; Twitter &middot; Google+</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    {{HTML::script("js/jquery-1.11.1.min.js")}}
  {{HTML::script("js/bootstrap.min.js")}}
  {{HTML::script("js/sekil.js")}}
  {{ HTML::script('/ckeditor/ckeditor.js')}}
  </body>
</html>