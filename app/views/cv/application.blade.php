@extends('cv.page')

@section('content')
  <div class="panel panel-success" style="margin-top:30px;">
    <div class="panel-body">
        <h4><strong>My Application</strong></h4><br>
            @if($apply->count())
              @foreach($apply as $app)
                <div class="row">
                    <div class="col-sm-8">
                      <a href="#">{{ $app->ads_name }}</a><small> ({{$app->com_name}})</small><br><br>
                        <div class="col-sm-4">Resume Name:</div>
                        <div class="col-sm-4">{{ $app->work_place }}</div><br>
                        <div class="col-sm-4">Application Date:</div>
                        <div class="col-sm-4">
                        {{ Carbon::createFromTimestamp(strtotime($app->created_at))->diffForHumans() }}
                        </div>
                        <br>
                    </div>  
                    <div class="col-sm-4">
                      <a class="btn btn-primary">Messages</a>
                      <a class="btn btn-danger">to archive</a>
                      </div>
                </div>
                
          <hr>@endforeach
          @else
          <div class="alert alert-warning">
            <p>You have no ads to apply</p>
          </div>
            @endif
    </div>
  </div>


@stop