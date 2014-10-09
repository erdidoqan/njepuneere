
    	<div style="display: none;" id="form-erd">
    			{{ Form::model($cv, array('method' =>'PATCH' , 'route' => array('edu.update', $cv->id),'id'=>'smart-form-register','class'=>'smart-form')) }}
            <fieldset>
            @if($errors->any())
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ implode('', $errors->all('<p class="error">:message</p>')) }}
                </div>
            @endif
                <div class="row">
                    <section class="col col-4">
                        <label class="input">
                            {{Form::edu_level()}} <i></i> 
                        </label>
                    </section>
                </div>
                <div class="row">
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('school_name', '', array('placeholder' => 'School Name *')) }}
                        </label>
                    </section>
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('department', '', array('placeholder' => 'Department *')) }}
                        </label>
                    </section>
                </div>
                <div class="row">
                    <section class="col col-2">
                        <label class="input">
                            <label class="select">
                                {{Form::ulke()}} <i></i> 
                            </label>
                        </label>
                    </section>
                    <section class="col col-2">
                        <label class="input">
                            <label class="select">
                            	{{Form::sehir()}} <i></i> 
                            </label>
                        </label>
                    </section>
                    <section class="col col-2">
                        <label class="input">
                            {{ Form::text('gra_date', '', array('placeholder' => 'Date *')) }}
                        </label>
                    </section>
                    <section class="col col-2">
                        <label class="input">
                            {{ Form::text('gra_deg', '', array('placeholder' => 'Degree *')) }}
                        </label>
                    </section>
                </div>
            </fieldset>
            	<footer>
		            <button type="submit" id="edu" class="btn btn-success">
		                 <i class="glyphicon glyphicon-save"></i> Save
		            </button>
		            <a href="#" id="erdkapa" class="btn btn-danger">
		                  Cancel
		            </a>
        		</footer>
		{{Form::close()}}
    	</div>
@if($cv_edu->count())
    <div class="col-sm-12">

    @foreach($cv_edu as $edu)
        <h4 class="txt-color-red"><strong>{{ ucwords($edu->school_name) }}</strong> <small>({{ucwords($edu->department)}})</small> </h4>
        <span><strong> {{ucwords($edu->edu_level)}} </strong></span>,<span> {{$edu->sehir}} </span>
        <div class="right"><a class="btn btn-xs btn-danger" id="edu-del" href="{{ route('edu.destroy',array($edu->id)) }}"> <i class="glyphicon glyphicon-trash"></i></a></div>
        <hr>
    @endforeach
    </div>
@endif