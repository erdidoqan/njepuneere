@if($adsInfo->count())
    @foreach($adsInfo as $p)
        <a href="ads/{{$p->id}}">
            <div class="ads">
                <div class="ads-img">
                    <img src="{{User::$img_sirket_src."".$p->logo}}" class="img-rounded" />
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
        </a>
    @endforeach
@endif
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

