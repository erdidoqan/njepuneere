

    	<div style="display: none;" id="form-education">
    	{{ Form::model($cv, array('method' =>'PATCH' , 'route' => array('exp.update', $cv->id),'id'=>'smart-form-register','class'=>'smart-form')) }}
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
                            {{ Form::text('pos', '', array('placeholder' => 'Position Name *')) }}
                        </label>
                    </section>
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('com_name', '', array('placeholder' => 'Company Name *')) }}
                        </label>
                    </section>
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('com_sec', '', array('placeholder' => 'Company Sector')) }}
                        </label>
                    </section>
                </div>
                <div class="row">
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('workspace', '', array('placeholder' => 'Workspace in the Company*')) }}
                        </label>
                    </section>
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('com_role', '', array('placeholder' => 'Role in the Company *')) }}
                        </label>
                    </section>
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('work_style', '', array('placeholder' => 'Working Style')) }}
                        </label>
                    </section>
                </div>
                <div class="row">
                    <section class="col col-4">
                        <label class="input">
                            <label class="select">
                                {{Form::ulke()}} <i></i> 
                            </label>
                        </label>
                    </section>
                    <section class="col col-4">
                        <label class="input">
                            <label class="select">
                            	{{Form::sehir()}} <i></i> 
                            </label>
                        </label>
                    </section>
                </div>
                <div class="row">
                    <section class="col col-4">
                        <div class="form-group">
							<div class="input-group">
								<input class="form-control" id="from" type="text" name="start_day" placeholder="Starting Date*">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
                    </section>
                    <section class="col col-4">
                       	<div class="form-group">
							<div class="input-group">
								<input class="form-control" id="to" type="text" name="end_day" placeholder="Date of Leaving">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
                    </section>
                </div>
            </fieldset>
            	<footer>
		            <button type="submit" id="exp" class="btn btn-success">
		                 <i class="glyphicon glyphicon-save"></i> Save
		            </button>
		            <a href="#" id="edukapa" class="btn btn-danger">
		                  Cancel
		            </a>
        		</footer>
		{{ Form::close() }}     
		  </div>
@if($cv_exp->count())
    <div class="col-sm-12">
    @foreach($cv_exp as $exp)
        <h4 class="txt-color-red"><strong>{{ ucwords($exp->pos) }}</strong></h4>
        <span><strong> {{ucwords($exp->com_name)}} </strong></span>,<span> {{$exp->sehir}} </span>
        <div class="right"><a class="btn btn-xs btn-danger" id="exp-del" href="{{ route('exp.destroy',array($exp->id)) }}"> <i class="glyphicon glyphicon-trash"></i></a></div>
        <hr>
    @endforeach
    </div>
@endif