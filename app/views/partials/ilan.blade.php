@if($adsInfo->count())
    @foreach($adsInfo as $p)
        <div class="ads">
            <div class="ads-img">
                <img src="{{User::$img_sirket_src."".$p->logo}}" />

            </div>

            <div class="ads-text">
                <div class="com_name">
                    {{ucwords($p->com_name)}}
                </div>
                <div class="ads_name">
                    {{$p->ads_name}}
                </div>
                
            </div>
        </div>
    @endforeach
@endif


