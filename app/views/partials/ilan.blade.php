@if($adsInfo->count())
    @foreach($adsInfo as $p)
        <a href="ads/{{$p->id}}">
        <div class="ads">
            <div class="ads-img">
                <img src="{{User::$img_sirket_src."".$p->logo}}" />

            </div>

            <div class="ads-text">
                <p> {{ucwords($p->com_name)}} </p>
                <small style="margin-bottom:15px;"> {{ucwords($p->ads_name)}} </small>
            </div>
        </div>
        </a>
    @endforeach
@endif


