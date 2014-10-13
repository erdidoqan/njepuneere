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
           @if($message->count())
            <table class="table table-hover ">
              <thead>
                <tr>
                  <th>Company Name</th>
                  <th>Job Name</th>
                  <th>Message Date</th>
                  <th>Process</th>
                </tr>
              </thead>
                   @foreach($message as $r)
                   <tbody>  
                   <tr> 
                  <td><a href="ads/{{$r->adsInfo_id}}">{{$r->com_name}}</a></td>
                  <td><a href="ads/{{$r->adsInfo_id}}">{{$r->ads_name}}</a></td>
                  <td><span class="label label-info">04 Ağustos 2014</span></td>
                  <td><a href="ads/{{$r->adsInfo_id}}" class="btn btn-xs btn-primary">Read</a></td>
                </tr>
                </tbody>
                @endforeach
            </table>
            @else
            <div class="alert alert-warning">
            <p>You do not have any messages from any companies!</p>
          </div>
          @endif
        </div>
</div>

</div>
    </div>
  </div>
</div>
</div>


@stop