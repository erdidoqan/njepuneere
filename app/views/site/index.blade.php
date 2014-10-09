
@extends('layouts.master')

@section('content')
<div class="section1">
<div class="container">
  <div class="col-md-12">
      <h2>One of the 64,669 job ads for you!</h2>
      
    <div class="col-sm-7"> 
                {{ Form::open(array('url' => 'search')) }}
          <input id="search-fld" class="form-control input-lg"  type="text" name="search" placeholder="Find jobs and more" data-autocomplete='
          "ActionScript",
          "AppleScript",
          "Asp",
          "BASIC",
          "C",
          "C++",
          "Clojure",
          "COBOL",
          "ColdFusion",
          "Erlang",
          "Fortran",
          "Groovy",
          "Haskell",
          "Java",
          "JavaScript",
          "Lisp",
          "Perl",
          "PHP",
          "Python",
          "Ruby",
          "Scala",
          "Scheme"'>
          
       
        </div>
    <div class="col-sm-3">
                
                {{Form::work_place()}}
    </div>

    <div class="col-sm-2">
               <span class="input-group-btn">
                    <button type="submit" class="btn btn-success btn-block btn-lg" ><span class="glyphicon glyphicon-search"></span> Job Search</button>
                </span>
    </div>
     {{ Form::close() }}
  </div>
</div>
</div>



@stop
