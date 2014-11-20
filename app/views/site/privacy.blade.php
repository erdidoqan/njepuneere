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
        <h1>Privacy</h1>
          <p>
            All individual and corporate members of member information, an interactive platform that aims to be in line with the principles of security and privacy.
<a href="http://njepuneere.com">njepuneere.com</a> I, if the members of the site following Privacy Principles, if you or we determine that the use contrary to law or competent authorities identified in this regard or review request arrives, the information about the Member has the right to report to the authorities. I'm also in a similar situation <a href="http://njepuneere.com">njepuneere.com</a> has the right to take other measures provided for in this Privacy Principles.<br>
My <a href="http://njepuneere.com">njepuneere.com</a>, in order to ensure the security of information you have given is supported by appropriate technical measures to the developing technology.
          </p>
          <h3>Individual Membership</h3>
          <p>
            My <a href="http://njepuneere.com">njepuneere.com</a> all our visitors who have completed their training status of individual membership form, information such as date of birth, profession and to expand the range of services offered on the site are used in order to identify needs and expectations.
Received during the membership process <a href="http://njepuneere.com">njepuneere.com</a> e-mail address; made innovations, newsletters, campaigns and communication with our members is important to be able to announce in terms of maintaining the.
Our members are able to cancel it <a href="http://njepuneere.com">njepuneere.com</a> offered by the option if they want to take advantage of this information studies. Changes in personal information <a href="http://njepuneere.com">njepuneere.com</a> members can also announced by updating the membership information.
          </p>
          <h3>CVs</h3>
          <p>
            My <a href="http://njepuneere.com">njepuneere.com</a> individual members to prepare your resume on the internet, gives the opportunity to save and apply for jobs. <a href="http://njepuneere.com">njepuneere.com</a> prepared resumes are stored in the member's position with respect to their choice of active or passive. Member, all the information given by the Membership Form is accurate, current and updated, their untrue, incomplete or misleading / because it is misleading <a href="http://njepuneere.com">njepuneere.com</a> and / or just all damages if not suffered any damage to 3rd parties and promptly compensated that they agree and undertake.<br>
CVs of the members who have been activated, employers of companies they do <a href="http://njepuneere.com">njepuneere.com</a> my resume bank on the island in search (and directed the project of Active Candidates mAlArIylA) can be displayed. Active CVs also in line with the request of individual members' individual privacy principles "considering or selecting one of the following three functions all can be saved in the desired format.<br>
(The first of these choices, precludes the inclusion of the individual members of the Project Steering Active Candidates.)
          </p>
          <p>
          <li>Name, surname, to hide personal information such as telephone numbers and addresses,</li>
          <li>Ability to hide the institution that is currently running,</li>
          <li>Reference to hide the information about people.</li>
          </p>
          <p>
            In this context <a href="http://njepuneere.com">njepuneere.com</a> to provide personal information, which will be determined by my <a href="http://njepuneere.com">njepuneere.com</a> / appropriate use will be deemed to consent to be found. Other Members of the information recorded on the Site and / or 3rd party are to be used hands and / or Intellectual and Artistic Works violation of moral rights held in the Code and / or any whatever way, has no responsibility for the <a href="http://njepuneere.com">njepuneere.com</a> should you suffer any damage . If made active by hiding personal information on CVs Resumes own employer firms have access to the island is possible by just sending your resume via email with my <a href="http://njepuneere.com">njepuneere.com</a>. CVs of the members of the passive position, the employer by companies, <a href="http://njepuneere.com">njepuneere.com</a> my resume bank calls, can not be displayed in any way. Only resumes with a member firm by the employer on your resume when you apply to listings with the job search can be viewed at its own discretion. Active or passive state of being can be changed during your resume Update resume. But that any updates yet been activated by the system resumes for six months is automatically inactivated. Related biography is informed by the owner informed via e-mail in this case.
          </p>
          <p>
            Employer companies with job seekers who apply for jobs on the "My Applications" section in the "Messages" section communicates through. These messages were delivered containing information please contact "transmission letter" and "unread / read messages" are indicated by the icons. Also, I <a href="http://njepuneere.com">njepuneere.com</a> serves informational messages for transmission via e-mail to candidates from within the system of the companies. Employer companies, to the applicants, to provide information only at their own initiative.
          </p>
         </div>
         <div class="col-sm-4" style="margin-top:30px;">
          @include('partials/sidebar')
          
         </div>
      
</div>
@include('partials/footer')

  </body>
</html>

