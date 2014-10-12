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
          <a href="/message/compose" class="btn btn-primary btn-block"> 
            <strong>Compose</strong> 
          </a>
          <ul class="inbox-menu-lg">
          	<li><a href="#">Unread</a></li>
            <li class="active"><a class="inbox-load" href="javascript:void(0);"> Inbox (14) </a></li>
            <li><a href="#">Sent</a></li>
            <li><a href="#">Trash</a></li>
          </ul>
        </div>
        <div class="table-wrap custom-scroll animated fast fadeInRight" style="min-height:320px;">
           <div class="alert alert-warning">
            <p>After your application has been confirmed by company, than can create a new message!</p>
          </div>
        </div>
</div>

</div>
    </div>
  </div>
</div>
</div>


@stop