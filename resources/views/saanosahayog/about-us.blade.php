@extends('saanosahayog.main')
@section('content')

   <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
         <div class="breadcrumb-text">
            <h2> About Us </h2>
            <div class="bt-option">
               <a href="{{ url('/') }}">Home</a>
               <span>About</span>
            </div>
         </div>
      </div>
   </section>
<br>
   <section class="about-section spad">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="about-pic">
                  <img src="{{ url('public/saanosahayog/img/about.jpg') }}" alt="">
               </div>
            </div>
            <div class="col-lg-6">
               <div class="about-text">
                  <h3>The 2019 Conference</h3>
                  <p>When I first got into the online advertising business, I was looking for the magical combination that would put my website into the top search engine rankings, catapult me to the forefront of the minds or individuals looking to buy my product, and generally make me rich beyond my wildest dreams! After succeeding in the business for this long, I’m able to look back on my old self with this kind of thinking and shake my head. </p>
                  <ul>
                     <li><span class="icon_check"></span> Write On Your Business Card</li>
                     <li><span class="icon_check"></span> Advertising Outdoors</li>
                     <li><span class="icon_check"></span> Effective Advertising Pointers</li>
                     <li><span class="icon_check"></span> Kook 2 Directory Add Url Free</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- About Section End -->
   <!-- Story Section Begin -->
   <section class="story-section spad">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-title">
                  <h2>Our Story</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="story-left">
                  <div class="story-item">
                     <h2>2008</h2>
                     <div class="si-text">
                        <h4>Adwords Keyword Research For Beginners</h4>
                        <p>However this is also the most expensive position. Give it a try if the second to fourth display position gives you more visitors and more customers for less money.</p>
                     </div>
                  </div>
                  <div class="story-item">
                     <h2>2011</h2>
                     <div class="si-text">
                        <h4>Adwords Keyword Research For Beginners</h4>
                        <p>Virgin Mobile took a more effective approach in marketing their cell phone service by focusing not on the people that would be making the actual purchase.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="story-right">
                  <div class="story-item">
                     <h2>2015</h2>
                     <div class="si-text">
                        <h4>15 Tips To Increase Your Adwords Profits</h4>
                        <p>There is no better advertisement campaign that is low cost and also successful at the same time. Great business ideas when utilized effectively can save lots of money.</p>
                     </div>
                  </div>
                  <div class="story-item">
                     <h2>2019</h2>
                     <div class="si-text">
                        <h4>Advertising Internet Online Opportunities To Explore</h4>
                        <p>Many people sign up for affiliate programs with the hopes of making some serious money. They advertise a few places and then wait for the money to start pouring in.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection