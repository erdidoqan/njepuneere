@extends('cv.page')

@section('title')
<title>Change Some Information | Njepuneere</title>
@stop

@section('content')
<div class="col-sm-12" style="margin-top:30px;">
	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>Change Some Information</h2>				
		</header>
		<div>
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

                {{ Form::open(array('url' => 'password','id'=>'smart-form-register','class'=>'smart-form')) }}
                <div class="col-sm-8" style="margin-left:155px;">
	                <section>
	                    <label class="input"> <i class="icon-append fa fa-lock"></i>
	                        {{ Form::password('sifre', array('placeholder' => 'Password','id'=>'password')) }}
	                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
	                </section>

	                <section>
	                    <label class="input"> <i class="icon-append fa fa-lock"></i>
	                        {{ Form::password('passwordConfirm', array('placeholder' => 'Confirm password')) }}
	                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
	                </section>
	                <div class="row">
                        <label class="label col col-3">Birthday:</label>
                        <section class="col col-3 col-sm-offset-1">
                            <label class="select">
                                {{Form::dd()}}<i></i> </label>
                        </section>
                        <section class="col col-3">
                            <label class="select">
                                {{Form::mm()}}<i></i> </label>
                        </section>
                        <section class="col col-3">
                            <label class="select">
                                {{Form::yy()}}<i></i> </label>
                        </section>
	                </div>
	                <div class="row">
                        <label class="label col col-3">Contact Phone:</label>
                        <section class="col col-9">
                            <label class="input"> <i class="icon-append fa fa-phone"></i>
                            {{ Form::text('tel', '', array('class'=>'form-control','placeholder' => 'Phone','data-mask' => '(999) 99-999-9999')) }}
                            </label>
                        </section>
	                </div>

					<footer>
	                    <button type="submit" class="btn btn-primary">
	                        Register
	                    </button>
	                    <button type="cancel" class="btn btn-default">
	                        Clear
	                    </button>
	                </footer>
                </div>

                {{ Form::close() }}       

		</div>
	</div>
</div>

@stop












