@extends('layouts.auth')

@section('content')

<section id="widget-grid" class="">
    <div class="row">
        <div class="jarviswidget" data-widget-deletebutton="false" data-widget-editbutton="false">
            <header>
                <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                <h2>Login Form <small>or you can easily <a href="BireyKayit">Register</a> </small> </h2>             
            </header>
                <div>
                    @if ($errors->has())
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Error!</strong> {{$errors->first()}}
                    </div>
                    @endif
                    
                    @if (Session::has('error'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
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
    
                    <div class="widget-body no-padding">
                        {{ Form::open(array('url' => URL::route('BireyGiris'),'id'=>'smart-form-register','class'=>'smart-form')) }}

                            <fieldset>
                                <label class="label col col-3">Email:</label>
                                <section class="col col-9">
                                    <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                        {{ Form::email('email', Input::old('email'), array('placeholder' => 'Email address','id'=>'email')) }}
                                        <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
                                </section>
                                <label class="label col col-3">Password:</label>
                                <section class="col col-9">
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        {{ Form::password('sifre', array('placeholder' => 'Password','id'=>'password')) }}
                                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                                </section>
                                <label class="label col col-3">Remember Me:</label>
                                <section class="col col-9">
                                    <label class="checkbox">
                                        {{Form::checkbox('remember')}}
                                        <i></i>Keep me logged in</label>
                                </section>
                            </fieldset>
                           
                            <footer>

                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <button type="cancel" class="btn btn-default">
                                    Clear
                                </button>
                                {{ HTML::link('BireyKayit', 'Register', array('class' => 'btn btn-success')) }}
                            </footer>
                        {{ Form::close() }}              
                        
                    </div>
                    <!-- end widget content -->
                    
                </div>
                <!-- end widget div -->
                
            </div>
            <!-- end widget -->
            
            </div>

    </div>

    <!-- END ROW -->

</section>
<!-- end widget grid -->

@stop