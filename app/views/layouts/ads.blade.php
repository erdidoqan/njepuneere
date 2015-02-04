<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')
  </head>
  <body>
      @include('partials/nav')
        <div class="container">
        <div class="col-sm-12">

        <div class="scv-breadcrumb-wrapper">
            <ul class="scv-list-unstyled scv-list-inline">
                <li>
                    <a href="/">Home</a>
                </li>
                <li class="scv-truncate">
                  <a href="/results?search={{ucwords($adsInfo->com_name)}}&work_place=Tirana">{{ucwords($adsInfo->com_name)}}</a>
                </li>
                <li class="scv-truncate">{{ucwords($adsInfo->ads_name)}}</li>
            </ul>
        </div>
          <h1 class="showcase-title2">{{ucwords($adsInfo->com_name)}}</h1>
        </div>
          <div class="col-sm-8">
            @yield('content')
          </div>
          <div class="col-sm-4">
            @include('ilan/side')
          </div>
        </div>
      @include('partials/footer')
  </body>
</html>

