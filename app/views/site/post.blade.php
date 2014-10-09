@extends('layouts.master')

@section('content')

    <h1>{{ $post->title }}</h1>
    
		<em>{{ ucwords($post->user->username)}}, tarafından yazıldı.</a></em>
		<p><span class="glyphicon glyphicon-time"></span>Post Tarihi, {{ $date }}</p>
			<article>
				<p>{{ $post->body}}</p>
			</article>
			{{HTML::link('/', 'Geri', array('class' => 'btn btn-blog pull-right marginBottom10'))}}

@stop