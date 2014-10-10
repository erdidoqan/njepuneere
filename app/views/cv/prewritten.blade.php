@extends('cv.page')

@section('content')
<div class="col-sm-12" style="margin-top:30px;">
  <div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
    <header>
      <h2>Pre Written</h2>       
    </header>
    <div>         
    <div class="widget-body">
            @if($pre->count())
              @foreach($pre as $pre)
                <div class="row">
                    <div class="col-sm-6">
                      <a href="#">{{ $pre->prewr_name }}</a><small></small><br><br>
                        <div class="col-sm-6">Date of Last Update:</div>
                        <div class="col-sm-4">
                        {{ Carbon::createFromTimestamp(strtotime($pre->created_at))->diffForHumans() }}
                        </div>
                        <br>
                    </div>  
                    <div class="col-sm-offset-8">
                      <a class="btn btn-primary btn-sm">Del</a>
                      <a class="btn btn-primary btn-sm">Show</a>
                      <a class="btn btn-primary btn-sm">Update</a>
                      </div>
                </div>
                
          <hr>@endforeach
            @endif
            <div class="well text-primary">
                  <h4 class="text-success">Create a new Pre-written</h4>
                  <div class="col-sm-6">
                    <small>Registered cover letter reached its destination and save time as well!</small>
                    {{ Form::open(array('route' => 'cv.store','id'=>'smart-form-register','class'=>'smart-form')) }}
                    {{Form::hidden('resume_name', 'My Resume')}}
                  </div>
                  <div class="col-sm-offset-9">
                    <a href="prewritten-ic" class="btn btn-primary btn-lg">Create Pre-written</a>
                  </div>
                    {{Form::close()}}
            </div>  
    </div>
  </div>
</div>
</div>


@stop