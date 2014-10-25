@if($adsInfo->count())
    @foreach($adsInfo as $p)
 <div class="col-sm-5"  style="max-width:170px; max-height=165px;">
            <a href="ads/{{$p->id}}">
                <div style="border-radius:35px;" class="[ info-card ]">
                    <img style="width:100%" src="{{User::$img_sirket_src."".$p->logo}}" />
                    <div class="[ info-card-details ] animate">
                        <div class="[ info-card-header ]">
                            <h3> {{$p->com_name}} </h3>
                            <small> {{$p->ref_code}} </small><br>
                            @if(Auth::user())
                                <button class="btn btn-primary btn-block btn-xs">Apply</button>
                            @endif
                        </div>
                        
                    </div>
                </div> 
                </a>
                
            </div>
            @endforeach
@endif


