@extends('layouts.search')

@section('title')
<title>{{ucwords($search)}}  Njepuneere - Rruga më e thjeshtë për të gjetur punë</title>
@stop

@section('content')

  <div class="panel panel-fixed panel-primary">
    <div class="panel-body">
      <small>Display options : {{ $search }}</small>
    </div>
  </div>
  @if($results->count())
<table id="inbox-table" class="table table-striped table-hover">
  <thead>
             <tr><th>Company</th>
                 <th>Position / Company Name</th>
                 <th>City / Country</th>
                 <th>Deadline</th>
                 <th>Apply</th>
             </tr>
                 </thead>
                 @foreach($results as $r)
            <tbody data-link="row" class="rowlink">

              <tr id="msg1" class="unread">
                <td class="inbox-table-icon">
                <a href="/pune/{{$r->id}}">
                  <div>
                    <img src="{{User::$img_sirket_src."".$r->logo}}" style="width:120px;height:50px;">
                  </div>
                  </a>
                </td>
                <td class="inbox-data-from hidden-xs hidden-sm">
                  <div>
                    <div class="po-markup">
        <a href="/pune/{{$r->id}}" class="po-link">{{ucwords($r->com_name)}}</a>

        <div class="po-content hidden">
          <div class="po-title">
            <img src="{{User::$img_sirket_src."".$r->logo}}" alt="Google" width="46" height="16" />
            <span>{{ucwords($r->com_name)}}</span>
            </div> <!-- ./po-title -->
            
            <div class="po-body">
              <h4 class="text-danger">{{ucwords($r->ads_name)}}</h4>
              <p>
                  {{str_limit($r->job_desc,500)}}
              </p>
              
              </div><!-- ./po-body -->
              </div>  <!-- ./po-content -->
              </div><!-- ./po-markup -->
              
                  </div>
                  <div class="checkbox">
                  <small> {{str_limit(ucwords($r->ads_name),30)}} </small>
                  </div>
                </td>
                <td class="inbox-data-attachment hidden-xs">
                  <div>
                    <span class="text-success"><i class="fa fa-map-marker"></i> {{ucwords($r->work_place)}}</span>
                  </div>
                </td>
                <td class="inbox-data-attachment hidden-xs">
                  <div>
                    <span class="label label-primary">{{ Carbon::createFromTimestamp(strtotime($r->created_at))->addDays($r->pub_time)->diffForHumans() }}
                  </div>
                </td>
                <td class="inbox-data-date rowlink-skip  hidden-xs">
                  <div>
                    @if(Auth::user())
                      <a href="/pune/{{$r->id}}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> </a>
                    @else
                      <a data-toggle="modal" href="#myModal"  class="btn btn-primary btn-sm glyphicon glyphicon-user"  rel="tooltip" data-placement="top" data-original-title="Quick Apply"></a>
                    @endif
                  </div>
                </td>
             </tr>

            </tbody>

            @endforeach
</table>
  @else
  <div class="alert alert-warning">
    <h4>I'm sorry your search returned no results</h4>
  </div>
  @endif
{{$results->appends(array('search' => $search, 'work_place' => $workPlace))->links()}}



<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

<script type="text/javascript">
  $('tbody.rowlink').rowlink()
</script>

<script type="text/javascript">
  $(document).ready(function() {

  

  $('.po-markup > .po-link').popover({
    trigger: 'hover',
    html: true,  // must have if HTML is contained in popover

    // get the title and conent
    title: function() {
      return $(this).parent().find('.po-title').html();
    },
    content: function() {
      return $(this).parent().find('.po-body').html();
    },

    container: 'body',
    placement: 'right'

  });

});
</script>

@stop

