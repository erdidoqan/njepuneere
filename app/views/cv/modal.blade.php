
<div class="modal fade in slacker-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
  <div class="modal-dialog modal-slacker">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myLargeModalLabel">Change Your Profile Photo</h4>
      </div>
      <div class="modal-body">
        <div class="col-sm-8">
        
        {{ Form::open(array('url' => 'pr_img','class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) }}
             <div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-preview thumbnail" data-trigger="fileinput" >
					  	<span class="text-danger"><strong>Warning!</strong> Your photographs will be sent to the company you choose properly for (max.2 mb)</span>
					  <img src="{{Auth::user()->pr_img}}" class="img-thumbnail" style="max-width:70%" ></a>
					  </div>
					  
					  <div>
					    <span class="btn btn-success btn-sm btn-file"><span class="fileinput-new">Select Company Logo</span>
					    <span class="fileinput-exists">Change</span>
					    {{ Form::file('pr_img', '') }}
					    </span>
					    <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
					    <button type="submit" class="btn btn-primary btn-sm fileinput-exists right">Upload</button>
					  </div>
				</div>

        </div>
        {{ Form::close() }}
               
      </div>
      
      	
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
