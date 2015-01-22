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
		<table class="table table-hover">
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
                 
                 	<tr>
                      <td><a style="display:block" href="/ads/{{$r->id}}">{{str_limit(ucwords($r->com_name), 20)}}</a></td>
                      <td>{{str_limit(ucwords($r->ads_name), 20)}}</td>
                      <td><span class="text-warning"><i class="fa fa-map-marker"></i> {{ucwords($r->work_place)}}</span></td>
                      <td><span class="label label-info">{{ Carbon::createFromTimestamp(strtotime($r->created_at))->addDays($r->pub_time)->diffForHumans() }}</span></td>
                      <td>
                      @if(Auth::user())
                        <a href="/ads/{{$r->id}}" class="btn btn-info btn-block"><i class="glyphicon glyphicon-plus"></i> Apply </a>
                      @else
                      	<a data-toggle="modal" href="#myModal"  class="btn btn-info btn-block glyphicon glyphicon-user"  rel="tooltip" data-placement="top" data-original-title="Quick Apply"></a>
                      @endif
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
  </div>

@stop

