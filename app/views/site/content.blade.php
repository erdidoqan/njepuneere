<!DOCTYPE html>
<html lang="en">
  <head>
    
@include('partials/header')


  </head>

  <body>

      @include('partials/nav')
        
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

<div class="container">
        <div class="col-sm-8" style="margin-top:30px;">
        <h1>Use of Content</h1>
        <p>
          This is written all contained in the Site, graphs, statistical data and images (the "Materials") <a href="http://njepuneere.com">njepuneere.com</a> by has been brought into the body No. 5846 on Intellectual and Artistic Works Act and other relevant laws and all intellectual property arising from regulations and intellectual property rights, exclusively <a href="http://njepuneere.com">njepuneere.com</a>  I belongs to. Located <a href="http://njepuneere.com">njepuneere.com</a> be copied without the written consent of the materials on the Site, reproduction, publication or republication is prohibited.
        </p>
        <p>
          Likewise is the site's name and logo are the exclusive property of <a href="http://njepuneere.com">njepuneere.com</a> right can in no way be used without the written consent of <a href="http://njepuneere.com">njepuneere.com</a>, 3. made available to individuals and organizations.<br>
Site exclusively <a href="http://njepuneere.com">njepuneere.com</a> is the use of a medium or republished in any other website elements contained in the Site or <a href="http://njepuneere.com">njepuneere.com</a> permission can not be given a link to another website from this site without <a href="http://njepuneere.com">njepuneere.com</a>, routing possible.<br>
  <a href="http://njepuneere.com">njepuneere.com</a> design and used to create the database and copying or use of the software according to the agreement on the <a href="http://njepuneere.com">njepuneere.com</a> all rights strictly prohibited.
        </p>
        <p>
          Member, while using the Site, Criminal Law, Commercial Law, Law of Obligations, Intellectual and Artistic Works Act, ordinances and regulations in the Law concerning the Protection of the Trademark and Patent Rights, already laws in all kinds of laws and regulations regarding the applicable bylaw and as regards to the site <a href="http://njepuneere.com">njepuneere.com</a> agrees to comply with the notice be published. That may arise due to use contrary to law and legal notices to belong to members of all kinds of criminal and financial responsibility.<br>
  <a href="http://njepuneere.com">njepuneere.com</a> is open to critique and comment. All criticism and comments submitted to our site is the property of My <a href="http://njepuneere.com">njepuneere.com</a> be used for marketing purposes.
        </p>
        <p>
          Information Placed Automatically on your computer<br>
  Do not use your computer during <a href="http://njepuneere.com">njepuneere.com</a> 'Cookies (Cookie) called files can be placed. These files are not harmful; is only used to allow the creation of a more appropriate site for your request using the information you provide on the site.
responsibility
        </p>
        <p>
           information <a href="http://njepuneere.com">njepuneere.com</a> users who visit (visit duration, time, pages viewed) is monitored by our members in order to serve you better. The information obtained, without prejudice to the privacy principles, in order to enrich and improve our business section content is shared with our partners.<br>
  My <a href="http://njepuneere.com">njepuneere.com</a> all types of institutions and Member information contained in this website, news, articles, does not accept any responsibility for the educational programs offered and other materials. Not responsible for the content. Members are responsible for any information they have recorded particularly keep your resume on the site to the site.
  <a href="http://njepuneere.com">njepuneere.com</a> work against the Member and / or elements to find so there is no obligation. Companies and all kinds of communication and activities between members of the company and members are responsible for themselves.<br>
Provide information to visitors with the aim to help are located in or attached (direct links to different web sites) and risks associated with this site belong to the visitors.
        </p>
        <p>
           <a href="http://njepuneere.com">njepuneere.com</a> I, Members of this Terms of Use and Privacy Policy and act contrary to the obligations under the Membership Terms, to fulfill the obligations as any or requirements, laws and acts contrary to the rules defined by the regulations and any other circumstances I <a href="http://njepuneere.com">njepuneere.com</a>, Member of the system these Terms of Use, Privacy Principles, and if it determines that the violation of the Membership Terms of Use or law, the Member has the right to terminate membership and report to the authorities. My <a href="http://njepuneere.com">njepuneere.com</a>, itself owned by the terminated Member is free to delete the account, all kinds of registration, Member deleted records can not be found in any related rights or claims. In this case the condition reserves the <a href="http://njepuneere.com">njepuneere.com</a> my whole case and demand rights, suffered that request to Members every kind of compensation for the damage and liability to the contrary behavior of the government agency and / or any potentially have to pay to third parties for compensation and / or administrative / legal money Members are entitled to the same penalties recourse.
Members of these Terms will come into effect with the start of the membership as one of the forms specified in terms <a href="http://njepuneere.com">njepuneere.com</a> Members and shall remain in force unless terminated due.
This Istanbul Courts and the Executive Office of the resolution of disputes arising from the application of the Terms of Use are authorized.
Members present had read all of the items in the Terms of Use, understand, and accepting that confirm the accuracy of the information provided in connection with its acceptance and commitment.
To learn the principles and practices for protecting the privacy of our members' Privacy Policy and Terms of Membership "section, we also encourage you to review.
  Thank you for your interest in choosing <a href="http://njepuneere.com">njepuneere.com</a> and trust.
        </p>
         </div>
         <div class="col-sm-4" style="margin-top:30px;">
          @include('partials/sidebar')
          
         </div>
      
</div>
@include('partials/footer')

  </body>
</html>

