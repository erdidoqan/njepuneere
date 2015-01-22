	<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
		<header>
			<h2>Filter Jobs</h2>				
		</header>
		<div>					
		<div class="widget-body">
		{{ Form::open(array('url' => 'search', 'class'=>'smart-form')) }}
			<fieldset>
				<section>
					<label class="label"><b>Keyword</b></label>
					<label class="input"> <i class="icon-append fa fa-question-circle"></i>
						{{ Form::text('search','', array('placeholder' => $search)) }}
						
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
					<button type="submit" class="btn btn-success btn-lg btn-block">Filter</button>
				</section>
			</fieldset>
		{{ Form::close() }}
	</div></div>
	</div>