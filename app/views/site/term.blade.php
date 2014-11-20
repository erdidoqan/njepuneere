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
        <h1>Term Of Use</h1>
          <p>
              My <a href="http://njepuneere.com">njepuneere.com</a> terms of use; comprises general rules and legal responsibilities associated with the site Privacy Policy and Terms of Membership shall constitute a whole with the title text. Members must read before proceeding with this Privacy Policy and Terms of Use Membership Terms carefully. Any of the requirements you / your organization, we recommend you do not use <a href="http://njepuneere.com">njepuneere.com</a> not appropriate. If you use means you accept these terms in advance.
Member, fill out the form where the personal information, the operation would have accepted the conditions of use. <a href="http://njepuneere.com">njepuneere.com</a> I, unilaterally, is entitled to the conditions set forth in these Terms of fully or partially refuse to publish information that the membership decided not appropriate or unpublish.
          </p>
          <p>
              My <a href="http://njepuneere.com">njepuneere.com</a> the conditions specified below, without any notice, at any time unilaterally modify, stop, reserves the right to modify or cancel the content. Member agrees this savings. My <a href="http://njepuneere.com">njepuneere.com</a>, renovated the current terms of use will be published on the Site, shall notify the Members by electronic mail if deemed necessary. Refurbished current use conditions, which will be valid from the moment of its publication in <a href="http://njepuneere.com">njepuneere.com</a> and use of the Site will depend on the conditions of use from that moment renewed.
          </p>
          <p>
             When you visit <a href="http://njepuneere.com">njepuneere.com</a> we advise you to visit this page.<br>
  <a href="http://njepuneere.com">njepuneere.com</a> General Operation and Safety Rules<br>
  <a href="http://njepuneere.com">njepuneere.com</a> is a site open to everyone.<br>
Members information can be used only for the purposes specified in the Terms of Use. Information available on the Site, <a href="http://njepuneere.com">njepuneere.com</a> be copied partially or entirely without the prior written permission of receipt, distributed, rented, reproduced, to use, to be altered, stored for future use. All information on the Site is the property of <a href="http://njepuneere.com">njepuneere.com</a>.
          </p>
          <p>
            Services provided to individual members, unless otherwise specified in the relevant section is free. Only under the following conditions may prevent the use <a href="http://njepuneere.com">njepuneere.com</a> Member of the Site, and all liability that may arise from this cause 3rd parties or <a href="http://njepuneere.com">njepuneere.com</a> Member to recourse for all claims and demands made by the authorities can be put forward against <a href="http://njepuneere.com">njepuneere.com</a> are reserved.
          </p>
          <p>
            <li>
              Incorrect, incomplete, misleading statements and do not conform to the general moral rules to be saved to the site of resumes contain inappropriate photographs,
            </li>
            <li>
              Additional background information to reach and overall security of the site with the use of threatening efforts, the attempts have been made to prevent the operation of the site and the software used,
            </li>
            <li>
              Autobiography external information; private or public announcements, advertising and marketing for storing information,
            </li>
            <li>
              deletion or alteration of the information declared by third parties,
            </li>
            <li>
              published and declared by the Authority for use outside the site of the purpose of the resume search function,
            </li>
            <li>
              Information contained in the Site be copied partially or entirely used for different purposes,
            </li>
            <li>
              User name and use beyond the scope of the site or third party information such as passwords / and be shared with organizations.
            </li>
          </p>
          <p>
            In this case when they learned Member account of unauthorized products by that or password used is passed to the hands of others immediately immediately notify <a href="http://njepuneere.com">njepuneere.com</a>, <a href="http://njepuneere.com">njepuneere.com</a> Member of the password, membership accounts, can not be held responsible for the seizure by third parties of user names and undertakes to accept.
          </p>
          
         </div>
         <div class="col-sm-4" style="margin-top:30px;">
          @include('partials/sidebar')
          
         </div>
      
</div>
@include('partials/footer')

  </body>
</html>

