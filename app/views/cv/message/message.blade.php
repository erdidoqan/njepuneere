@extends('cv.page')

@section('content')
<div class="col-sm-12" style="margin-top:30px;">
  <div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1" data-widget-colorbutton="true" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
    <header>
      <h2>Messeage</h2>       
    </header>
    <div>

    <div id="content">
      <div class="inbox-nav-bar no-content-padding">
        <h1 class="page-title txt-color-blueDark hidden-tablet"><i class="fa fa-fw fa-inbox"></i> Inbox</h1>
        <div class="inbox-checkbox-triggered">
          <div class="btn-group">
            <a href="javascript:void(0);" class="btn btn-default"><strong><i class="fa fa-exclamation fa-lg text-danger"></i></strong></a>
            <a href="javascript:void(0);" class="btn btn-default"><strong><i class="fa fa-folder-open fa-lg"></i></strong></a>
            <a href="javascript:void(0);" class="deletebutton btn btn-default"><strong><i class="fa fa-trash-o fa-lg"></i></strong></a>
          </div>
        </div>
      </div>
      <div id="inbox-content" class="inbox-body no-content-padding">
        <div class="inbox-side-bar">
          <a href="javascript:void(0);" id="compose-mail" class="btn btn-primary btn-block"> 
            <strong>Compose</strong> 
          </a>
          <ul class="inbox-menu-lg">
            <li class="active"><a class="inbox-load" href="javascript:void(0);"> Inbox (14) </a></li>
            <li><a href="#">Sent</a></li>
            <li><a href="#">Draft</a></li>
            <li><a href="#">Trash</a></li>
          </ul>
        </div>
        <div class="table-wrap custom-scroll animated fast fadeInRight" style="min-height:320px;">
           @if($apply->count())
            <table class="table table-hover ">
              
                   @foreach($apply as $r)
                   <tbody>  
                   <tr> 
                  <td><a style="text-decoration: none;" href="ads/{{$r->adsInfo_id}}" rel="tooltip" data-placement="top" data-original-title="<img style='width:100%' src='http://localhost/institutional.karriera/public/img/logo/1407447912.jpg' alt='me' class='online'>" data-html="true">{{$r->com_name}}</a></td>
                  <td><a style="text-decoration: none;" href="ads/{{$r->adsInfo_id}}">{{$r->ads_name}}</a></td>
                  <td><span class="text-warning">{{$r->work_place}}</span></td>
                  <td><span class="label label-info">04 Ağustos 2014</span></td>
                  <td><a style="text-decoration: none;" href="ads/{{$r->adsInfo_id}}" class="btn btn-xs btn-primary">Go to Ads</a></td>
                </tr>
                </tbody>
                @endforeach
            </table>
          @endif
        </div>
</div>

</div>
    </div>
  </div>
</div>
</div>


@stop