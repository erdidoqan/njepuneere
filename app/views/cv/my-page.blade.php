@extends('cv.page')

@section('title')
<title>My Page | Njepuneere</title>
@stop

@section('content')
<div class="col-sm-6" style="margin-top:30px;">
	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>Active CV's</h2>				
		</header>
		<div>					
		<div class="widget-body">
			<div class="col-sm-4">
				<p><strong>Occupancy Rate</strong></p>
				<div class="progress">
					<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: {{$cv->rate}}%">
						{{$cv->rate}}
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<p><strong>Resume Title</strong></p>
				<a href="create-resume/{{$cv->id}}">{{ucwords($cv->resume_name)}}</a><small> ({{ucwords($cv->languages)}}) </small>
			</div>
			<div class="col-sm-4">
				<p><strong>Searches</strong></p>
				<p>5 times</p>
			</div>					
		</div>
		</div>
	</div>
</div>
<div class="col-sm-6" style="margin-top:30px;">
	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>My Application</h2>				
		</header>
		<div>					
		<div class="widget-body">
			<div class="col-sm-4">
				<p><strong>Been Examined</strong></p>
				<div class="progress">
					<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
						50% Complete
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<p>Total <span class="text-danger">1</span> Application,<span class="text-danger">1</span> Examined
			    	<br> <span class="text-danger">0</span> not reading Message<br><a href="#">(Messages)</a>
			    	</p>
			</div>				
		</div>
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>Lastest Application</h2>				
		</header>
		<div>					
		<div class="widget-body">
			@if($apply->count())
				<table class="table table-hover">
			    	<thead>
			            <tr><th>Company</th>
			                <th>Position / Company Name</th>
			                <th>City / Country</th>
			                <th>Deadline</th>
			                <th>Apply</th>
			            </tr>
			         </thead>
			         @foreach($apply as $r)
			         <tbody>   
			    		<td><a style="text-decoration: none;" href="ads/{{$r->adsInfo_id}}" rel="tooltip" data-placement="top" data-original-title="<img style='width:100%' src='http://localhost/institutional.karriera/public/img/logo/1407447912.jpg' alt='me' class='online'>" data-html="true">{{$r->com_name}}</a></td>
			    		<td><a style="text-decoration: none;" href="ads/{{$r->adsInfo_id}}">{{$r->ads_name}}</a></td>
			    		<td><span class="text-warning">{{$r->work_place}}</span></td>
			    		<td><span class="label label-info">04 Ağustos 2014</span></td>
			    		<td><a style="text-decoration: none;" href="ads/{{$r->adsInfo_id}}" class="btn btn-xs btn-primary">Go to Ads</a></td>
			    	</tbody>
			    	@endforeach
				</table>
				@else
          <div class="alert alert-warning">
            <p>You have no ads to apply</p>
          </div>
			@endif
		</div>
		</div>
	</div>
</div>

@stop












