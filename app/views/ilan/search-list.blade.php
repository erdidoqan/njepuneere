
@extends('layouts.search')

@section('content')
<div class="panel panel-fixed panel-primary">
  <div class="panel-body">
  <small>Display options : {{ ucwords($search) }}</small>
    
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
                      <td><a href="/ads/{{$r->id}}">{{ucwords($r->com_name)}}</a></td>
                      <td><a href="/ads/{{$r->id}}">{{ucwords($r->ads_name)}}</a></td>

                      <td><span class="text-warning"><i class="fa fa-map-marker"></i> {{ucwords($r->work_place)}}</span></td>
                      <td><span class="label label-info">{{ Carbon::createFromTimestamp(strtotime($r->created_at))->addDays($r->pub_time)->diffForHumans() }}</span></td>
                      <td>
                      @if(Auth::user())
                      {{ Form::open(array('route' => array('apply.store', $r->id))) }}
                          {{ Form::hidden('apply',1) }}
                        {{ Form::submit('apply', array('title'=>'Apply','id' => 'smart-mod-eg1','class' => 'btn btn-warning btn-xs')) }}
                      {{ Form::close() }}
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
	
  </div>
@stop

