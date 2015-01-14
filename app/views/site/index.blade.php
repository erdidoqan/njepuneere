
@extends('layouts.master')

@section('title')
<title>Njepuneere</title>
@stop

@section('content')
<div class="section1">
<div class="containert">
  <div class="col-md-12">
  <div class="search-box-name">
      One of the 64,669 job ads for you!
  </div>
  <div class="search-form">

    <div class="colon-search"> 
                {{ Form::open(array('url' => 'search')) }}
          <input class="form-control input-lg"  type="text" name="search" placeholder="Find jobs and more" id="project">
    </div>
    <div class="colon-place">
      {{Form::work_place()}}
    </div>

    <div class="colon-button">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-success btn-lg" style="border-radius: 5px;">
          <span class="fa fa-1x fa-search"></span> 
        </button>
      </span>
    </div>
    </div>
     {{ Form::close() }}
  
  <div class="search-tags">
    Popular searches: <a href="#"  class="text-turgay">Web Desing</a>, <a href="#" class="text-turgay">PHP Developer</a>, <a href="#" class="text-turgay">Mundësi Punësimi</a>
  </div>
  </div>
</div>
</div>

 <script>
  $(function() {
    var projects = [
      {
        value: "php",
        label: "Php Developer"
      }
      
    ];
 
    $( "#project" ).autocomplete({
      minLength: 0,
      source: projects,
      focus: function( event, ui ) {
        $( "#project" ).val( ui.item.label );
        return false;
      },
      select: function( event, ui ) {
        $( "#project" ).val( ui.item.label );
        $( "#project-id" ).val( ui.item.value );
        $( "#project-description" ).html( ui.item.desc );
        $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );
 
        return false;
      }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>" + item.label + "<br>" + item.desc + "</a>" )
        .appendTo( ul );
    };
  });
  </script>

@stop
