<!DOCTYPE html>
<html lang="en">
  <head>
    
@include('partials/header')


  </head>

  <body>

      @include('partials/nav')
        
         <div class="section1">     
<div class="container">
  <div class="col-md-12">
    
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

<div class="container">
        <div class="col-sm-8" style="margin-top:30px;">
        <h1>About Us</h1>
          <p>
            Association 'a new world' as the center of human resources and career development, presented at your service web site <a href="http://njepuneere.com">njepuneere.com</a>

          </p>
          <p>
            Find a new job with <a href="http://njepuneere.com">njepuneere.com</a>, start a new life!<br>
            Search for jobs, uncover and continue career!
          </p>
          <h3>Institutional</h3>
          <p>
            Those who seek employee through newspaper announcements and institutional offices, can now more easily find what they seek to address <a target="_blank" href="http://institutional.njepuneere.com">institutional.njepuneere.com</a>.
          </p>
          <p>
            Distribution of institutional reminders; Just a warning - Distribute the notification and will immediately receive application!<br>
By subscribing to <a href="http://njepuneere.com">njepuneere.com</a> you can instantly create your announcement, you can start to get applications, and you can check and evaluate them. 
          </p>
          <p>
            You can also create links with the applicant.<br>
Service s enriched by feedback coming from users and constantly being improved in accordance with the requirements, <a href="http://njepuneere.com">njepuneere.com</a> helps you to finish 'recruitment' in a shorter time, it less effort and cost.

          </p>
          <p><a href="http://njepuneere.com">njepuneere.com</a> in assessing your candidate you time and speed benefits.</p>
         </div>
         <div class="col-sm-4" style="margin-top:30px;">
          @include('partials/sidebar')
          
         </div>
      
</div>
@include('partials/footer')

  </body>
</html>

