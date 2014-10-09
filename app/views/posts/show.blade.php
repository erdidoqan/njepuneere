@extends('layouts.admin')

@section('content')

<div class="col-lg-8">
	<hr>
	<h1>{{ $post->title }}</h1>
	<p class="lead">{{ ucwords($post->user->username) }}</p>
	<hr>
	<p><span class="glyphicon glyphicon-time"></span> Posted {{ $date }}</p>
	<hr>
	<p class="lead">{{ $post->body }}</p>
</div>

<div class="col-lg-4">
	<div class="well">
		<legend>Ne Yapmak istersiniz?</legend>
		{{ link_to_route('posts.edit', 'Düzenle', array($post->id), array('class' => 'btn btn-primary')) }}
		{{ link_to_route('posts.index', 'Anasayfa', null, array('class' => 'btn btn-warning')) }}
		<br>
	</div>
</div>

@stop