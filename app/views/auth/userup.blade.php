@extends('cv.page')

@section('content')
<div class="col-sm-10" style="margin-left:52px;margin-top:30px;">
        <div class="jarviswidget jarviswidget-color-greenDark" data-widget-deletebutton="false" data-widget-editbutton="false">
            <header>
                <h2>{{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }}, Membership Information</h2>             
            </header>
                <div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            {{ implode('', $errors->all('<p class="error">:message</p>')) }}
                        </div>
                    @endif
                    <div class="widget-body no-padding">
                        {{ Form::open(array('url' => 'BireyKayit','id'=>'smart-form-register','class'=>'smart-form')) }}
                            <header>Personal Information</header>

                            <fieldset>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('adi', Input::old('adi', $user->adi), array('placeholder' => 'Firstname')) }}
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('soyadi', Input::old('adi', $user->soyadi), array('placeholder' => 'Lastname')) }}
                                        </label>
                                    </section>
                                </div>
                                <section>
                                    <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                        {{ Form::text('email', Input::old('email', $user->email), array('placeholder' => 'Email address')) }}
                                        <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
                                </section>

                                <div class="row">
                                <label class="label col col-1">Gender:</label>
                                    <section class="col col-3">
                                        <label class="select">
                                            {{Form::cinsiyet(Input::old('cinsiyet', $user->cinsiyet))}}
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
                                        {{ Form::text('tel', Input::old('tel', $user->tel), array('placeholder' => 'Phone','data-mask' => '(999) 99-999-99-99')) }}
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
                                            {{ Form::text('sonis', Input::old('sonis', $user->sonis), array('placeholder'=>'Recent Last Company')) }}
                                        </label>
                                    </section>
                                    <section class="col col-3">
                                        <label class="input"> 
                                            {{ Form::text('durum', Input::old('durum', $user->durum), array('placeholder'=>'Status')) }}
                                        </label>
                                    </section>
                                <label class="label col col-4">University:</label>
                                    <section class="col col-8">
                                        <label class="input"> <i class="icon-append fa fa-graduation-cap"></i>
                                        {{ Form::text('uni', Input::old('uni', $user->uni)) }}
                                        </label>
                                    </section>
                                <label class="label col col-4">About Me</label>
                                    <section  class="col col-8">
                                    <label class="textarea">
                                        <i class="icon-append fa fa-comment"></i>
                                        {{Form::textarea('about_me', Input::old('about_me', $user->about_me), array('rows'=>'4', 'id'=>'message'))}}
                                    </label>
                                    <div class="note">
                                        <strong>Note:</strong> works in Chrome, Firefox, Opera and IE10.
                                    </div>
                                </section>

                                </div>
                            </fieldset>
                            <footer>
                              <div class="col-sm-5 right">
                                <button type="submit" class="btn btn-block btn-success">
                                    update
                                </button>
                                </div>
                            </footer>
                        {{ Form::close() }}              
                    </div>
                </div>
            </div>
        </div>
</div>
@stop