<div class="row">
    <div class="team-slider slider-active indicator-style">
        @foreach($findprof as $prof)
              <div class="col-md-3 text-center">
                 <div class="meet-all">
                     <div class="meet-img">
                        <!-- <a href="#"><img src="img/banner/7.jpg" alt=""></a> -->
                        <a href="#"><img src='{{ asset($prof->proflie)}}' alt=""></a>
                        <div class="meet-icon-all">
                            <!-- <div class="meet-icon">
                               <ul>
                                   <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a> </li>
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                               </ul>
                            </div> -->
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

<!-- put this code in index.blade.php below line no 336 -->

       <div class="row">
          <div class="team-slider slider-active indicator-style">
          @foreach($findprof as $prof)
              <div class="col-md-3 text-center">
                 <div class="meet-all">
                     <div class="meet-img">
                        <a href="#"><img src="img/banner/7.jpg" alt=""></a>
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
<!-- put this code in index.blade.php below line no 336 -->