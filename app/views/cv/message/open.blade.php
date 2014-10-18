@extends('cv.page')

@section('content')
<div class="col-sm-12" style="margin-top:30px;">
  <div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-1"
      data-widget-colorbutton="true"
      data-widget-togglebutton="false" 
      data-widget-deletebutton="false" 
      data-widget-fullscreenbutton="false">

    <header>
      <h2>Messeage</h2>       
    </header>

    <div>
    <div id="content">
      <div class="inbox-nav-bar no-content-padding">
        <h1 class="page-title txt-color-blueDark hidden-tablet"><i class="fa fa-fw fa-inbox"></i> Inbox</h1>
        <div class="inbox-checkbox-triggered">
          <div class="btn-group">
            <a href="#" class="btn btn-default"><strong><i class="fa fa-exclamation fa-lg text-danger"></i></strong></a>
            <a href="#" class="btn btn-default"><strong><i class="fa fa-folder-open fa-lg"></i></strong></a>
            <a href="#" class="deletebutton btn btn-default"><strong><i class="fa fa-trash-o fa-lg"></i></strong></a>
          </div>
        </div>
      </div>
      <div id="inbox-content" class="inbox-body no-content-padding">
        <div class="inbox-side-bar">
          <a href="/message/compose" class="btn btn-primary btn-block"> 
            <strong>Compose</strong> 
          </a>
          <ul class="inbox-menu-lg">
            <li class="active"><a class="inbox-load" href="/message"> Inbox (14) </a></li>
            <li><a href="#">Sent</a></li>
            <li><a href="#">Draft</a></li>
            <li><a href="#">Trash</a></li>
          </ul>
        </div>
        <div class="table-wrap custom-scroll animated fast fadeInRight" style="min-height:320px;">
	      <a href="/ads/{{$message->ads_id}}">{{$message->com_name}} </a>
        </div>
</div>

</div>
    </div>
  </div>
</div>
</div>


@stop