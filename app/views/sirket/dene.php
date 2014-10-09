 {{ Form::open(array('url' => 'ilanVerme','class'=>'form-horizontal')) }}
        <div class="col-xs-6">
              <!-- Text input-->
              <legend>Authority Information</legend>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Name:*</label>
                <div class="col-sm-10">
                  {{ Form::text('name', '', array('class' => 'form-control input-sm', 'placeholder' => 'Name')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Surname:*</label>
                <div class="col-sm-10">
                  {{ Form::text('sname', '', array('class' => 'form-control input-sm', 'placeholder' => 'Surname')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Phone:*</label>
                <div class="col-sm-10">
                  {{ Form::text('phone', '', array('class' => 'form-control input-sm', 'placeholder' => 'Contact Phone')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Email:*</label>
                <div class="col-sm-10">
                  {{ Form::text('email', '', array('class' => 'form-control input-sm', 'placeholder' => 'Email')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">City:*</label>
                <div class="col-sm-10">
                  {{ Form::text('city', '', array('class' => 'form-control input-sm', 'placeholder' => 'City')) }}
                </div>
              </div>
      </div>
      <div class="col-xs-6">
              <legend>Company Information</legend>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Name:*</label>
                <div class="col-sm-9">
                  {{ Form::text('comname', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Name')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Address:*</label>
                <div class="col-sm-9">
                  {{ Form::text('comaddress', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Address')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Tax Office:*</label>
                <div class="col-sm-9">
                  {{ Form::text('tax_office', '', array('class' => 'form-control input-sm', 'placeholder' => 'Tax Office')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="textinput">Tax No:*</label>
                <div class="col-sm-9">
                  {{ Form::text('tax_no', '', array('class' => 'form-control input-sm', 'placeholder' => 'Tax No')) }}
              </div>
              <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-sm">Kaydet ve Devam et  <span class="glyphicon glyphicon-forward"></span></button>
              </div>
            </div>
          </div>
      </div>
{{ Form::close() }}
        </div>