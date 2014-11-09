<div class="panel panel-primary">
	<div class="panel-body">
		<span class="glyphicon glyphicon-info-sign"></span> <span>0-50  Candidate(s) Applied.</span>
	</div>
	</div>
	<hr>
	<div class="panel panel-primary">
	<div class="panel-body">
		<div class="col-sm-6">
		<h4 class="text-info"><b>Latest Ads</b></h4><br>
			@if($last->count())
				@foreach($last as $l)
					<a href="{{$l->id}}"><span class="text-success"> {{$l->wanted_pos}} </span></a><br>
					<span> {{$l->position}} </span><br><br>
				@endforeach
			@endif
		</div>
		<div class="col-sm-6">
		<h4 class="text-info"><b>Similar Ads</b></h4><br>
			@if($last->count())
				@foreach($last as $l)
					<a href="{{$l->id}}"><span class="text-success"> {{$l->wanted_pos}} </span></a><br>
					<span> {{$l->position}} </span><br><br>
				@endforeach
			@endif
		</div>
	</div>
	</div>