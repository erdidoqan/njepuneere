@if($adsInfo->count())
    @foreach($adsInfo as $p)
      <a href="ads/{{$p->id}}">
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
<!--
<div class="row">
    <div class="col-sm-12" style="margin-top:20px;">
    <div class="panel panel-default">
    <div class="panel-heading">
        Work Life News
    </div>
    <div class="panel-body">
        
          <?php 
        $url = "http://njeboteere.org/feed/";
        $rss = simplexml_load_file($url);
        $items = $rss->channel->item; 
        $sayac = "1";  // Sayaç kaçtan başlasın? 
        $limit = "3"; // Kaç yazı yazdırılsın? 
        foreach ($rss -> channel -> item as $veri){ 
            if ($sayac <= $limit){ 
                $link = $veri -> link; 
                $title= $veri -> title; 
                $desc = $veri ->description;
                $img = $veri->image;
        ?>
        <p><?php echo $img; ?></p>
            <div class="col-md-4 img-portfolio">
                
                <h4>
                    <a href="<?php echo $link;?>" target="_blank"><?php echo $title;?></a>
                </h4><hr>
                <a href="<?php echo $link;?>">
                    <img class="img-responsive img-hover" src="http://njeboteere.org/wp-content/uploads/2015/01/kosove-bluzat-e-bardha-650x390.jpg" style="max-width:100%" alt="">
                </a><hr>
                <p><?php echo $desc;?></p>
                <p><a href="<?php echo $link;?>" target="_blank">Devamini Oku</a> </p>
            </div>
           <?php  } 
        $sayac++; 
        }?>
    </div>
    </div>
    </div>
</div>
-->