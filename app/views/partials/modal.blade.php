
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title">
          <img src="/img/logo.png" width="150" alt="logo">
        </h4>
      </div>
      <div class="modal-body no-padding">
        {{ Form::open(array('url' => 'BireyGiris','id' => 'login-form','class'=>'smart-form')) }}
            @if($errors->any())
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ implode('', $errors->all('<p class="error">:message</p>')) }}
                </div>
            @endif

              <fieldset>
                <section>
                  <div class="row">
                    <label class="label col col-2">Email</label>
                    <div class="col col-10">
                      <label class="input"> <i class="icon-append fa fa-user"></i>
                        {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
                      </label>
                    </div>
                  </div>
                </section>

                <section>
                  <div class="row">
                    <label class="label col col-2">Password</label>
                    <div class="col col-10">
                      <label class="input"> <i class="icon-append fa fa-lock"></i>
                        {{ Form::password('sifre', array('class' => 'form-control', 'placeholder' => 'Password')) }}
                      </label>
                      <div class="note">
                        Don't have an account! <a href="/BireyKayit" class="header-btn">
                    Sign Up Here
                </a>
                      </div>
                    </div>
                  </div>
                </section>

                <section>
                  <div class="row">
                    <div class="col col-2"></div>
                    <div class="col col-10">
                      
                    </div>
                  </div>
                </section>
              </fieldset>
              
              <footer>

                <button type="submit" class="btn btn-primary">
                  Sign in
                </button>
                
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
                <!--
                <a type="button" class="btn btn-facebook"><i class="fa fa-facebook"></i></a>
                <a type="button" class="btn btn-linkedin"><i class="fa fa-linkedin"></i></a>
                -->
              </footer>
            {{ Form::close() }}
            

      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Modal -->
<div class="modal fade" id="reg" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title">
          <img src="img/logo.png" width="150" alt="SmartAdmin">
        </h4>
      </div>
      <div class="modal-body no-padding">

        <form id="login-form" class="smart-form">

              <fieldset>
                <section>
                  <div class="row">
                    <label class="label col col-2">Username</label>
                    <div class="col col-10">
                      <label class="input"> <i class="icon-append fa fa-user"></i>
                        <input type="email" name="email">
                      </label>
                    </div>
                  </div>
                </section>

                <section>
                  <div class="row">
                    <label class="label col col-2">Password</label>
                    <div class="col col-10">
                      <label class="input"> <i class="icon-append fa fa-lock"></i>
                        <input type="password" name="password">
                      </label>
                      <div class="note">
                        <a href="javascript:void(0)">Forgot password?</a>
                      </div>
                    </div>
                  </div>
                </section>

                <section>
                  <div class="row">
                    <div class="col col-2"></div>
                    <div class="col col-10">
                      <label class="checkbox">
                        <input type="checkbox" name="remember" checked="">
                        <i></i>Keep me logged in</label>
                    </div>
                  </div>
                </section>
              </fieldset>
              
              <footer>
                <button type="submit" class="btn btn-primary">
                  Register
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>

              </footer>
            </form>           
            

      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
