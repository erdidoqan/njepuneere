
@extends('layouts.auth')

@section('content')

<div class="col-md-12" style="margin-top:30px;">
   
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
              <div class="container">    
        <div id="loginbox" class="mainbox col-md-4">                    
            <div class="panel panel-success" >
                    <div class="panel-heading">
                        <div class="panel-title">Employer Login</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        {{ Form::open(array('url' => 'SirketGiris')) }}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                            </div>
                        @endif

                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'username or mail')) }}
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        {{ Form::password('pass', array('class' => 'form-control', 'placeholder' => 'password')) }}
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      {{ Form::submit('Login', array('class' => 'btn btn-success btn-block')) }}
                                    
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                           {{ Form::close() }}



                        </div>                     
                    </div>  
        </div>

          <div id="loginbox" class="mainbox col-md-8">                    
            <div class="panel panel-success" >
                       

                    <div class="panel-body loginTxtPanel">
                            
                        <p>Yenibiris.com'da <strong>16.000.000'u</strong> aşkın özgeçmiş bulunuyor.</p>
                            <p>Hemen üye olun, aradığınız adaya ulaşın!</p>
                            <p>Özgeçmişi bulunan adaylar hakkında bilgi için lütfen <a href="http://kurumsal.yenibiris.com/AboutApplicants.aspx" target="self">tıklayın</a></p>
                            <p>Aylık ortalama <strong>2 milyon 500 bin</strong> tekil ziyaretçi tarafından ziyaret
                            edilen Yenibiris.com'a üyelik ile; <strong>anında iş ilanı oluşturup hemen başvuru almaya</strong>
                            başlayabilir, <strong>başvuruları filtreleyip değerlendirebilir</strong> ve <strong>adaylarla iletişim kurabilirsiniz</strong>.</p>
                            <p>Kullanıcılarımızdan gelen geri bildirim ve istekler doğrultusunda sürekli iyileştirilen
                            ve zenginleşen hizmetleriyle Yenibiris.com, <strong>"İşe Alım"</strong> sürecinizi
                            en kısa zamanda, en az emek ve maliyetle tamamlamanıza yardımcı olur.
                            Yenibiris.com size aday seçme, değerlendirme sürecinizde <strong>hız ve zaman kazandırır.</strong></p>

                            
                        <div class="txtCntr mrgnTop15">
                            {{ HTML::link('SirketKayit', 'Sign Up Now', array('class' => 'btn btn-block btn-primary')) }}
                        

                        </div>
                    </div>                   
                    </div>  
        </div>

    </div>

    
        </div>
    </div>
    
                   
</div>
@stop


