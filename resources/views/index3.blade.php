@extends('layouts.app')
@section('content')
<style>

</style>
<section class="slider-main-area">
    <div class="main-slider an-si">
       <div class="bend niceties preview-2">
           <div id="ensign-nivoslider-2" class="slides">
              <img src="img/slider/1.jpg" alt="" title="#slider-direction-1"  />
              <img src="img/slider/2.jpg" alt="" title="#slider-direction-2"  />
              <img src="img/slider/3.jpg" alt="" title="#slider-direction-3"  />
              <img src="img/slider/4.jpg" alt="" title="#slider-direction-4"  />
           </div>
         </div>
   </div>
    
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
                        <div class="president indicator-style owl-carousel owl-theme" style="opacity: 1; display: block;">
                        @foreach($findevents as $eve)
                        <div class="owl-item" style="width: 450px;"><div class="two-hover">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="event-img">
                                        <a href="#">
                                            <img src='{{ asset($eve->proflie)}}' alt="">
                                        </a>
                                    </div>
                                    <div class="event-text">
                                        <div class="event-time">
                                            <span class="published">
                                                <i class="fa fa-clock-o"></i>
                                                02d : 11h : 22m : 42s
                                            </span>
                                        </div>
                                        <h3><a href="#">{{$eve->e_name}}</a></h3>
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
                            @endforeach
                           </div>
                            </div>


                            
                            
                            
                            
                            </div>
                            </div>
                            </div></div></div>
                            
                            
                            
                            
                        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
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
              <div class="sin-timeline col-md-6 col-sm-6 text-center">
                 <span class="timeline-date">Jun 2013</span>
                    <div class="timeline-content">
                        <a class="timeline-img" href="#"><img src="img/time-line/3.jpg" alt=""></a>
                        <div class="timeline-text">
                           <h3><a href="#">Clinton's big worry</a></h3>
                           <p>However, he noted ISIS terrorists in Syria still have "the ability to appeal to troubled souls" online and said the number of open</p>
                           <a class="read-more" href="#">Read More</a>
                        </div>
                     </div>
              </div>
             
          </div>
		</div>
	</div>
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
       <div class="row">
          <div class="team-slider slider-active indicator-style">
          @foreach($findevents as $prof)
              <div class="col-md-3 text-center">
                 <div class="meet-all">
                     <div class="meet-img">
                        <a href="#"><img src="img/banner/7.jpg" alt=""></a>
                        <!-- <a href="#"><img src='{{ asset($prof->proflie)}}' class="img-responsive" alt=""></a> -->
                        <div class="meet-icon-all">
                            <div class="meet-icon">
                               <ul>
                                   <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </li>
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                               </ul>
                            </div>
                        </div>
                     </div>
                     <div class="product-content">
                        <h3> {{$prof->fname}}  {{$prof->lname}}</h3>
                        <p>{{$prof->depart_short_name}}</p>
                     </div>
                 </div>
              </div>
         @endforeach
           </div>
       </div>
    </div>
</section>
@endsection
