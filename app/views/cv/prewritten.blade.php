@extends('cv.page')

@section('content')
  <div class="panel panel-success" style="margin-top:30px;">
    <div class="panel-body">
        <h4><strong>My Pre-Written</strong></h4><br>
            @if($apply->count())
              @foreach($apply as $app)
                <div class="row">
                    <div class="col-sm-6">
                      <a href="#">{{ $app->ads_name }}</a><small> ({{$app->com_name}})</small><br><br>
                        <div class="col-sm-6">Date of Last Update:</div>
                        <div class="col-sm-4">
                        {{ Carbon::createFromTimestamp(strtotime($app->created_at))->diffForHumans() }}
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

<script type="text/javascript">
  var activeEl = 3;
    $(function() {
        var items = $('.btn-nav');
        $( items[activeEl] ).addClass('active');
        $( ".btn-nav" ).click(function() {
            $( items[activeEl] ).removeClass('active');
            $( this ).addClass('active');
            activeEl = $( ".btn-nav" ).index( this );
        });
    });
</script>


@stop