@extends('layouts.app')
@section('content')

<style>

</style>
<section class="slider-main-area">
    <div class="main-slider an-si">
       <div class="bend niceties preview-2">
           <div id="ensign-nivoslider-2" class="slides">
              <img src="img/slider/1.jpg" alt="" style="height:300px" title="#slider-direction-1"  />
              <img src="img/slider/2.jpg" alt="" style="height:300px" title="#slider-direction-2"  />
              <img src="img/slider/3.jpg" alt="" style="height:300px" title="#slider-direction-3"  />
              <img src="img/slider/4.jpg" alt="" style="height:300px" title="#slider-direction-4"  />
           </div>
           </div>
           {{-- <!-- direction 1 -->
           <div id="slider-direction-3" class="t-cn slider-direction Builder">
              <div class="container">
                  <div class="slide-all"><!-- layer 1 -->
                     <div class="layer-1">
                         <h3 class="title5">HEY! WE ARE polite</h3>
                     </div><!-- layer 2 -->
                     <div class="layer-2">
                        <h1 class="title6"> Your Vote for Progress </h1>
                     </div><!-- layer 2 -->
                     <div class="layer-2">
                        <h1 class="title6">We Make History </h1>
                     </div><!-- layer 3 -->
                     <div class="layer-3">
                        <a class="min1" href="#">Read more</a>
                     </div>
                 </div>
              </div>
           </div>
           <div id="slider-direction-1" class="t-cn slider-direction Builder">
               <div class="container">
						<div class="slide-all slide2"><!-- layer 1 -->
							<div class="layer-1">
                            <h3 class="title5 moment">HEY! WE ARE polite</h3>
                        </div><!-- layer 2 -->
                        <div class="layer-2">
                            <h1 class="title6">Election Day Is Coming</h1>
                        </div> <!-- layer 2 -->
                        <div class="layer-2">
                            <h1 class="title6">United for Progress</h1>
                        </div><!-- layer 3 -->
                        <div class="layer-3">
                            <a class="min1" href="#">Read more</a>
                        </div>
                     </div>
               </div>
           </div> --}}
       </div>
    </div>
</section>
    {{-- <section class="what-area section-margin ptb-80">
        <div class="container">
                <div class="row">
                <div class="col-md-12 text-center pb-30">
                    <div class="what-top">
                        <div class="section-title">
                                <h1>What We Do</h1>
                            <div class="what-icon">
                                <i class="fa fa-bookmark" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Our mission is to create a society in which an informed and active citizenry is sovereign and makes policy decisions based on the will of the majority.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                            <div class="service-area-all">
                            <div class="offer-icon">
                                <i class="fa fa-crosshairs" aria-hidden="true"></i>
                            </div>
                            <div class="offer-text">
                                    <h3>Our Mission</h3>
                                    <p>To create a society in which an informed and active citizenry is sovereign and makes policy decisions based on the will.</p>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-area-all res-3">
                            <div class="offer-icon">
                                <i class="fa fa-volume-up" aria-hidden="true"></i>
                            </div>
                            <div class="offer-text">
                                <h3>Our Campaings</h3>
                                        <p>We oppose discrimination based on race, color, spiritual belief, gender, sexual orientation, age, physical ability, and origin.</p>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm">
                    <div class="service-area-all">
                        <div class="offer-icon">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </div>
                        <div class="offer-text">
                            <h3>Our Election</h3>
                            <p>We believe that our mission calls for non-traditional approaches, and we call for every citizen to participate in upcoming elections.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row service-mrg">
                <div class="col-md-4 col-sm-6">
                    <div class="service-area-all">
                        <div class="offer-icon">
                            <i class="fa fa-street-view" aria-hidden="true"></i>
                        </div>
                        <div class="offer-text">
                            <h3>Join Volunteers</h3>
                            <p>Volunteers is the backbone of our movement. Find out more about volunteering with our party and opportunities available.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-area-all res-3">
                        <div class="offer-icon">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </div>
                        <div class="offer-text">
                            <h3>Our Projects</h3>
                            <p>We will build democracy through activism and education and change the law to ensure that political processes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm">
                    <div class="service-area-all">
                                <div class="offer-icon">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="offer-text">
                            <h3>Communities</h3>
                            <p>A sound and healthy state is one in which government recognizes and protects the independent responsibilities that belong.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-area2">
        <div class="container">
        <div class="row">
            <div class="col-md-3 text-center col-sm-3 col-xs-6">
                <div class="counter-bottom2 res-count">
                        <div class="counter cnt-two">
                            <h1>5433 </h1>
                        </div>
                        <div class="counter-next2">
                            <h2>Donations</h2>
                        </div>
                </div>
            </div>
            <div class="col-md-3 text-center col-sm-3 col-xs-6">
                <div class="counter-bottom2 res-count res-3">
                    <div class="counter cnt-two">
                        <h1>4758 </h1>
                    </div>
                    <div class="counter-next2">
                        <h2>Members</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center col-sm-3 col-xs-6">
                    <div class="counter-bottom2 res-3">
                        <div class="counter cnt-two">
                                <h1>3645 </h1>
                            </div>
                            <div class="counter-next2">
                                    <h2>Political Speech</h2>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 text-center col-sm-3 col-xs-6">
                    <div class="counter-bottom2 res-3">
                    <div class="counter cnt-two">
                        <h1>2536</h1>
                    </div>
                    <div class="counter-next2">
                        <h2>Campaign</h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> --}}
<section class="event-area ptb-80">
    <div class="container">
       <div class="row">
           <div class="col-md-12 text-center pb-30">
              <div class="what-top">
                 <div class="section-title">
                     <h1>Upcoming Events</h1>
                     <div class="what-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                     </div>
                 </div>
                  <p class="up">We are pleased to announce the following events our movement’s representatives are going to participate in.</p>
				</div>
           </div>
       </div>
       <div class="row">
           <div class="president indicator-style">
              <div class="two-hover fst">
                 <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="event-img">
                         <a href="#">
								<img src="img/event/e1.jpg" alt="">
                        </a>
                     </div>
                     <div class="event-text">
                        <div class="event-time">
                            <span class="published">
									<i class="fa fa-clock-o"></i>
									02d : 11h : 22m : 42s
                            </span>
                        </div>
							<h3><a href="#">VERVE Cultural Fest</a></h3>
                        <div class="event-month">
                           <span class="published2">
                               <i class="fa fa-calendar" aria-hidden="true"></i>
                                4 May, 2017
                           </span>
                           <span class="published2 comment-left">
                               <i class="fa fa-comments-o" aria-hidden="true"></i>
                               <a href="#">02 Comment</a>
                           </span>
                       </div>
                     </div>
                </div>
            </div>
            <div class="two-hover">
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="event-img">
                      <a href="#">
                      <img src="img/event/e2.jpg" alt="">
                     </a>
                  </div>
                  <div class="event-text">
                     <div class="event-time">
                         <span class="published">
                             <i class="fa fa-clock-o"></i>
                               02d : 11h : 22m : 42s
                         </span>
                     </div>
                      <h3><a href="#">VERVE Cultural Fest</a></h3>
                      <div class="event-month">
                            <span class="published2">
                               <i class="fa fa-calendar" aria-hidden="true"></i>
                                14 May, 2017
                            </span>
                            <span class="published2  comment-left">
                                <i class="fa fa-comments-o" aria-hidden="true"></i>
                                <a href="#">02 Comment</a>
                            </span>
                     </div>
                 </div>
              </div>
           </div>
           <div class="two-hover">
              <div class="col-md-4 col-sm-6 col-xs-12">
                 <div class="event-img">
                     <a href="#">
                        <img src="img/event/e3.jpg" alt="">
                     </a>
                 </div>
                 <div class="event-text">
                     <div class="event-time">
                        <span class="published">
                            <i class="fa fa-clock-o"></i>
                             02d : 11h : 22m : 42s
                        </span>
                     </div>
                     <h3><a href="#">Annual International</a></h3>
                     <div class="event-month">
                        <span class="published2">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            14 May, 2017
                        </span>
                        <span class="published2  comment-left">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                            <a href="#">02 Comment</a>
                        </span>
                     </div>
                  </div>
          </div>
       </div>
       <div class="two-hover">
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="event-img">
                  <a href="#">
                     <img src="img/event/1.jpg" alt="">
                 </a>
              </div>
              <div class="event-text">
                  <div class="event-time">
                     <span class="published">
                        <i class="fa fa-clock-o"></i>
                         02d : 11h : 22m : 42s
                     </span>
                  </div>
                   <h3><a href="#">65-th Annual International</a></h3>
                    <div class="event-month">
                        <span class="published2">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            14 May, 2017
                        </span>
                        <span class="published2  comment-left">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                            <a href="#">02 Comment</a>
                        </span>
                    </div>
              </div>
           </div>
       </div>
       <div class="two-hover">
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="event-img">
                 <a href="#">
                     <img src="img/event/2.jpg" alt="">
                 </a>
              </div>
              <div class="event-text">
                 <div class="event-time">
                      <span class="published">
                        <i class="fa fa-clock-o"></i>
                         02d : 11h : 22m : 42s
                      </span>
                 </div>
                  <h3><a href="#">65-th Annual International</a></h3>
                  <div class="event-month">
						  <span class="published2">
							 <i class="fa fa-calendar" aria-hidden="true"></i>
							 14 May, 2017
						  </span>
						   <span class="published2  comment-left">
							 <i class="fa fa-comments-o" aria-hidden="true"></i>
							 <a href="#">02 Comment</a>
						 </span>
					</div>
				</div>
          </div>
       </div>
    </div>
    </div>
    <div class="row">
       <div class="col-md-12 text-center">
          <div class="event-icon">
             <a href="events-details.html">Load More <i class="fa fa-clock-o"></i></a>
           </div>
       </div>
   </div>
  </div>
</section>
 <section class="timeline-area ptb-80">
    <div class="container">
       <div class="row">
          <div class="col-md-12 text-center">
              <div class="what-top line">
                 <div class="section-title">
                     <h1>Mission</h1>
                        <div class="what-icon">
                           <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                 </div>
                 <p class="up">Explore some of the key moments and events that have helped shape the course of New Zealand's political and constitutional development.</p>
              </div>
          </div>
          <div class="timeline-wraper fix">
              <div class="sin-timeline col-md-6 col-sm-6 text-center">
                 <span class="timeline-date">Jun 2013</span>
                     <div class="timeline-content">
                        <a class="timeline-img" href="#"><img src="img/time-line/t1.jpg" alt=""></a>
                        <div class="timeline-text">
                           <h3><a href="#">News & Achievements</a></h3>
                           <p>However, he noted ISIS terrorists in Syria still have "the ability to appeal to troubled souls" online and said the number of open</p>
                            <a class="read-more" href="#">Read More</a>
                        </div>
                     </div>
              </div>
              <div class="sin-timeline col-md-6 col-sm-6 text-center res-sin">
                 <span class="timeline-date">Jun 2013</span>
                     <div class="timeline-content">
                        <a class="timeline-img" href="#"><img src="img/time-line/t2.jpg" alt=""></a>
                        <div class="timeline-text">
                           <h3><a href="#">Student Notice Board</a></h3>
                            <p>However, he noted ISIS terrorists in Syria still have "the ability to appeal to troubled souls" online and said the number of open</p>
                            <a class="read-more" href="#">Read More</a>
                         </div>
                     </div>
				</div>
              {{-- <div class="sin-timeline col-md-6 col-sm-6 text-center">
                 <span class="timeline-date">Jun 2013</span>
                    <div class="timeline-content">
                        <a class="timeline-img" href="#"><img src="img/time-line/3.jpg" alt=""></a>
                        <div class="timeline-text">
                           <h3><a href="#">Clinton's big worry</a></h3>
                           <p>However, he noted ISIS terrorists in Syria still have "the ability to appeal to troubled souls" online and said the number of open</p>
                           <a class="read-more" href="#">Read More</a>
                        </div>
                     </div>
              </div> --}}
              <div class="read-icon">
                 <a class="re-icon" href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                 <a href="#">Load More</a>
              </div>
          </div>
		</div>
	</div>
</section>
{{-- <section class="support-area stripe-parallax-bg ptb-95" data-parallax-speed="0.5">
    <div class="container">
       <div class="row">
           <div class="col-md-12 text-center">
              <div class="support-all">
                 <div class="what-top pb-30">
                      <div class="section-title">
                        <h1>donate today</h1>
                        <div class="what-icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                         </div>
                     </div>
                 </div>
                 <div class="donet-dollar">
                     <ul>
                        <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> 100</a></li>
                        <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> 200</a></li>
                        <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> 300</a></li>
                        <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> 400</a></li>
                        <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> 500</a></li>
                     </ul>
                 </div>
                  <div class="support-text">
                     <a class="hs-btn t2" href="donate.html">Donate now</a>
                  </div>
              </div>
           </div>
       </div>
    </div>
</section> --}}
<section class="meet-area pt-80 pb-80">
   <div class="container">
       <div class="row">
          <div class="col-md-12 text-center">
              <div class="what-top pb-30">
                  <div class="section-title">
                     <h1>Meet Our Team</h1>
                     <div class="what-icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                     </div>
                 </div>
                  <p class="up">Meet our team, winning messaging and professional execution for political and issue-based campaigns.</p>
              </div>
          </div>
       </div>
       
</section>
            <section class="campaign-area ptb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center pb-30">
                            <div class="what-top meet campaign">
                                <div class="section-title">
                                    <h1>Latest Campaign News</h1>
                                    <div class="what-icon">
                                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <p class="up">The latest news and headlines from the world of politics. Get news and in-depth coverage with videos and photos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="campaign-bottom campaign-two">
                            <div class="col-md-4 col-sm-4">
                                <div class="blog-container-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img class="attachment-blog-list" src="img/blog/1.jpg" alt=""></a>
                                    </div>
                                    <div class="visual-inner">
                                        <div class="home-2-blog">
                                            <h3 class="blog-title">
                                                <a href="#">Lorem Ipsum is simply dummy</a>
                                            </h3>
                                            <div class="blog-content">
                                                <p>This year, in this election, we are called to reaffirm our values and our commitments, to hold them against a hard reality and see how we are .......</p>
                                            </div>
                                        </div>
                                        <div class="blog-meta">
                                            <span class="published3">
                                                <i class="fa fa-calendar" aria-hidden="true"></i> 14 May, 2017
                                            </span>
                                            <span class="published4"><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#"> 03 Comment </a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="blog-container-inner res-1">
                                    <div class="post-thumb">
                                        <a href="#"><img class="attachment-blog-list" src="img/blog/2.jpg" alt=""></a>
                                    </div>
                                    <div class="visual-inner">
                                        <div class="home-2-blog">
                                            <h3 class="blog-title">
                                                <a href="#">Lorem Ipsum is simply dummy</a>
                                            </h3>
                                            <div class="blog-content">
                                                <p>This year, in this election, we are called to reaffirm our values and our commitments, to hold them against a hard reality and see how we are .......</p>
                                            </div>
                                        </div>
                                        <div class="blog-meta">
                                            <span class="published3">
                                                <i class="fa fa-calendar" aria-hidden="true"></i> 13 May, 2017
                                            </span>
                                            <span class="published4"><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#"> 03 Comment </a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="blog-container-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img class="attachment-blog-list" src="img/blog/4.jpg" alt=""></a>
                                    </div>
                                    <div class="visual-inner">
                                        <div class="home-2-blog">
                                            <h3 class="blog-title">
                                                <a href="#">Lorem Ipsum is simply dummy</a>
                                            </h3>
                                            <div class="blog-content">
                                                <p>This year, in this election, we are called to reaffirm our values and our commitments, to hold them against a hard reality and see how we are .......</p>
                                            </div>
                                        </div>
                                        <div class="blog-meta">
                                            <span class="published3">
                                                <i class="fa fa-calendar" aria-hidden="true"></i> 13 May, 2017
                                            </span>
                                            <span class="published4"><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#"> 03 Comment </a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
