@extends('cv.page')

@section('content')
<div class="panel panel-success" style="margin-top:30px;">
    <div class="panel-body">
    <div class="container">
    	{{ Form::open(array('route' => 'prewritten.store','id'=>'contact-form','class'=>'smart-form')) }}
    	<div class="row">
	    	<section class="col col-8">
	    	<div class="col col-3">
				<label class="label">Pre-Written Name</label>
			</div>
			<div class="col col-5">
				<label class="input">
					<i class="icon-append fa fa-user"></i>
					{{Form::text('prewr_name', '', array('class' => 'form-control', 'placeholder' => 'Pre-Written Name'))}}
				</label>
			</div>
			</section>
		</div>
		<div class="row">
			<section class="col col-8">
			<div class="col col-3">
				<label class="label">Pre-Written</label>
			</div>
			<div class="col col-5">
				<label class="textarea">
					<i class="icon-append fa fa-comment"></i>
					{{Form::textarea('prewritten', '', array('class' => 'form-control', 'placeholder' => 'Pre-Written'))}}
				</label>
			</div>
	
			</section>

			<footer class="col col-5">
				<button type="submit" class="btn btn-primary">Add Pre-Written</button>
			</footer>
		</div>
		    	{{Form::close()}}
    	</div>
 	</div>
</div>

@stop