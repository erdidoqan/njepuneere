@extends('cv.page')

@section('title')
<title>Profile Image | Njepuneere</title>
@stop

@section('content')


<div class="col-sm-12" style="margin-top:30px;">
	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>Change Your Profile Photo</h2>				
		</header>
		<div>					
		<div class="widget-body">
			<div class="col-sm-4">

        			<img src="{{Auth::user()->pr_img}}" alt="Profile Images" style="max-width:235px;" class="pfimg img-rounded" ><hr>
        		</div>

        		<div class="col-sm-8">
        			<div class="alert alert-warning">
        				<p>- This section of Image Files (".jpeg", ".jpg", ".gif") can be added.</p><br>
        				<p>- Size 1 MB of files can be added by passing the record.</p>
        			</div>
        		</div>
        		<div class="col-sm-12">
        			{{ Form::open(array('url' => array('pr_img',Auth::user()->id), 'enctype' => 'multipart/form-data')) }}
						{{ form::file('pr_img') }}<br>
						<input type="hidden" name="img_bckp" value="{{$data['logo']}}" /> 
						{{ form::submit('update', array('class'=>'btn btn-success')) }}
					{{ Form::close() }}
					<input type="hidden" id="modal" value="{{$data['modal']}}" /><br>
        		</div>		
		</div>
	</div>
</div>
</div>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Crop Logo</h4>
      </div>
       <div class="modal-body">
			{{ Form::open(array('url' => array('crop', Auth::user()->id),'onsubmit'=>'return checkCoords();', 'enctype' => 'multipart/form-data')) }}
				<img src="{{Auth::user()->pr_img}}" alt="logo" id="cropbox" class="img-rounded" />
				<input type="hidden" id="x" name="x" />			
				<input type="hidden" id="y" name="y" />			
				<input type="hidden" id="w" name="w" />			
				<input type="hidden" id="h" name="h" />			
        </div>
        <div class="modal-footer">
        	<button type="submit" class="btn btn-success">Crop Logo</button>
        	{{ Form::close() }}
        </div>
    </div>
  </div>
</div>
<style type="text/css">
	.jcrop-keymgr{opacity: 0;}
</style>

<script type="text/javascript">
	var modal;
	if ($('#modal').val() == 'true'){
		modal = true;
	} else {
		modal = false;
	}
		$(function() {
	            $('#cropbox').Jcrop({
	                aspectRatio : 4,
	                onSelect : updateCoords
	            });
	            $('#myModal').modal({show: modal});
	        });
			
	 
	        function updateCoords(c) {
	            $('#x').val(c.x);
	            $('#y').val(c.y);
	            $('#w').val(c.w);
	            $('#h').val(c.h);
	        };
	 
	        function checkCoords() {
	            if (parseInt($('#w').val()))
	                return true;
	            alert('Please select a crop region then press submit.');
	            return false;
	        };

	loadScript("/js/plugin/jcrop/jquery.Jcrop.min.js", function() {
		loadScript("/js/plugin/jcrop/jquery.color.min.js", pagefunction);
	});

</script>
@stop












