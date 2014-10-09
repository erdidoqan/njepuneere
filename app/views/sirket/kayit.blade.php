 <head>
    @include('partials/header')

  </head>

  <body>
      @include('partials/nav')

@extends('layouts.auth')

@section('content')

<div class="col-md-12" style="margin-top:30px;">
   
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
              <div class="container">    
        <div id="loginbox" class="mainbox col-md-12">                    
            <div class="panel panel-success" >
                    <div class="panel-heading">
                        <div class="panel-title">Employer Register</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                            </div>
                        @endif
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                         {{ Form::open(array('url' => 'SirketKayit','class'=>'form-horizontal')) }}
        <div class="col-xs-6">
              <!-- Text input-->
              <legend>Authority Information</legend>
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Name:*</label>
                <div class="col-sm-8">
                  {{ Form::text('name', '', array('class' => 'form-control input-sm', 'placeholder' => 'Name')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Surname:*</label>
                <div class="col-sm-8">
                  {{ Form::text('sname', '', array('class' => 'form-control input-sm', 'placeholder' => 'Surname')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
              <label class="col-sm-3 control-label" for="textinput">Gender:</label>
                <div class="col-sm-8">
                  {{ Form::label('male','Male') }}
                  {{ Form::radio('sex[]','Male','',array('id'=>'male')) }}
                  {{ Form::label('female','Female') }}
                  {{ Form::radio('sex[]','Female','',array('id'=>'female')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Birthday:</label>
                <div class="col-sm-8">
                  {{ Form::text('birthday', '', array('class' => 'form-control input-sm', 'placeholder' => 'Birthday')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Phone:*</label>
                <div class="col-sm-8">
                  {{ Form::text('phone', '', array('class' => 'form-control input-sm', 'placeholder' => 'Contact Phone')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Email:*</label>
                <div class="col-sm-8">
                  {{ Form::text('email', '', array('class' => 'form-control input-sm', 'placeholder' => 'Email')) }}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Password:*</label>
                <div class="col-sm-8">
                  {{ Form::password('pass', array('class' => 'form-control input-sm', 'placeholder' => 'Password')) }}
                </div>
              </div>
      </div>
      <div class="col-xs-6">
              <legend>Company Information</legend>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Company Name:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_name', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Name')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Company Nipt:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_name', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Nipt')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Company Sector:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_sector', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Sector')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Employees:*</label>
                <div class="col-sm-8">
                  {{ Form::text('nr_emp', '', array('class' => 'form-control input-sm', 'placeholder' => 'Number of Employees')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Company Address:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_add', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Address')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Zip Code:*</label>
                <div class="col-sm-8">
                  {{ Form::text('zip_code', '', array('class' => 'form-control input-sm', 'placeholder' => 'Zip Code')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Country:*</label>
                <div class="col-sm-8">
                  {{ Form::text('country', '', array('class' => 'form-control input-sm', 'placeholder' => 'Country')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">City:*</label>
                <div class="col-sm-8">
                  {{ Form::text('city', '', array('class' => 'form-control input-sm', 'placeholder' => 'City')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Web Address:*</label>
                <div class="col-sm-8">
                  {{ Form::text('web_add', '', array('class' => 'form-control input-sm', 'placeholder' => 'Web Address')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Fax Number:*</label>
                <div class="col-sm-8">
                  {{ Form::text('fax', '', array('class' => 'form-control input-sm', 'placeholder' => 'Fax Number')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput"></label>
                <div class="col-sm-8">
                  <a href="" data-toggle="modal" data-target="#myModal">I agree I have read the terms of use.</a>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-sm">Save and Continue  <span class="glyphicon glyphicon-forward"></span></button>
              </div>
            </div>
          </div>
      </div>
            {{ Form::close() }}
        </div>
        </div>                     
      </div>  
        </div>


    </div>

    
        </div>
    </div>
    
                   
</div>
</body>
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h1 class="modal-title" id="myModalLabel">Terms of use</h1>
      </div>
      <div class="modal-body">
       
        <p>1. Müşteri kurumsal üyelik bilgilerini, şifreyi, adayların verdiği şahsi ve özel bilgileri üçüncü kişilere açıklamamayı, bilgilerin gizliliği için gerekli tedbirleri almayı ve bu bilgileri üye olmayan üçüncü kişi ve kuruluşlara vermemeyi kabul ve taahhüt eder. Müşteri ayrıca kurumsal üyelik şifresini kullanan yetkili kişinin değişmesi durumunda bunu derhal Yenibiris.com’a bildirecektir. Müşteri’nin işbu yükümüne aykırı davranması halinde Yenibiris.com sözleşmeyi derhal feshederek bu nedenle uğramış olduğu her türlü zararın tazminini talep edebilir. </p>
        <p>2. Müşteri, Yenibiris.com'dan olan hak alacak ve yükümlülüklerini Yenibiris.com'un yazılı onayı olmadan üçüncü kişilere tamamen veya kısmen devir ve temlik edemez. 
</p>
        <p>3. Müşteri, Yenibiris.com sayfalarında yayınladığı ilanlarına gelen başvurularını Yenibiris.com haricindeki bir faks numarası, e-posta, adres veya web adresine yönlendiremeyeceğini; ayrıca, Yenibiris.com’un izni olmaksızın Yenibiris.com araçları ile reklam, duyuru v.b. yapmamayı kabul ve taahhüt eder. Site verilerinin Yenibiris.com’un bilgisi dışında herhangi bir şekilde kopyalanması, çoğaltılması ve dağıtılması yasaktır. 
</p>
        <p>4. Yenibiris.com kurumsal üyelik ücretsiz, ilan vermek ücretlidir. Yenibiris.com sağlanan ürün / hizmetler için paket, fiyat ve kampanya koşullarını değiştirme hakkını saklı tutar.
</p>
        <h2><kbd>esc</kbd> or click anyway to close</h4>
        
      </div>
      
    </div>
  </div>
</div>
@stop


