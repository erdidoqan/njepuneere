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

              <tr id="msg1" class="unread"><a href="/ads/{{$r->id}}">
                <td class="inbox-table-icon">
                  <div>
                    <img src="{{User::$img_sirket_src."".$r->logo}}" style="width:120px;height:30px;">
                  </div>
                </td>
                <td class="inbox-data-from hidden-xs hidden-sm">
                  <div>
                    {{str_limit(ucwords($r->com_name), 20)}}
                  </div>
                </td>
                <td class="inbox-data-attachment hidden-xs">
                  <div>
                    <span class="text-warning"><i class="fa fa-map-marker"></i> {{ucwords($r->work_place)}}</span>
                  </div>
                </td>
                <td class="inbox-data-attachment hidden-xs">
                  <div>
                    <span class="label label-info">{{ Carbon::createFromTimestamp(strtotime($r->created_at))->addDays($r->pub_time)->diffForHumans() }}
                  </div>
                </td>
                <td class="inbox-data-date hidden-xs">
                  <div>
                    @if(Auth::user())
                      <a href="/ads/{{$r->id}}" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Apply </a>
                    @else
                      <a data-toggle="modal" href="#myModal"  class="btn btn-info glyphicon glyphicon-user"  rel="tooltip" data-placement="top" data-original-title="Quick Apply"></a>
                    @endif
                  </div>
                </td>
              </a></tr>

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

