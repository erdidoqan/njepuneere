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
				@if ($errors->has())
				<div class="alert alert-warning alert-dismissible" role="alert">
				    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				    <strong>Error!</strong> {{$errors->first()}}
				</div>
				@endif

				@if (Session::has('error'))
				<div class="alert alert-danger alert-dismissible" role="alert">
				    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				     {{Session::get('error')}}
				</div>
				@endif

				@if (Session::has('success'))
				<div class="alert alert-success alert-dismissible" role="alert">
				    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				    {{Session::get('success')}}
				</div>
				@endif  
        		
        		

        		<div class="col-sm-4" style="margin-top:-20px;">
        			{{ Form::open(array('url' => array('pr_img',$user->id), 'enctype' => 'multipart/form-data')) }}
						<br>
						<div class="bs-example">
					      <div class="fileinput fileinput-new" data-provides="fileinput">
					        <div class="fileinput-new thumbnail" style="width: 270px; height: 270px;">
					          <img src="{{$user->pr_img}}" style="height: 100%; width: 100%; display: block;">
					        </div>
					        <div class="fileinput-preview fileinput-exists thumbnail"></div>
					        <div>
					          <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="hidden" value="" name=""><input type="file" name="pr_img"></span>
					          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
					        </div>
					      </div>
					    </div>
						<input type="hidden" name="img_bckp" value="{{$data['pr_img']}}" /> 
						{{ form::submit('Update Profile Photo', array('class'=>'btn btn-success btn-block')) }}<hr>
					{{ Form::close() }}
					<input type="hidden" id="modal" value="{{$data['modal']}}" />
        		</div>

        		<div class="col-sm-8">
        			<div class="alert alert-warning" style="margin-top:10px;">
        				<p>- This section of Image Files (".jpeg", ".jpg", ".gif") can be added.</p><br>
        				<p>- Size 1 MB of files can be added by passing the record.</p>
        			</div>
        		<!--	<div class="col-sm-5 right">
        				<a href="/image/upallads" class="btn btn-primary btn-block" >Update All Ads Logo</a>
        			</div>
        		-->
        		</div>
        		
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Crop Profile Photo</h4>
      </div>
       <div class="modal-body">
			{{ Form::open(array('url' => array('crop', $user->id),'onsubmit'=>'return checkCoords();', 'enctype' => 'multipart/form-data')) }}
				<img src="{{$user->pr_img}}" alt="pr_img" id="cropbox" class="img-rounded" />
				<input type="hidden" id="x" name="x" />			
				<input type="hidden" id="y" name="y" />			
				<input type="hidden" id="w" name="w" />			
				<input type="hidden" id="h" name="h" />			
        </div>
        <div class="modal-footer">
        	<button type="submit" class="btn btn-success">Crop Profile Photo</button>
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
            aspectRatio : 1,
            minSize: [32, 32],
            bgFade: true,
            boxWidth: 550, boxHeight: 500,
            onSelect : updateCoords,
            onChange: updateCoords,

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


    	

</script>
{{HTML::script("//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js")}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

@stop