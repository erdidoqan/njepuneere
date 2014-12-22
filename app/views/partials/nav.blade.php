<header>
<nav  class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="turgittin">
			<div class="project-context hidden-xs">
				<span id="logo"><a href="/"> <img src="http://104.131.119.56/img/logo.png" alt="Njepuneere logo"> </a></span>
			</div>
			
		</div>
		<div class="pull-right">
			@if(!Auth::user())
			<a style="margin-top:8px;" data-toggle="modal" href="#myModal" class="btn btn-primary pull-right header-btn hidden-mobile"><i class="fa fa-circle-arrow-up fa-lg"></i> Login & Register</a>
			<a style="margin-bottom:-24px;margin-right:5px;" href="{{User::$img_sirket_src}}" class="btn btn-success header-btn"><i class="fa fa-circle-arrow-up fa-lg"></i> Employer</a>
			@endif

			@if(Auth::user())
			<div class="turgittin">
				<div class="project-context pull-right">
					<span> <a class="text-danger" href="/logout" title="Sign Out" data-action="userLogout" data-logout-msg="Goodbye, {{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }}..."><i class="fa fa-sign-out"></i></a> </span>
				</div> 

				<div class="project-context pull-right">
					<span class="project-selector dropdown-toggle"  data-toggle="dropdown">{{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }} <i class="fa fa-angle-down"></i></span>
					<ul class="dropdown-menu">
					  <li><a href="/user-up">Membership</a></li>
					  <li><a href="/my-application">CV - Resume</a></li>
					  <li><a href="/my-application">My Applicant</a></li>
					</ul>
				</div>
				<div class="project-context pull-right">
					<span>
						<img src="{{Auth::user()->pr_img}}" alt="...." class="img-circle" style="height:30px;width:30px;">
					</span>
				</div>
			</div>
			@endif
		</div>
	</div>
	<div class="scv-header-bottom">
            <div class="scv-container">
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
        </div>
</nav>
</header>
<div style="padding:35px;">asd</div>
@include('partials/scripts')
@include('partials/modal')


