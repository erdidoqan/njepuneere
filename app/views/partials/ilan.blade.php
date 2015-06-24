    <h1 class="showcase-title">Showcase Ads</h1>
@if($adsInfo->count())
    @foreach($adsInfo as $p)

      <a href="pune/{{strtolower($p->com_name)."/".strtolower($p->ads_name)}}">
            <div class="ads">
                <div class="hvr-float-shadow ads-img">
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

@if(!Auth::user())
<!-- sometime later, probably inside your on load event callback 
<script>
    $("#myModal").on("show", function() {    
        $("#myModal a.btn").on("click", function(e) {
            console.log("button pressed");   
            $("#myModal").modal('hide');   
        });
    });

    $("#myModal").on("hide", function() {
        $("#myModal a.btn").off("click");
    });
    
    $("#myModal").on("hidden", function() {
        $("#myModal").remove();
    });
    
    $("#myModal").modal({
      "backdrop"  : "static",
      "keyboard"  : true,
      "show"      : true
    });
</script>-->
@endif