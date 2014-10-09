@extends('layouts.admin')


@section('content')

<div class="col-md-offset-10">
	{{ link_to_route('posts.create', 'Post Oluştur', null, array('class' => 'btn btn-primary')) }}
</div>
<div class="col-md-12"><h3>Oluşturduğun Postlar</h3></div>
@if($posts->count())
	<div class="col-md-12">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Başlık</th>
					<th>Açıklama</th>
					<th>Oluşturma Zamanı</th>
					<th>Görüntüle</th>
					<th>Düzenle</th>
					<th>Sil</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $p)
				<tr>
					<td>{{ $p->title }}</td>
					<td>{{ substr($p->body, 0, 50). '[...]'}}</td>
					<td><span class="label label-info">{{ Carbon::createFromTimestamp(strtotime($p->created_at))->diffForHumans() }}</span></td>
					<td>{{ link_to_route('posts.show', 'Görüntüle', array($p->id), array('class' => 'btn btn-info')) }}</td>
					<td>{{ link_to_route('posts.edit', 'Düzenle', array($p->id), array('class' => 'btn btn-warning')) }}</td>
					<td>
						{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $p->id))) }}
						{{ Form::submit('Sil', array('class' => 'btn btn-danger')) }}
						{{ Form::close() }}

					</td>
						
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@else
	<div class="alert alert-info col-md-4" style="margin-top: 15px">Postunuz Bulunmamaktadır.</div>
@endif

@stop