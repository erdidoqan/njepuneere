
@extends('layouts.ads')

@section('content')

<div class="panel panel-fixed panel-primary">

  <div class="panel-body">
  @if($errors->any())
          <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ implode('', $errors->all('<p class="error">Daha önce başvuru yapılmış</p>')) }}
          </div>
        @endif
      <div class="col-sm-12">
      <div class="col-sm-6">
      <h1 class="text-danger"><b> {{$adsInfo->ads_name}}</b></h1>
                <h6>{{$adsInfo->ref_code}}</h6>
            </div>
            <div class="col-sm-6">
                <img src="{{User::$img_sirket_src."".$adsInfo->logo}}" alt="post img" class="pull-right img-responsive img-thumbnail" style="width:200px; height=150px; ">
      </div>
    </div>
  </div>
  </div>

  <div class="panel panel-fixed panel-primary">
    <div class="panel-body">
      <div class="col-sm-12">
                <h5 class="text-success"><span class="glyphicon glyphicon-play"></span> Job Description</h5><br>
                <p> {{$adsInfo->job_desc}}</p><hr>
                <h5 class="text-success"><span class="glyphicon glyphicon-play"></span> Required Qualifications</h5><br>
                 <p> {{$adsInfo->qua}}</p><hr>

                <h5 class="text-success"><span class="glyphicon glyphicon-play"></span> Additional Information</h5>
                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Company Name</label>
                    <div class="col-sm-6">
                      <p>{{ $adsInfo->com_name }}</p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Business Area</label>
                    <div class="col-sm-6">
                      <p> {{$ads->bus_area}} </p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Position</label>
                    <div class="col-sm-6">
                      <p> {{$ads->position}} </p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Working Style</label>
                    <div class="col-sm-6">
                      <p>{{$ads->working_style}}</p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Experience</label>
                    <div class="col-sm-6">
                      <p>{{$ads->exp}}</p>
                    </div>
                </div>

                          <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Education Degre</label>
                    <div class="col-sm-6">
                      <p>{{$ads->degree}}</p>
                    </div>
                </div>

                         <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Gender</label>
                    <div class="col-sm-6">
                      <p>{{$ads->gender}}</p>
                    </div>
                </div>

                        <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Number of Staff</label>
                    <div class="col-sm-6">
                      <p>{{$adsInfo->number_of_staff}}</p>
                    </div>
                </div>

                        <!-- Text input-->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Release Date</label>
                    <div class="col-sm-6">
                      <p>{{$adsInfo->rel_date}}</p>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" for="textinput">Deadline</label>
                    <div class="col-sm-6">
                      <p>{{$adsInfo->pub_time}}</p>
                    </div>
                </div>

                @if ($adsInfo->disabled=0)
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="textinput">Disabled</label>
                      <div class="col-sm-6">
                        <p></p>
                      </div>
                  </div>
                @endif

              </div> 

             
    </div>
  </div>
<hr>
@if(Auth::user())
  <div class ="navbar navbar-fixed-bottom">
                <div class="row">
                    <div class="col-lg-6" style="margin-left:215px;margin-bottom:-44px;">
               <div class="row mobile-social-share">
                <div class="col-md-9" style="margin-top:13px;">
                {{ Form::open(array('route' => array('apply.store', $ads->id, $adsInfo->id, $adsInfo->user_id))) }}
                    {{ Form::hidden('apply',1) }}
                    {{ Form::hidden('ads',$ads->id) }}
                    {{ Form::hidden('adsInfo',$adsInfo->id) }}
                    {{ Form::hidden('sirket_id', $adsInfo->user_id) }}
                  {{ Form::submit('Apply', array('title'=>'Apply','id' => 'apply','class' => 'btn btn-warning btn-lg')) }}
                {{ Form::close() }}

                </div>
            <div id="socialHolder" class="col-sm-3">
              <button type="button" class="btn btn-success" style="margin-top:18px;margin-left:-35px;">
               Complain
              </button>
            <div id="socialShare" class="btn-group share-group dropup">
                    <a data-toggle="dropdown" class="btn btn-success">
                         <i class="fa fa-share-alt fa-inverse"></i>
                    </a>
            <button href="#" data-toggle="dropdown" class="btn btn-success dropdown-toggle share">
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li>
                  <a data-original-title="Twitter" rel="tooltip"  href="#" class="btn btn-twitter" data-placement="left">
                <i class="fa fa-twitter"></i>
              </a>
              </li>
              <li>
                <a data-original-title="Facebook" rel="tooltip"  href="#" class="btn btn-facebook" data-placement="left">
                <i class="fa fa-facebook"></i>
              </a>
              </li>         
              <li>
                <a data-original-title="Google+" rel="tooltip"  href="#" class="btn btn-google" data-placement="left">
                <i class="fa fa-google-plus"></i>
              </a>
              </li>
                <li>
                <a data-original-title="LinkedIn" rel="tooltip"  href="#" class="btn btn-linkedin" data-placement="left">
                <i class="fa fa-linkedin"></i>
              </a>
              </li>
              <li>
                <a data-original-title="Pinterest" rel="tooltip"  class="btn btn-pinterest" data-placement="left">
                <i class="fa fa-pinterest"></i>
              </a>
              </li>
                        <li>
                <a  data-original-title="Email" rel="tooltip" class="btn btn-mail" data-placement="left">
                <i class="fa fa-envelope"></i>
              </a>
              </li>
                    </ul>
                    
          </div>
            </div>
        </div>
          </div>
        </div>
      </div>
      @if($errors->any())
               <script type="text/javascript">
                  $('#apply').click(function() {
                
                    $.smallBox({
                      title : "{{$adsInfo->ads_name}}",
                      content : "<i class='fa fa-clock-o'></i> <i>You did apply to ads</i>",
                      color : "#C46A69",
                      iconSmall : "fa fa-thumbs-up bounce animated",
                      timeout : 4000
                    });
                
                  })

                </script>
      @endif  
      <script type="text/javascript">
      $('#apply').click(function() {
    
        $.smallBox({
          title : "{{$adsInfo->ads_name}}",
          content : "<i class='fa fa-clock-o'></i> <i>You did apply to ads</i>",
          color : "#C79121",
          iconSmall : "fa fa-thumbs-up bounce animated",
          timeout : 4000
        });
    
      })

      </script>
      @endif
@stop