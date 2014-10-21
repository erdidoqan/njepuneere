
<div class="container">
    <div>
		<a href="/">
	    	<img src="http://104.131.119.56/img/logo.png">
	    </a>
    	
	   <nav  class="navbar navbar-default navbar-static-top">
	    	@if(Auth::user())
	      		<div id="logo-group" style="margin-left:15px;">
	        		<span id="activity" class="activity-dropdown"> <i class="glyphicon glyphicon-globe"></i> <b class="badge"> 21 </b> </span>
	        	<div class="ajax-dropdown">
	        		<div class="btn-group btn-group-justified" data-toggle="buttons">
	            	<label class="btn btn-default">
		            	<input type="radio" name="activity" id="ajax/notify/mail.php">
		              		Messages (14) </label>
	            	<label class="btn btn-default">
	              	<input type="radio" name="activity" id="ajax/notify/notifications.html">
	              		Notification (3) </label>
  	          </div>
	          <div class="ajax-notifications custom-scroll">
	            <div class="alert alert-transparent">
	              <h4>Click a button to show messages here</h4>
	              This blank page message helps protect your privacy, or you can show the first message here automatically.
	            </div>
	            <i class="fa fa-lock fa-4x fa-border"></i>
	          </div>
	        </div>
	      </div>
	@endif
	      <div class="project-context hidden-xs">
	        <span class="label">Jobs</span>
	        <a class="project-selector" href="search"> Job Ads<i class="fa fa-angle-right"></i></a>
	      </div>
	       <div class="project-context hidden-xs">
	        <span class="label">CV</span>
	        <a class="project-selector" href="/my-page"> My Page<i class="fa fa-angle-right"></i></a>
	      </div>
	      <div class="project-context hidden-xs">
	        <span class="label">Career </span>
	        <span class="project-selector dropdown-toggle"  data-toggle="dropdown"> My Career<i class="fa fa-angle-down"></i></span>
	        <ul class="dropdown-menu">
	          <li><a href="/my-resume">My Resume (5)</a></li>
	          <li><a href="/my-application">My Application</a></li>
	          <li><a href="/pre-written">My Pre-Written</a></li>
	          <li><a href="/">My Message</a></li>
	          <li class="divider"></li><li><a href="/"><i class="fa fa-file-pdf-o"></i> File (PDF)</a></li>
	        </ul>
	      </div>
	      <div class="project-context hidden-xs">
	        <span class="label">Sectoral</span>
	        <span class="project-selector dropdown-toggle" data-toggle="dropdown"> Sector<i class="fa fa-angle-down"></i></span>
	        <ul class="dropdown-menu">
	          <li><a href="#">Insurance</a></li>
	          <li><a href="#">Information</a></li>
	          <li><a href="#">Education</a></li>
	          <li><a href="#">Finances</a></li>
	          <li><a href="#">Construction</a></li>
	        </ul>
	      </div>
	      
	      <div class="pull-right" style="margin-right:15px;">
	        @if(!Auth::user())
	          <a style="margin-top:9px;" data-toggle="modal" href="#myModal" class="btn btn-primary pull-right header-btn hidden-mobile"><i class="fa fa-circle-arrow-up fa-lg"></i> Login & Register</a>
	          
	          <a style="margin-bottom:-24px;margin-right:5px;" href="{{User::$img_sirket_src}}" class="btn btn-success header-btn"><i class="fa fa-circle-arrow-up fa-lg"></i> Employer</a>
	        @endif
	        @if(Auth::user())
	        <div id="logout" class="btn-header transparent pull-right">
	          <span> <a href="/logout" title="Sign Out" data-action="userLogout" data-logout-msg="Goodbye, {{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }}..."><i class="fa fa-sign-out"></i></a> </span>
	        </div>
	        <div class="pull-right" style="margin-right:35px;margin-top:15px;">
	          <span>{{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }},</span> <a href="user-up"> Membership Information</a>
	        </div>
	        @endif
	      </div>
	    </nav>
		</div>
</div>

@include('partials/scripts')

@include('partials/modal')


