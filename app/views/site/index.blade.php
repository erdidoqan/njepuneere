
@extends('layouts.master')

@section('title')
<title>Njepuneere</title>
@stop

@section('content')
<div class="section1">
<div class="containert">
  <div class="col-md-12" style="margin: 60px auto;">
  <div class="search-box-name">
      One of the 64,669 job ads for you!
  </div>
  <div class="search-form">

    <div class="colon-search"> 
                {{ Form::open(array('url' => 'results', 'method'=>'get')) }}
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
    Popular searches: <a href="results?search=Web+Desing+&work_place=Tirana" class="text-turgay">Web Desing</a>, <a href="results?search=Php+Developer&work_place=Tirana" class="text-turgay">PHP Developer</a>, <a href="results?search=Mund%C3%ABsi+Pun%C3%ABsimi&work_place=Tirana" class="text-turgay">Mundësi Punësimi</a>
  </div>
  </div>
</div>
</div>

<script>

</script>

@stop
