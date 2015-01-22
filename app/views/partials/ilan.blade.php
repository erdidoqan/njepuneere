@if($adsInfo->count())
    @foreach($adsInfo as $p)
      <a href="ads/{{$p->id}}/{{$p->ads_name}}">
            <div class="ads">
                <div class="ads-img">
                    <img src="{{User::$img_sirket_src."".$p->logo}}" class="img-rounded" />
                </div>

                <div class="ads-text">
                    <div class="com_name">
                        {{ucwords(str_limit($p->com_name, 20))}}
                    </div>
                    <div class="ads_name">
                        {{ucwords(str_limit($p->ads_name, 20))}}
                    </div>
                    
                </div>
            </div>
        </a>

    @endforeach
@endif
