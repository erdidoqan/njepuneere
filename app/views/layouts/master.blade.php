<!DOCTYPE html>
<html lang="en">
  <head>
    
  @include('partials/header')


  </head>

  <body>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1451763031763440',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

      @include('partials/nav')
        
            @yield('content')
<div class="container">
        <div class="col-sm-8" style="margin-top:8px;">
           @include('partials/ilan')
         </div>
       <div class="col-sm-4" style="margin-top:30px;">
            @include('partials/sidebar')
         </div>
              </div>
      @include('partials/footer')
  </body>
</html>

