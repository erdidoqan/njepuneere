
<nav class="navbar navbar-default" id="navbar">
	<div class="container">
		<div class="turgittin">
			<div class="project-context hidden-xs">
				<span id="logo"><a href="/"> <img src="/img/logo.png" alt="Njepuneere logo"> </a></span>
			</div>
		</div>
		<div id="erds" class="erds" data-spy="affixed-top.bs.affix" data-offset-top="600">
			{{ Form::open(array('url' => 'results', 'method'=>'get', 'class'=>'navbar-form navbar-left')) }}
				<div class="form-group">
					<input class="form-control" name="search" placeholder="Find jobs and more" type="text" id="project">
				</div>
				<div class="form-group">
					{{Form::place()}}
				</div>
				<button type="submit" class="btn btn-success btn-sm" style="border-radius: 5px;">
		        	<span class="fa fa-1x fa-search"></span> 
		        </button>
			{{Form::close()}}
		</div>
		<div class="pull-right">
			@if(!Auth::user())
			<a style="margin-top:8px;" data-toggle="modal" href="#login" class="btn btn-primary pull-right header-btn hidden-mobile hvr-glow"><i class="fa fa-circle-arrow-up fa-lg"></i> Login & Register</a>
			<a style="margin-bottom:-21px;margin-right:5px;" href="{{User::$img_sirket_src}}" class="btn btn-success header-btn hvr-glow"><i class="fa fa-circle-arrow-up fa-lg"></i> Employer</a>
			@endif

			@if(Auth::user())
			<div class="turgittin">
				<div class="project-context pull-right">
					<span> <a class="btn btn-danger hvr-icon-wobble-horizontal hvr-glow" href="/logout" title="Sign Out" data-action="userLogout" data-logout-msg="Goodbye, {{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }}..."> Exit </a> </span>
				</div> 

				<div class="project-context pull-right">
					<span> <a class="btn btn-success hvr-icon-float-away hvr-glow" href="/my-resume"> Create CV </a> </span>
				</div> 

				<div class="project-context pull-right">
					<span style="margin-top:8px;"><a class="text-successi ">{{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }}</a></span>
				</div>
				<div class="project-context pull-right">
					<span>
						<a href="/pr-image"><img src="{{Auth::user()->pr_img}}" alt="...." class="img-rounded imgpr hvr-glow" style="height:30px;width:30px;"></a>
					</span>
				</div>
			</div>
			@endif
		</div>
	</div>
</nav>
<div class="scv-header-bottom" id="nav">
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
@if(Auth::user())
	@if(Auth::user()->active == 0)
	<div class="alert-header-bottom" id="alert">
	    <div class="alert-container" style="text-align: center;">
	       	<div class="project-context hidden-xs">
	        	<a class="project-selector" href="https://{{Auth::user()->email}}" target="_blank">We sent an email to your email address ({{Auth::user()->email}}). Please comfirm your account.</a>
	      	</div>
	    </div>
	</div>
	@endif
@endif

<div style="padding:18px;">&nbsp;</div>
@include('partials/scripts')
@include('partials/modal')


<script type="text/javascript">

	$('#nav').affix({
	  offset: {
	    top: 210,
	  }
	})

	$('#alert').affix({
	  offset: {
	    top: 210,
	  }
	})	

	$('#navbar').affix({
	  offset: {
	    top: 210,
	  }
	})

	$('#erds').affix({
	  offset: {
	    top: 210,
	  }
	})
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

