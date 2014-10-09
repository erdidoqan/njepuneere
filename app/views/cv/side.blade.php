<div class="panel panel-success"  style="margin-top:30px;">
    <div class="panel-body">
		<div class="col-sm-12">
		<a href="#" data-toggle="modal" data-target=".slacker-modal">
			<img src="{{Auth::user()->pr_img}}" class="img-thumbnail" alt="demo user" style="width:100%">
		</a>
			<div class="padding-9">
				<h4 class="font-md"><strong class="text-danger">{{ ucwords(Auth::user()->adi)." ".ucwords(Auth::user()->soyadi) }}</strong>
				<br></h4>
				<a href="#" style="text-decoration:none;font-size:11px;">Update Profile</a>
				<br>
				<a href="user-up" style="text-decoration:none;font-size:11px;">Update Membership</a>
				<br><br>
				<a href="user-up" class="btn btn-primary btn-block"> update</a>
			</div>
		</div>
	</div>
</div>
<hr>
<div class="panel panel-success">
    <div class="panel-body">
		<div class="col-sm-12">
			<h3><strong>Messages</strong></h3>
			<p>Toplam <span class="text-danger">0</span> Mesaj <span class="text-danger">0</span> Okunmamış Mesaj</p>
			<button class="btn btn-warning btn-block"> messages</button>
		</div>
	</div>
</div>
<hr>
<div class="panel panel-success">
    <div class="panel-body">
    	<button class="btn btn-success btn-block"> Social </button>
    </div>
</div>
@include('cv/modal')



<script type="text/javascript">
	var activeEl = 0;
		$(function() {
		    var items = $('.btn-nav');
		    $( items[activeEl] ).addClass('active');
		    $( ".btn-nav" ).click(function() {
		        $( items[activeEl] ).removeClass('active');
		        $( this ).addClass('active');
		        activeEl = $( ".btn-nav" ).index( this );
		    });
		});
</script>