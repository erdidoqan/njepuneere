
@extends('layouts.ads')

@section('title')
<title>{{ucwords($adsInfo->com_name)}} | Njepuneere</title>
@stop

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
@if (Session::has('warning'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Warning!</strong> {{Session::get('warning')}}
</div>
@endif 
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
                      <p>{{Carbon::createFromTimestamp(strtotime($adsInfo->created_at))->diffForHumans()}}</p>
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
@if(Auth::user())
<div class="panel panel-primary">
  <div class="panel-body">
    <div class="col-sm-12">
      <div class="col-sm-4">

            <a href="#apply" class="btn btn-warning btn-block" data-toggle="modal">Apply</a>
        
      </div>
      <div class="col-sm-4">
        
      </div>
      <div class="col-sm-4">
        <button type="button" class="btn btn-success">
               Complain
        </button>

        <div class="btn-group">
              <button type="button" class="btn btn-labeled btn-primary dropdown-toggle" data-toggle="dropdown">
               <span class="btn-label">
                <i class="fa fa-share-alt"></i> 
               </>Share <span class="caret"></span>
              </button>

              <ul class="dropdown-menu">
                <li>
<div class="fb-share-button" data-href="http://njepuneere.com/ads/39"><i class="fa fa-facebook"></i> Facebook</div>
                </li>
                <li>
                  <a href="#" class="fa fa-twitter"> Twitter</a>
                </li>
                <li>
                  <a href="#" class="fa fa-linkedin"> Linked In</a>
                </li>
              </ul>
            </div>
      </div>
    </div>
  </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="apply" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title">
          {{ucwords($adsInfo->com_name)}} <small>({{ucwords($adsInfo->ads_name)}} )</small>
        </h4>
      </div>
      <div class="modal-body no-padding">
      {{ Form::open(array('route' => array('apply.store', $ads->id, $adsInfo->id, $adsInfo->user_id),'id'=>'smart-form-register','class'=>'smart-form')) }}
              <fieldset>
                <section>
                  <div class="row">
                    <label class="label col col-2">Resume</label>
                    <div class="col col-10">
                      <label class="input"> 
                        @if($cv->count())
                        <select class="form-control" id="category">
                          @foreach($cv as $c)
                          <option value="{{$c->id}}">{{ ucwords($c->resume_name) }}</option>
                          @endforeach
                        </select>
                        @else
                          <a href="/my-resume" class="btn btn-block btn-danger">You must create a CV !</a>
                        @endif
                      </label>
                    </div>
                  </div>
                </section>

                <section>
                  <div class="row">
                    <div class="col col-2"></div>
                    <div class="col col-10">
                      <label class="textarea">
                          <i class="icon-append fa fa-comment"></i>
                          {{Form::textarea('prewritten', '', array('rows'=>'4', 'id'=>'message', 'placeholder'=>'Pre Written'))}}
                      </label>
                      <div class="note">
                          <strong>Note:</strong> works in Chrome, Firefox, Opera and IE10.
                      </div>
                    </div>
                  </div>
                </section>
              </fieldset>
              
              <footer>
                
                {{ Form::hidden('apply',1) }}
                {{ Form::hidden('ads',$ads->id) }}
                {{ Form::hidden('adsInfo',$adsInfo->id) }}
                {{ Form::hidden('sirket_id', $adsInfo->user_id) }}
                {{ Form::submit('Apply', array('title'=>'Apply','id' => 'applied','class' => 'btn btn-warning')) }}
                
                
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
              </footer>
            {{ Form::close() }}
      </div>
    </div>
  </div>
</div>

<script>

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=764883146931663&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
      @endif
@stop