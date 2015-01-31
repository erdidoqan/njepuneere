@extends('layouts.search')

@section('title')
<title>{{ucwords($search)}}  Njepuneere</title>
@stop

@section('content')

  <div class="panel panel-fixed panel-primary">
    <div class="panel-body">
      <small>Display options : {{ $search }}</small>
    </div>
  </div>
  @if($results->count())
<table id="inbox-table" class="table table-striped table-hover">
  <thead>
             <tr><th>Company</th>
                 <th>Position / Company Name</th>
                 <th>City / Country</th>
                 <th>Deadline</th>
                 <th>Apply</th>
             </tr>
                 </thead>
                 @foreach($results as $r)
            <tbody>

              <tr id="msg1" class="unread">
                <td class="inbox-table-icon">
                <a href="/ads/{{$r->id}}">
                  <div>
                    <img src="{{User::$img_sirket_src."".$r->logo}}" style="width:120px;height:50px;">
                  </div>
                  </a>
                </td>
                <td class="inbox-data-from hidden-xs hidden-sm">
                  <div>
                    <a href="/ads/{{$r->id}}">{{ucwords($r->com_name)}}</a>
                  </div>
                  <div class="checkbox">
                  <small> {{str_limit(ucwords($r->ads_name),30)}} </small>
                  </div>
                </td>
                <td class="inbox-data-attachment hidden-xs">
                  <div>
                    <a href="/ads/{{$r->id}}"><span class="text-success"><i class="fa fa-map-marker"></i> {{ucwords($r->work_place)}}</span></a>
                  </div>
                </td>
                <td class="inbox-data-attachment hidden-xs">
                  <div>
                    <a href="/ads/{{$r->id}}"><span class="label label-primary">{{ Carbon::createFromTimestamp(strtotime($r->created_at))->addDays($r->pub_time)->diffForHumans() }}</a>
                  </div>
                </td>
                <td class="inbox-data-date hidden-xs">
                  <div>
                    @if(Auth::user())
                      <a href="/ads/{{$r->id}}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> </a>
                    @else
                      <a data-toggle="modal" href="#myModal"  class="btn btn-primary btn-sm glyphicon glyphicon-user"  rel="tooltip" data-placement="top" data-original-title="Quick Apply"></a>
                    @endif
                  </div>
                </td>
             </tr>

            </tbody>
            @endforeach
</table>
  @else
  <div class="alert alert-warning">
    <h4>I'm sorry your search returned no results</h4>
  </div>
  @endif
{{$results->appends(array('search' => $search, 'work_place' => $workPlace))->links()}}
@stop

