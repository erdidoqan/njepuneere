@extends('cv.page')

@section('title')
<title>Resumes | Njepuneere</title>
@stop

@section('content')
<div class="col-sm-12" style="margin-top:30px;">
	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>All CV's & Create CV</h2>				
		</header>
		<div>					
		<div class="widget-body">
			@if ($errors->has())
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Error!</strong> {{$errors->first()}}
                </div>
                @endif
                
                @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Error!</strong> {{Session::get('error')}}
                </div>
                @endif
                
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Success!</strong> {{Session::get('success')}}
                </div>
                @endif 

                @if (Session::has('warning'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Warning!</strong> {{Session::get('warning')}}
                </div>
                @endif 
		@if($cv->count())
			<table class="table table-hover">
				<thead>
		            <tr>
		            	<th>Occupancy Rate</th><th>Resume Title</th><th>Searches</th>
		                <th>Update</th><th>Active</th><th>Process</th>
		            </tr>
	            </thead>
	            @foreach($cv as $cvs)
	            <tbody>
	            	<tr>
	            		<td>
	            			<div class="progress">
							  <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: {{$cvs->rate}}%">
							    {{$cvs->rate}}% Complete
							  </div>
							</div>	
	            		</td>
	            		<td><a href="create-resume/{{$cvs->id}}">{{ucwords($cvs->resume_name)}}</a><small> ({{ucwords($cvs->languages)}}) </small></td>
	            		<td>5</td>
	            		<td>
		            		<span class="label label-success">
	                          {{ Carbon::createFromTimestamp(strtotime($cvs->updated_at))->diffForHumans() }}
	                        </span>
	            		</td>
	            		<td>
							<form class="smart-form">
								<label class="toggle" >
									<input class="toogle checkbox-cv-status" id="asd" type="checkbox" name="checkbox" {{$cvs->status ? 'checked' : ''}} data-id={{$cvs->id}}><i data-swchon-text="ON" data-swchoff-text="OFF"></i>
								</label>
							</form>
						</td>
	            		<td>

	            			<div class="btn-group">
								<button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
									Other Process <span class="caret"></span>
								</button>
								<ul class="dropdown-menu"> 
									<li> <a href="create-resume/{{$cvs->id}}#" data-toggle="modal" data-target="#newtitle"><i class="glyphicon glyphicon-pencil"></i> Update Title</a></li>
									<li><a href="{{ route('cv.destroy',array($cvs->id)) }}" id="cv-del"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
									<li><a href="create-resume/{{$cvs->id}}"><i class="glyphicon glyphicon-eye-open"></i> Show</a></li>
									<li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Send via Mail</a></li>
									<li><a href="#"><i class="glyphicon glyphicon-print"></i> Print</a></li>
									<li><a href="#"><i class="fa fa-file-pdf-o"></i> View as PDF </a></li>
								</ul>
							</div>
	            		</td>
	            	</tr>
	            </tbody>
	            @endforeach
	        </table>
	        @else
          <div class="alert alert-warning">
          	<p class="text-danger">- You should complate your CVs than active your CVs</p>
          	<p>- You can apply to JOB.</p>
            <p>- Did not create a CV</p>
            <p>- Select CV languages, and Create a CV.</p>
            <p>- Afterthat, please correctly fiil all fields.</p>
          </div>
	        @endif
	        @if($errors->any())
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ implode('', $errors->all('<p class="error">Select your CV languages.</p>')) }}
                </div>
            @endif
            @if (Session::has('warning'))
			<div class="alert alert-danger alert-dismissible" role="alert">
			    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			    <strong>Warning!</strong> {{Session::get('warning')}}
			</div>
			@endif 
				<div class="well">
		            	<h4 class="text-success">Create a CV</h4>
		            	<div class="col-sm-6">
		            	<small>You need to first select the language to create a resume!</small>
		            	{{ Form::open(array('route' => 'cv.store','id'=>'smart-form-register','class'=>'smart-form')) }}
		            	{{Form::hidden('resume_name', 'My Resume')}}
							<div class="row">
								<div class="col col-3">
									<label class="radio state">
									{{Form::radio('languages','Albania')}} 
									<i></i> Albanian 
									</label>
								</div>
								<div class="col col-2">
									<label class="radio state">
									{{Form::radio('languages','English')}}
									English <i></i> </label>
								</div>
							</div>
						</div>
						<div class="col-sm-offset-10">
							<button type="submit" class="btn btn-primary btn-lg">Create a CV</button>
						</div>
						{{Form::close()}}
	        	</div>						
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
	
</script>

<script type="text/javascript">
	var activeEl = 1;
		$(function() {
		    var items = $('.btn-nav');
		    $( items[activeEl] ).addClass('active');
		    $( ".btn-nav" ).click(function() {
		        $( items[activeEl] ).removeClass('active');
		        $( this ).addClass('active');
		        activeEl = $( ".btn-nav" ).index( this );
		    });

		    $('body').on('change','.checkbox-cv-status',function (e){
		    	e.preventDefault();
		    	var status = $(this).prop('checked');
		    	var cvId = $(this).attr('data-id');
		    	status = status ? 1 : 0;
		    	$.ajax({
		    		url:'/cv/cvstatus',
		    		data:{'cv_id':cvId,'status':status},
		    		type:'post',
		    		dataType:'json'
		    	}).done(function (resp){
		    		if(!resp.err)
		    			location.reload();

		    	}).fail(function(){
		    		console.log('eben');
		    	});
		    });
		});
</script>
<script type="text/javascript">
	$("#cv-del").click(function(e) {
					e.preventDefault();
					var url = $(this).attr('href');
						$.SmartMessageBox({
							title : "Do you want to delete!",
							content : "Warning: You will delete your information",
							buttons : '[No][Yes]'
						}, function(ButtonPressed) {
							if (ButtonPressed === "Yes") {
				                $.ajax({
				                    url: url,
				                    type: 'DELETE',
				                    success: function(result) {
				                        $.smallBox({
											title : "Your information has been deleted",
											content : "<i class='glyphicon glyphicon-trash'></i> <i>Your cv was deleted...</i>",
											color : "#C46A69",
											iconSmall : "fa fa-check fa-2x fadeInRight animated",
											timeout : 5000
										});
										window.location.reload(2);
				                    }
				                });
							
							}
							if (ButtonPressed === "No") {
								$.smallBox({
									title : "Was canceled",
									content : "<i class='glyphicon glyphicon-ok'></i> <i>You pressed No...</i>",
									color : "#659265",
									iconSmall : "fa fa-times fa-2x fadeInRight animated",
									timeout : 5000
								});
							}
				
						});
						e.preventDefault();
					});
</script>

@stop