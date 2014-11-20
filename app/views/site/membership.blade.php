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
        <h1>Terms of Membership</h1>
          <p>
            Join demanding companies, <a href="http://njepuneere.com">njepuneere.com</a> customer representatives or reach through the system, communications and corporate information they share with Corporate Membership Form. This information is used for billing of communications and facilities paid through the site. Corporate Members, <a href="http://njepuneere.com">njepuneere.com</a>  unless they pay the full cost of services to take advantage of all the services "Partner" are called.
Business partners,
          </p>
          <p><ul>
            <li>The ability to post an unlimited number of job postings on the site,</li>
            <li>Make calls between registered resumes,</li>
            <li>Company-specific resume pooling</li>
            <li>They have the capability to provide information about the company to the individual members. Employer companies, <a href="http://njepuneere.com">njepuneere.com</a> be held responsible for the information they provide about themselves on the site.</li></ul>
          </p>
          <h3>JOBs</h3>
          
          <p>
            <ul>
              <li>Ad</li>
              <ul>
                <li>Single ad,</li>
                <li>2 and more ad.</li>
              </ul>
              <li>Unlimited ads</li>
              <ul>
                <li>Unlimited number of ad</li>
                <li>Annual membership</li>
              </ul>
              <li>Unlimited ads + CV bank</li>
              <ul>
                <li>Unlimited number of ad</li>
                <li>Access to over 16 million resumes</li>
                <li>Annual membership</li>
              </ul>
            </ul>

          </p>
          <p>
            Partner jobs instantly posted on the company website. The jobs are prepared by the Corporate Member, depends primarily on the payment information of control carried out by site authorities. Elements will create unfair competition in job advertisements, statements that defame the institution should not be included. Ads are not acceptable in terms of content, even if costs were certainly not published. The company has given false and misleading information from ad <a href="http://njepuneere.com">njepuneere.com</a> held responsible.
          </p>
          <p>
            Other Sites I Elish (Link)
<a href="http://njepuneere.com">njepuneere.com</a> I; advertising, banner or sponsorship of my relationship with the company that provides web site. <a href="http://njepuneere.com">njepuneere.com</a>, knowledge use of the sites to which I attached is not responsible for the ethical and privacy principles.
          </p>
          <p>
            Send to a Friend
Job seekers members, on their favorite news site, thanks for writing jobs Send to Friend function or can be shared with other people via e-mail. During this process, members pointed out that the e-mail address, by my <a href="http://njepuneere.com">njepuneere.com</a>, news about the site, the announcement will not be used for any other purpose other than to share activities.
          </p>
          <p>
            User Requests / Feedback on
They bring all kinds <a href="http://njepuneere.com">njepuneere.com</a> members and site visitors to us about requests, suggestions, are stored in terms of performance reviews to measure site contains information and questions. This information except to respond to their people and to be used in research to increase the effectiveness of the site will not be used for any other purpose.
          </p>
         </div>
         <div class="col-sm-4" style="margin-top:30px;">
          @include('partials/sidebar')
          
         </div>
      
</div>
@include('partials/footer')

  </body>
</html>

