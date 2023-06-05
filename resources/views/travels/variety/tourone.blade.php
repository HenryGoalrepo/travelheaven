@extends('travels.warehouse')
@section('content')
     <!-- Header Banner -->
     <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="{{asset('travel/img/slider/2.jpg')}}">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 caption mt-90">
                     <h5>Travel Countries </h5>
                     <h1>Popular  <span>Destination </span></h1>
                 </div>
             </div>
         </div>
     </div>
     <!-- Italy & France Tours 1 -->
     <section class="tours1 section-padding">
         <div class="container">
             <!-- Italy Tours -->
             <div class="row mb-90">
                 <div class="col-md-5">
                     <div class="country country1">
                         <div class="section-subtitle">Popular Tours </div>
                         <div class="section-title2">Italy, Europe </div>
                         <p>We provide you with ___________ and exciting tours to _________ parts of the world. ____ varius natoque penatibus et ______ disney turien nascete ridiculus ____ in the mus nellen. </p>
                         <div class="row tour-list">
                                         <div class="col-md-4">
                                             <ul>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Roma </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Milan </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Verona </a></li>
                                             </ul>
                                         </div>
                                         <div class="col-md-4">
                                             <ul>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Venice </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Florence </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Perugia </a></li>
                                             </ul>
                                         </div>
                                         <div class="col-md-4">
                                             <ul>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">San Marino </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Parma </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Aosta </a></li>
                                             </ul>
                                         </div>
                                     </div>
                         <div class="butn-dark mt-30 mb-30">  <a href="#" data-scroll-nav="1"><span>All Tours  <i class="ti-arrow-right"></i></span></a>  </div>
                     </div>
                 </div>
                 <div class="col-md-7">
                     <div class="owl-carousel owl-theme">
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/rome1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#0">$1.500 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Rome </a>  </h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 3 Days </li>
                                             <li><i class="ti-user"></i> 10+ </li>
                                             <li><i class="ti-location-pin"></i> Italy </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/venice1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#">$1.300 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Venice </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 4 Days </li>
                                             <li><i class="ti-user"></i> 8+ </li>
                                             <li><i class="ti-location-pin"></i> Italy </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/milano.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#0">$1.500 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Milan </a>  </h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 6 Days </li>
                                             <li><i class="ti-user"></i> 4+ </li>
                                             <li><i class="ti-location-pin"></i> Italy </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/perugia1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#0">$1.750 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Perugia </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 4 Days </li>
                                             <li><i class="ti-user"></i> 5+ </li>
                                             <li><i class="ti-location-pin"></i> Italy </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/parma1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#0">$1.200 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Parma </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 7 Days </li>
                                             <li><i class="ti-user"></i> 8+ </li>
                                             <li><i class="ti-location-pin"></i> Italy </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/aosta1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#0">$3.000 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Aosta </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 9 Days </li>
                                             <li><i class="ti-user"></i> 10+ </li>
                                             <li><i class="ti-location-pin"></i> Italy </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- France Tours -->
             <div class="row">
                 <div class="col-md-7">
                     <div class="owl-carousel owl-theme">
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-paris1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#0">$1.250 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Paris </a>  </h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 7 Days </li>
                                             <li><i class="ti-user"></i> 12+ </li>
                                             <li><i class="ti-location-pin"></i> France </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-lyon1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#0">$1.500 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Lyon </a>  </h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 4 Days </li>
                                             <li><i class="ti-user"></i> 6+ </li>
                                             <li><i class="ti-location-pin"></i> France </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-cannes1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#0">$1.750 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Cannes </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 7 Days </li>
                                             <li><i class="ti-user"></i> 10+ </li>
                                             <li><i class="ti-location-pin"></i> France </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-normandiya1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#0">$2.500 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Normandiya </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 12 Days </li>
                                             <li><i class="ti-user"></i> 10+ </li>
                                             <li><i class="ti-location-pin"></i> France </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-bordeaux1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="tours2.html">$1.500 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Bordeaux </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 6 Days </li>
                                             <li><i class="ti-user"></i> 5+ </li>
                                             <li><i class="ti-location-pin"></i> France </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-marsielle1.jpg')}}" alt="" /></div>
                             <span class="category"><a href="#0">$1.750 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Marseille </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-12">
                                         <ul>
                                             <li><i class="ti-time"></i> 5 Days </li>
                                             <li><i class="ti-user"></i> 7+ </li>
                                             <li><i class="ti-location-pin"></i> France </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-5">
                     <div class="country country2">
                         <div class="section-subtitle">Popular Tours </div>
                         <div class="section-title2">France, Europe </div>
                         <p>We provide you with ___________ and exciting tours to _________ parts of the world. ____ varius natoque penatibus et ______ disney turien nascete in ___ ridiculus duru in the ___ nellen. </p>
                         <div class="row tour-list">
                                         <div class="col-md-4">
                                             <ul>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Paris </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Orleans </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Nantes </a></li>
                                             </ul>
                                         </div>
                                         <div class="col-md-4">
                                             <ul>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Lyon </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Bordeaux </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Toulouse </a></li>
                                             </ul>
                                         </div>
                                         <div class="col-md-4">
                                             <ul>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Marseille </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Cannes </a></li>
                                                 <li><i class="ti-location-pin"></i>  <a href="#" class="link-btn">Nice </a></li>
                                             </ul>
                                         </div>
                                     </div>
                         <div class="butn-dark mt-30 mb-30">  <a href="#" data-scroll-nav="1"><span>All Tours  <i class="ti-arrow-right"></i></span></a>  </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Testimonials -->
     <section class="testimonials">
         <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{asset('travel/img/slider/15.jpg')}}" data-overlay-dark="5">
             <div class="container">
                 <div class="row">
                     <!-- Call Now  -->
                     <div class="col-md-5 mb-30 mt-30">
                         <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                         <h5>We Provide Top Destinations __________ For You Book Now ___ Enjoy! </h5>
                         <div class="phone-call mb-10">
                             <div class="icon color-1"><span class="flaticon-phone-call"></span></div>
                             <div class="text">
                                 <p class="color-1">Call Now </p>  <a class="color-1" href="tel:855-333-4444">855 333 4444 </a>
                             </div>
                         </div>
                         <p><i class="ti-check"></i><small>Call us, it's toll-free. </small></p>
                     </div>
                     <!-- Booking From -->
                     <div class="col-md-5 offset-md-2">
                         <div class="testimonials-box">
                             <div class="head-box">
                                 <h6>Testimonials </h6>
                                 <h4>Travelers Reviews </h4>
                             </div>
                             <div class="owl-carousel owl-theme">
                                 <div class="item">
                                     <p>Travel dapibus asue metus ___ nec feusiate era the ____ hendreri the vemante the _____ insan toleon nectan feugiat ____ hendrerit necuis vesaire tours ______ neca ine the sene ____ habitan. </p>
                                     <div class="info">
                                         <div class="author-img">  <img src="{{asset('travel/img/team/04.png')}}" alt="" />  </div>
                                         <div class="cont">
                                             <div class="rating">  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  </div>
                                             <h6>Nolan White </h6>  <span>Guest review </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <p>Travel dapibus asue metus ___ nec feusiate era the ____ hendreri the vemante the _____ insan toleon nectan feugiat ____ hendrerit necuis vesaire tours ______ neca ine the sene ____ habitan. </p>
                                     <div class="info">
                                         <div class="author-img">  <img src="{{asset('travel/img/team/05.png')}}" alt="" />  </div>
                                         <div class="cont">
                                             <div class="rating">  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  </div>
                                             <h6>Emily Brown </h6>  <span>Guest review </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <p>Travel dapibus asue metus ___ nec feusiate era the ____ hendreri the vemante the _____ insan toleon nectan feugiat ____ hendrerit necuis vesaire tours ______ neca ine the sene ____ habitan. </p>
                                     <div class="info">
                                         <div class="author-img">  <img src="{{asset('travel/img/team/06.png')}}" alt="" />  </div>
                                         <div class="cont">
                                             <div class="rating">  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  </div>
                                             <h6>Olivia Martin </h6>  <span>Guest review </span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Clients -->
     <section class="clients">
         <div class="container">
             <div class="row">
                 <div class="col-md-7">
                     <div class="owl-carousel owl-theme">
                         <div class="clients-logo">
                             <a href="#0"><img src="{{asset('travel/img/clients/1.png')}}" alt="" /></a>
                         </div>
                         <div class="clients-logo">
                             <a href="#0"><img src="{{asset('travel/img/clients/2.png')}}" alt="" /></a>
                         </div>
                         <div class="clients-logo">
                             <a href="#0"><img src="{{asset('travel/img/clients/3.png')}}" alt="" /></a>
                         </div>
                         <div class="clients-logo">
                             <a href="#0"><img src="{{asset('travel/img/clients/4.png')}}" alt="" /></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
@endsection
