@if($adsInfo->count())
    @foreach($adsInfo as $p)
        <div class="ads">
            <div class="ads-img">
                <img style="width:100%" src="{{User::$img_sirket_src."".$p->logo}}" />

            </div>

            <div class="ads-text">
                <h3> {{$p->com_name}} </h3>
            </div>
        </div>
    @endforeach
@endif


