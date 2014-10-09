        <div class="col-sm-2">
            <a href="my-page" class="btn btn-xlarge {{ Request::path() == 'my-page' ? 'active' : ''; }}">
                <i class="glyphicon glyphicon-home fa-4x"></i><br>My Page </a>
        </div>
        <div class="col-sm-2" style="margin-left: 31px;">
            <a href="my-resume" class="btn btn-xlarge {{ Request::path() == 'my-resume' ? 'active' : ''; }}">
                <i class="glyphicon glyphicon-book fa-4x"></i><b class="badge alert-danger" style="margin-left:-20px;padding: 7px 9px;">{{$noti_cv}}</b><br>My Resume </a>
        </div>

        <div class="col-sm-2" style="margin-left: 31px;">
            <a href="my-application" class="btn btn-xlarge {{ Request::path() == 'my-application' ? 'active' : ''; }}">
                <i class="glyphicon glyphicon-ok fa-4x"></i><b class="badge alert-danger" style="margin-left:-20px;padding: 7px 9px;">{{$noti_app}}</b><br>My Application </a>
        </div>

        <div class="col-sm-2" style="margin-left: 31px;">
            <a href="pre-written" class="btn btn-xlarge {{ Request::path() == 'pre-written' ? 'active' : ''; }}">
                <i class="glyphicon glyphicon-list-alt fa-4x"></i><b class="badge alert-danger" style="margin-left:-20px;padding: 7px 9px;">2</b><br>Pre-Written </a>
        </div>

        <div class="col-sm-2" style="margin-left: 31px;">
            <a href="#" class="btn btn-xlarge {{ Request::path() == '/' ? 'active' : ''; }}">
                <i class="glyphicon glyphicon-envelope fa-4x"></i><b class="badge alert-danger" style="margin-left:-25px;padding: 7px 9px;">0/5</b><br>My Message </a>
        </div>