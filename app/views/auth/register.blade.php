@extends('layouts.auth')

@section('title')
<title>Registration | Njepuneere</title>
@stop

@section('content')
    
<section id="widget-grid" class="">
    <div class="row">
        <div class="jarviswidget" data-widget-deletebutton="false" data-widget-editbutton="false">
            <header>
                <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                <h2>Registration form <small>Try it Free! </small> </h2>             
            </header>
                <div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            {{ implode('', $errors->all('<p class="error">:message</p>')) }}
                        </div>
                    @endif
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
                        {{ Form::open(array('url' => 'BireyKayit','id'=>'smart-form-register','class'=>'smart-form')) }}
                            <header>Personal Information</header>

                            <fieldset>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('adi', '', array('placeholder' => 'Firstname')) }}
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('soyadi', '', array('placeholder' => 'Lastname')) }}
                                        </label>
                                    </section>
                                </div>
                                <section>
                                    <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                        {{ Form::text('email', '', array('placeholder' => 'Email address')) }}
                                        <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
                                </section>

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
                                <label class="label col col-1">Gender:</label>
                                    <section class="col col-3">
                                        <label class="select">
                                            {{Form::cinsiyet()}}
                                             <i></i> </label>
                                    </section>
                                    <label class="label col col-2">Birthday:</label>
                                    <section class="col col-2 col-sm-offset-1">
                                        <label class="select">
                                            {{Form::dd()}}<i></i> </label>
                                    </section>
                                    <section class="col col-2">
                                        <label class="select">
                                            {{Form::mm()}}<i></i> </label>
                                    </section>
                                    <section class="col col-2">
                                        <label class="select">
                                            {{Form::yy()}}<i></i> </label>
                                    </section>
                                </div>
                            </fieldset>
                            <header>Contact Information</header>
                            <fieldset>

                                <div class="row">
                                    <section class="col col-6">
                                        <label class="select">
                                            <select name="gender">
                                                <option value="0" selected="" disabled="">Contact Phone</option>
                                                <option value="1">Cell Phone</option>
                                                <option value="2">Home Phone</option>
                                            </select> <i></i> </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-append fa fa-phone"></i>
                                        {{ Form::text('tel', '', array('class'=>'form-control','placeholder' => 'Phone','data-mask' => '(999) 99-999-9999')) }}
                                        </label>
                                    </section>
                                </div>  
                                <div class="row">
                                <label class="label col col-1">Address:</label>
                                <section class="col col-5">
                                        <label class="select">
                                            {{Form::ulke()}} <i></i> </label>
                                    </section>  
                                    <section class="col col-6">
                                        <label class="select">
                                            {{Form::sehir()}} <i></i> </label>
                                    </section>  
                                </div>

                                </fieldset>
                            
                            <header>Additional  Information</header>
                            <fieldset>
                                 <div class="row">
                                 <label class="label col col-4">Recent Work Experience:</label>
                                    <section class="col col-5">
                                        <label class="input"> <i class="icon-append fa fa-cubes"></i>
                                            {{ Form::text('sonis', '', array('placeholder'=>'Recent Last Company')) }}
                                        </label>
                                    </section>
                                    <section class="col col-3">
                                        <label class="input"> 
                                            {{ Form::text('durum', '', array('placeholder'=>'Status')) }}
                                        </label>
                                    </section>
                                <label class="label col col-4">University:</label>
                                    <section class="col col-8">
                                        <label class="input"> <i class="icon-append fa fa-graduation-cap"></i>
                                        {{ Form::text('uni', '') }}
                                        </label>
                                    </section>
                                <label class="label col col-4">About Me</label>
                                    <section  class="col col-8">
                                    <label class="textarea">
                                        <i class="icon-append fa fa-comment"></i>
                                        {{Form::textarea('about_me', '', array('rows'=>'4', 'id'=>'message'))}}
                                    </label>
                                    <div class="note">
                                        <strong>Note:</strong> works in Chrome, Firefox, Opera and IE10.
                                    </div>
                                </section>

                                </div>
                                <section>
                                    <label class="checkbox">
                                        <input type="checkbox" name="subscription" id="subscription">
                                        <i></i>I want to receive news and special offers</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="terms" id="terms">
                                        <i></i>I agree with the Terms and Conditions</label>
                                </section>
                            </fieldset>
                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <button type="cancel" class="btn btn-default">
                                    Clear
                                </button>
                            </footer>
                        {{ Form::close() }}              
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop