@if($adsInfo->count())
    @foreach($adsInfo as $p)
        <a href="ads/{{$p->id}}">
        <div class="ads">
            <div class="ads-img">
                <img src="{{User::$img_sirket_src."".$p->logo}}" />

            </div>

            <div class="ads-text">
                <p> {{ucwords($p->com_name)}} </p>
                <small> {{$p->ref_code}} </small>
            </div>
        </div>
        </a>
    @endforeach
@endif


