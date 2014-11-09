<div class="col-sm-10">
	<h4 style="font-size:25px;" class="text-danger"><strong>{{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }}</strong></h4>
	<p><strong> 
    {{ 2014-substr(Auth::user()->d_tarihi,0,4) }} years old, {{Auth::user()->cinsiyet}}
  </strong></p>
	<div class="form-group">
      <label class="col-sm-3 control-label" for="textinput"><strong>Place of Birth / Date</strong></label>
        <div class="col-sm-8">
          <p>: {{Auth::user()->sehir}}  -  {{Auth::user()->ulke}} / {{Auth::user()->d_tarihi}}</p>
        </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" for="textinput"><strong>Email</strong></label>
        <div class="col-sm-8">
          <p>: {{Auth::user()->email}}</p>
        </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" for="textinput"><strong>Home Address</strong></label>
        <div class="col-sm-8">
          <p>: {{Auth::user()->sehir." / ".Auth::user()->ulke}}</p>
        </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" for="textinput"><strong>Phone Number</strong></label>
        <div class="col-sm-8">
          <p>: {{Auth::user()->tel}}</p>
        </div>
</div>
</div>
<div class="col-sm-2">
	<a href="#" data-toggle="modal" data-target=".slacker-modal">
		<img src="{{Auth::user()->pr_img}}" alt="demo user" class="img-circle" style="width:100%">
	</a>
</div>
@include('cv/modal')