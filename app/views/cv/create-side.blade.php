
<div class="panel panel-success"  style="position: fixed; margin-top: 70px;">
    <div class="panel-body">
      <div class="col-sm-12">
      <section class="col col-5">
      {{Form::select('resume_name', DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->lists('resume_name','id'), null, ['class' => 'form-control']);}}
                  </section>
                  <br>
          <small>Occupancy rate of :</small>
          <div class="progress">
            <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="{{$cv->rate}}" style="width: {{$cv->rate}}%">
              {{$cv->rate}}% Complete
            </div>
          </div><hr>
          <ul class="inbox-menu-lg">
              <li class="active">
                <a class="inbox-load" href="#pers"><i class="fa fa-caret-right"></i> Personal Information </a>
              </li>
              <li>
                <a href="#expe"><i class="fa fa-caret-right"></i> Experience ({{$noti_exp}})</a>
              </li>
              <li>
                <a  href="#educ"><i class="fa fa-caret-right"></i> Education ({{$noti_edu}})</a>
              </li>
              <li>
                <a href="#internS"><i class="fa fa-caret-right"></i> Internship ({{$noti_intern}})</a>
              </li>
              <li>
                <a href="#foreignL"><i class="fa fa-caret-right"></i> Foreign Languages ({{$noti_foreign}})</a>
              </li>
              <li>
                <a href="#compeT"><i class="fa fa-caret-right"></i> Competencies ({{$noti_compe}})</a>
              </li>
              <li>
                <a href="#cert"><i class="fa fa-caret-right"></i> Certificates ({{$noti_cert}})</a>
              </li>
              <li>
                <a href="#referan"><i class="fa fa-caret-right"></i> Referances ({{$noti_ref}})</a>
              </li>
            </ul>
      </div>
    </div>
  </div>