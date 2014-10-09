@extends('layouts.admin')

@section('content')

<div class="col-md-12">
	{{ Form::open(array('route' => 'posts.store')) }}
	@if($errors->any())
	<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		{{ implode('',$errors->all('<li class="error">:message</li>')) }}
	</div>
	@endif
	<div class="control-group">
		{{ Form::label('title','Başlık:') }}
		{{ Form::text('title', '', array('class' => 'form-control', 'placeholder' => 'Bir Başlık Yazınız')) }}
	</div>
	<br>
	<div class="control-group">
		{{ Form::label('body','Postunuzu Yazınız:') }}
		{{ Form::textarea('body', '', array('class' => 'ckeditor')) }}
	</div>
	<hr>
	<strong>Özel SEO Özellikleri </strong><em>(Bu öğeler isteğe bağlıdır.)</em><br><br>
	<div class="control-group">
		{{ Form::label('m_desc','Postunuza açıklama eklemek istermisiniz:') }}
		{{ Form::text('m_desc', '', array('class' => 'form-control', 'placeholder' => 'Post Açıklaması')) }}
	</div>
	<br>
	<div class="control-group">
		{{ Form::label('m_keyw','Etiket ekleyin virgül(,) ile ayırınız:') }}
		{{ Form::text('m_keyw', '', array('class' => 'form-control', 'placeholder' => 'Etiket ekleyin virgül(,) ile ayırınız')) }}
	</div>
	<br>
	<div class="col-md-12">
		{{ Form::submit('Postu Oluştur!', array('class' => 'btn btn-succes')) }}
		{{ link_to_route('posts.index', 'Postu iptal et',null, array('class' => 'btn btn-warning')) }}
		{{ Form::close() }}
	</div>
</div>

@stop