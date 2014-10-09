@extends('cv.resume')

@section('content')

<div class="modal fade" id="newtitle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    {{Form::model($cvs, array('route' => array('cv.update', $cvs->id)))}}
        @if($errors->any())
          <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ implode('', $errors->all('<p class="error">:message</p>')) }}
          </div>
        @endif
      <div class="modal-body">
      
        {{ Form::label('resume_name', 'Resume Title') }}
        {{ Form::text('resume_name', Input::old('resume_name'), array('class' => 'form-control', 'placeholder' => 'Please insert title here...')) }}

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
      </div>
      {{Form::close()}}
    </div>
  </div>
</div>
@stop