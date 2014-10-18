<div class="panel panel-primary">
	<div class="panel-heading">Filter Results</div>
	<div class="panel-body">
		{{ Form::open(array('url' => 'search', 'class'=>'smart-form')) }}
			<fieldset>
				<section>
					<label class="label"><b>Keyword</b></label>
					<label class="input"> <i class="icon-append fa fa-question-circle"></i>
						{{ Form::text('search','', array('placeholder' => 'Filter')) }}
						
						<b class="tooltip tooltip-top-right">
							<i class="fa fa-warning txt-color-teal"></i> 
							Sort by position name</b> 
					</label>
				</section>
			</fieldset>
			<fieldset>
				<section>
					<label class="label"><b>Company Name</b></label>
					<label class="input"> <i class="icon-append fa fa-question-circle"></i>
						{{ Form::text('search','', array('placeholder' => 'Filter')) }}
						
						<b class="tooltip tooltip-top-right">
							<i class="fa fa-warning txt-color-teal"></i> 
							Sort by position name</b> 
					</label>
				</section>
			</fieldset>
			
			<fieldset>
				<section>
					<label class="label"><b>City</b></label>
					<label class="input"> <i class="icon-append fa fa-question-circle"></i>
						<input type="text" placeholder="City">
						<b class="tooltip tooltip-top-right">
							<i class="fa fa-warning txt-color-teal"></i> 
							Sort by city</b> 
					</label>
				</section>
			</fieldset>
			<fieldset>
				<section>
					<button type="submit" class="btn btn-warning btn-lg btn-block">Filter</button>
				</section>
			</fieldset>
		{{ Form::close() }}
	</div>
	</div>