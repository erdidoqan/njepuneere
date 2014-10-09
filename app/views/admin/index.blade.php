@extends('layouts.admin')
    
@section('content')

<div class="container">
    <div class="row">
    	<div class="col-md-5">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h3 class="panel-title">Postlar</h3>
            </div>
            @foreach($posts as $p)
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="http://www.jquery2dotnet.com/2013/10/google-style-login-page-desing-usign.html">
                                        {{ $p->title }}</a>
                                    <div class="mic-info">
                                        By: <a href="#">{{ ucwords( $p->user->username ) }}</a> on {{ Carbon::createFromTimestamp(strtotime($p->created_at))->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="comment-text">
                                    {{ Str::limit($p->body, 200)}}
                                </div>
                                <div class="col-xs-offset-8 action">
                                        {{ link_to_route('posts.edit', '', array($p->id), array('class' => 'btn btn-primary btn-sm glyphicon glyphicon-pencil') ) }}
                                    {{ link_to_route('posts.show', '', array($p->id), array('class' => 'btn btn-success btn-sm glyphicon glyphicon-ok') ) }}
                                    {{ link_to_route('posts.destroy', '', array($p->id), array('class' => 'btn btn-danger btn-sm glyphicon glyphicon-trash') ) }}
                                    
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                
            </div>
            @endforeach
        </div>
    </div>
    </div>
</div>

@stop