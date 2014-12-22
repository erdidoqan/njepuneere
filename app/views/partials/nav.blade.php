<header>
<nav  class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="turgittin">
			<div class="project-context hidden-xs">
				<span id="logo"><a href="/"> <img src="http://104.131.119.56/img/logo.png" alt="SmartAdmin"> </a></span>
			</div>
			<div class="project-context hidden-xs">
				<a class="project-selector" href="/"><i class="fa fa-home"></i></a>
			</div>
	       	<div class="project-context hidden-xs">
	        	<a class="project-selector" href="/my-page"> My Page</a>
	      	</div>
			<div class="project-context hidden-xs">
				<span class="project-selector dropdown-toggle"  data-toggle="dropdown"> My Career <i class="fa fa-angle-down"></i></span>
				<ul class="dropdown-menu">
				  <li><a href="/my-resume">My Resume (5)</a></li>
				  <li><a href="/my-application">My Application</a></li>
				  <li><a href="/pre-written">My Pre-Written</a></li>
				  <li><a href="/">My Message</a></li>
				  <li class="divider"></li><li><a href="/"><i class="fa fa-file-pdf-o"></i> File (PDF)</a></li>
				</ul>
			</div>
		</div>
		<div class="pull-right" style="margin-right:35px;">
			@if(!Auth::user())
			<a style="margin-top:8px;" data-toggle="modal" href="#myModal" class="btn btn-primary pull-right header-btn hidden-mobile"><i class="fa fa-circle-arrow-up fa-lg"></i> Login & Register</a>
			<a style="margin-bottom:-24px;margin-right:5px;" href="{{User::$img_sirket_src}}" class="btn btn-success header-btn"><i class="fa fa-circle-arrow-up fa-lg"></i> Employer</a>
			@endif

			@if(Auth::user())
				<div id="logout" class="btn-header transparent pull-right">
					<span> <a href="/logout" title="Sign Out" data-action="userLogout" data-logout-msg="Goodbye, {{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }}..."><i class="fa fa-sign-out"></i></a> </span>
				</div>
				<div class="project-context erd hidden-xs">
					<div class="pull-right" style="margin-right:35px;margin-top:15px;">
						<span>{{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }},</span> <a href="user-up"> Membership Information</a>
					</div>
				</div>
			@endif
		</div>
	</div>
	<div class="scv-header-bottom">
            <div class="scv-container">
                <ul class="scv-list-inline">
                    <li><a href="#" >Home</a></li>
                    <li><a href="#" >My Page</a></li>
                </ul>
                <div class="scv-top-phone scv-pull-right scv-pos-rel">
                    <div class="scv-text-bold default-number">
                    </div>
                    <div class="scv-all-phones">
                        
                    </div>
                </div>
            </div>
        </div>
</nav>
</header>
<div><hr><br><br></div>
@include('partials/scripts')
@include('partials/modal')


