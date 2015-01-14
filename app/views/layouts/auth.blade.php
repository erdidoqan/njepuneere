<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials/header')
    </head>
    <body>
        @include('partials/nav')
            
        <div class="container">
            <div class="col-sm-8" style="margin-top:70px;margin-left:165px;">
                @yield('content')
            </div>
        </div>
        @include('partials/footer')
    </body>
</html>
