
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
  <div class="col-sm-1">
    <div class="search-box-p">
      Search
    </div>
  </div>
    <div class="col-sm-5"> 
                {{ Form::open(array('url' => 'search')) }}
          <input style="border-radius: 5px;" class="form-control input-lg"  type="text" name="search" placeholder="Find jobs and more" data-autocomplete='
          "ActionScript"'>
          
       
        </div>
    <div class="col-sm-2">
      {{Form::work_place()}}
    </div>

    <div class="col-sm-1">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-success btn-lg" style="border-radius: 5px;">
          <span class="fa fa-1x fa-search"></span> 
        </button>
      </span>
    </div>
    </div>
     {{ Form::close() }}
  </div>
  <div class="search-tags">
    Popular searches: <a href="#">Web Desing</a>, <a href="#">PHP Developer</a>, <a href="#">Mundësi Punësimi</a>
  </div>
</div>
</div>



@stop
