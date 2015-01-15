@if($adsInfo->count())
    @foreach($adsInfo as $p)
        
    




    <!-- Begin Listing: 609 W GRAVERS LN-->
    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
        <div class="media">
            <a class="pull-left" href="ads/{{$p->id}}" target="_parent">
            <img alt="{{ucwords($p->com_name)}}" class="img-responsive" src="{{User::$img_sirket_src."".$p->logo}}" style="max-width: 191px;max-height: 75px;"></a>

            <div class="clearfix visible-sm"></div>

            <div class="media-body fnt-smaller">
                <a href="#" target="_parent"></a>

                <h4 class="media-heading">
                  <a href="#" target="_parent">{{ucwords($p->ads_name)}} <small class="pull-right">{{ucwords($p->com_name)}}</small></a></h4>


                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                    <li><i class="fa fa-location-arrow"></i> {{ucwords($p->work_place)}}</li>
                </ul>

                <p class="hidden-xs">{{str_limit($p->job_desc, 50)}}
                </p><span class="fnt-smaller fnt-lighter fnt-arial">{{str_limit($p->qua, 50)}}</span>
            </div>
        </div>
    </div><!-- End Listing-->

    @endforeach
@endif
