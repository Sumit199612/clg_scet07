@extends('layouts.app')
@section('content')

<style>

</style>
<section class="slider-main-area">
    <div class="main-slider an-si">
       <div class="bend niceties preview-2">
           <div id="ensign-nivoslider-2" class="slides">
              <img src="img/slider/3.jpg" alt="" style="height:300px" title="#slider-direction-1"  />
              <img src="img/slider/4.jpg" alt="" style="height:300px" title="#slider-direction-2"  />
              <img src="img/slider/1.jpg" alt="" style="height:300px" title="#slider-direction-3"  />
              <img src="img/slider/2.jpg" alt="" style="height:300px" title="#slider-direction-4"  />
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
            @foreach($findevents as $eve)
            <div class="two-hover fst">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="event-img">
                        <a href="#">
                            <img src='{{ asset($eve->proflie)}}' alt="">
                        </a>
                    </div>
                    <div class="event-text">
                        <h3><a href="#">{{$eve->e_name}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="event-area ptb-80">
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
<section class="event-area ptb-80">
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
                                        <!-- <a href="#"><img src="img/banner/7.jpg" alt=""></a> -->
                                        <a href="#"><img src='{{ asset($prof->proflie)}}' class="img-responsive" alt=""></a>
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
