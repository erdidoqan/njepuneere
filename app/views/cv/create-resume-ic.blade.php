<!DOCTYPE html>
<html lang="en">
  <head>
    
@include('partials/header')


  </head>
  <body>
<div class="panel panel-success"  style="margin-top:30px;">
	<div class="panel-body">
		<span>Hits: 0</span>
		<div class="btn-group right">
			<button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
				Other Process <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li> <a href="#" style="text-decoration:none;"><i class="glyphicon glyphicon-pencil"></i> Update Title</a></li>
				<li><a href="{{ route('cv.destroy',array($cv->id)) }}" id="cv-del" style="text-decoration:none;"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
				<li><a href="#" style="text-decoration:none;"><i class="glyphicon glyphicon-envelope"></i> Send via Mail</a></li>
				<li><a href="#" style="text-decoration:none;"><i class="glyphicon glyphicon-print"></i> Print</a></li>
				<li><a href="#" style="text-decoration:none;"><i class="fa fa-file-pdf-o"></i> View as PDF </a></li>
			</ul>
		</div>
	</div>
</div>

<div class="panel panel-success">
  	<div class="panel-heading" id="pers">
  		<b style="font-size:15px;">Personal Information</b> <div class="right"><a class="btn btn-xs btn-primary" style="text-decoration:none;" href="#"> <i class="glyphicon glyphicon-edit"></i> Update</a></div>
  	</div>
  	<div class="panel-body">
  		@include('cv/section/per_info')
  	</div>
</div>

<div class="panel panel-success">
  	<div class="panel-heading" id="expe">
  		<b style="font-size:15px;"> Experience </b> <div class="right"><a class="btn btn-xs btn-primary" id="education" style="text-decoration:none;" href="#"> <i class="glyphicon glyphicon-plus"></i> Add</a></div>
  	</div>
  	<div class="panel-body">
  		@include('cv/section/exp')
  	</div>
</div>

<div class="panel panel-success">
  	<div class="panel-heading" id="educ">
  		<b style="font-size:15px;">Education</b> <div class="right"><a id="erd" class="btn btn-xs btn-primary" style="text-decoration:none;" href="#"> <i class="glyphicon glyphicon-plus"></i> Add</a></div>
  	</div>
  	<div class="panel-body">
  		@include('cv/section/edu')
    	<div id="internS">
    		<strong> Internship</strong> <a id="intern" class="btn btn-xs btn-primary" style="text-decoration:none;" href="#"> <i class="glyphicon glyphicon-plus"></i> Add</a>
    			@include('cv/section/intern')
	    </div><hr>
	    <div id="foreignL">
	    	<strong> Foreign Languages</strong> <a id="languages" class="btn btn-xs btn-primary" style="text-decoration:none;" href="#"> <i class="glyphicon glyphicon-plus"></i> Add</a>
	    		@include('cv/section/foreign')
	    </div><hr>
	    <div id="compeT">
	    	<strong> Competencies</strong> <a id="competencies" class="btn btn-xs btn-primary" style="text-decoration:none;" href="#"> <i class="glyphicon glyphicon-plus"></i> Add</a>
	    		@include('cv/section/compe')
	    </div><hr>
	    <div id="cert">
	    	<strong> Certificates</strong> <a id="Certificates" class="btn btn-xs btn-primary" style="text-decoration:none;" href="#"> <i class="glyphicon glyphicon-plus"></i> Add</a>
	    		@include('cv/section/cert')
	    </div>

  	</div>
</div>

<div class="panel panel-success">
  	<div class="panel-heading" id="referan">
  		<b style="font-size:15px;">Referances</b> <div class="right"><a id="referance" class="btn btn-xs btn-primary" style="text-decoration:none;" href="#"> <i class="glyphicon glyphicon-plus"></i> Add</a></div>
  	</div>
  	<div class="panel-body">
    	
    	<div style="display: none;" id="form-referance">
            {{ Form::model($cv, array('method' =>'PATCH' , 'route' => array('ref.update', $cv->id),'id'=>'smart-form-register','class'=>'smart-form')) }}
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
                            {{ Form::text('namesname', '', array('placeholder' => 'Name Surname *')) }}
                        </label>
                    </section>
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('com_name', '', array('placeholder' => 'Company Name *')) }}
                        </label>
                    </section>
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('role_com', '', array('placeholder' => 'Role in the Company *')) }}
                        </label>
                    </section>
                </div>
                <div class="row">
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('p_contact', '', array('placeholder' => 'Contact Phone *')) }}
                        </label>
                    </section>
                    <section class="col col-4">
                        <label class="input">
                            {{ Form::text('email', '', array('placeholder' => 'E-Mail *')) }}
                        </label>
                    </section>
                </div>
                
            </fieldset>
            	<footer>
		            <button type="submit" id="referan" class="btn btn-success">
		                 <i class="glyphicon glyphicon-save"></i> Save
		            </button>
		            <a href="#" id="referancekapa" class="btn btn-danger">
		                  Cancel
		            </a>
        		</footer>
		{{ Form::close() }}     
		  </div>
      @if($cv_ref->count())
      <div class="col-sm-12">

      @foreach($cv_ref as $ref)
      
        <h4 class="txt-color-red"><strong>{{ ucwords($ref->namesname) }}</strong></h4>
        <span><strong> {{ucwords($ref->com_name)}} </strong></span>,<span> {{$ref->email}} </span>
        <div class="right"><a class="btn btn-xs btn-danger" id="refe-del" href="{{ route('ref.destroy',array($ref->id)) }}"> <i class="glyphicon glyphicon-trash"></i></a></div>
      <hr>
      @endforeach
      </div>
    @endif
  	</div>
</div>

@include('partials/scripts2')

<script type="text/javascript">
  $("#cv-del").click(function(e) {
          e.preventDefault();
          var url = $(this).attr('href');
            $.SmartMessageBox({
              title : "Do you want to delete!",
              content : "Warning: You will delete your information",
              buttons : '[No][Yes]'
            }, function(ButtonPressed) {
              if (ButtonPressed === "Yes") {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            success: function(result) {
                                $.smallBox({
                      title : "Your information has been deleted",
                      content : "<i class='glyphicon glyphicon-trash'></i> <i>Your cv was deleted...</i>",
                      color : "#C46A69",
                      iconSmall : "fa fa-check fa-2x fadeInRight animated",
                      timeout : 5000
                    });
                    window.location.reload(2);
                            }
                        });
              
              }
              if (ButtonPressed === "No") {
                $.smallBox({
                  title : "Was canceled",
                  content : "<i class='glyphicon glyphicon-ok'></i> <i>You pressed No...</i>",
                  color : "#659265",
                  iconSmall : "fa fa-times fa-2x fadeInRight animated",
                  timeout : 5000
                });
              }
        
            });
            e.preventDefault();
          });
</script>
</body>
</html>