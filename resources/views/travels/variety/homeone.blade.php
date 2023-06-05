@extends('travels.warehouse')
@section('content')
     <!-- Tour Search -->
     <div class="booking-wrapper">
         <div class="container">
             <div class="tour-inner clearfix form-inline justify-content-center">
                 <form action="tours.html" class="form1 clearfix">
                     <div class="col1 c1">
                         <div class="input2_wrapper">
                             <label>Where to? </label>
                             <div class="input2_inner">
                                 <input type="text" class="form-control input" placeholder="Where to?" />
                             </div>
                         </div>
                     </div>
                     <div class="col1 c2">
                         <div class="select1_wrapper">
                             <label>Destinations </label>
                             <div class="select1_inner">
                                 <select class="select2 select" style="width: 100%">
                                     <option value="0" />Destinations
                                     <option value="1" />Greece
                                     <option value="2" />London
                                     <option value="3" />Maldives
                                     <option value="4" />Paris
                                     <option value="5" />Rome
                                 </select>
                             </div>
                         </div>
                     </div>
                     <div class="col1 c4">
                         <div class="select1_wrapper">
                             <label>Duration </label>
                             <div class="select1_inner">
                                 <select class="select2 select" style="width: 100%">
                                     <option value="0" />Duration
                                     <option value="1" />1 Day Tour
                                     <option value="2" />2-4 Days Tour
                                     <option value="3" />5-7 Days Tour
                                     <option value="4" />7+ Days Tour
                                 </select>
                             </div>
                         </div>
                     </div>
                     <div class="col1 c5">
                         <button type="submit" class="btn-form1-submit"><i class="ti-search"></i> Find Now </button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
     <!-- About -->
     <section class="about cover section-padding">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                     <div class="section-subtitle">The best travel agency </div>
                     <div class="section-title">Discover the  <span>world </span> with our guide </div>
                     <p>You can choose any _______ with good tourism. Agency _________ sesue the aucan vestibulum _______ justo in sapien rutrum ________. Donec in quis the ____________ velit. Donec id velit __ arcu posuere blane. </p>
                     <p>Hotel ut nisl quam __________ ac quam nec odio _________ ceisue the miss varius _______ penatibus et magnis dis __________ monte. </p>
                     <ul class="list-unstyled about-list mb-30">
                         <li>
                             <div class="about-list-icon">  <span class="ti-check"></span>  </div>
                             <div class="about-list-text">
                                 <p>20 Years of Experience </p>
                             </div>
                         </li>
                         <li>
                             <div class="about-list-icon">  <span class="ti-check"></span>  </div>
                             <div class="about-list-text">
                                 <p>150+ Tour Destinations </p>
                             </div>
                         </li>
                     </ul>
                     <!-- Info -->
                     <div class="phone-call mb-30">
                         <div class="icon"><span class="flaticon-phone-call"></span></div>
                         <div class="text">
                             <p>For information </p>  <a href="tel:855-333-4444">855 333 4444 </a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                     <div class="img-exp">
                         <div class="about-img">
                             <div class="img">  <img src="{{asset('travel/img/about.jpeg')}}" class="img-fluid" alt="" />  </div>
                         </div>
                         <div id="circle">
                             <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewbox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                 <defs>
                                     <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "></path>
                                 </defs>
                                 <circle cx="150" cy="100" r="75" fill="none"></circle>
                                 <g>
                                     <use xlink:href="#circlePath" fill="none"></use>
                                     <text fill="#0f2454">
                                         <textpath xlink:href="#circlePath"> . travel agency . travel agency  </textpath>
                                     </text>
                                 </g>
                             </svg>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Tours 1 -->
     <section class="tours1 section-padding bg-lightnav" data-scroll-index="1">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-subtitle"><span>Choose your place </span></div>
                     <div class="section-title">Popular  <span>Tours </span></div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-8">
                     <div class="item">
                         <div class="position-re o-hidden">  <img src="{{asset('travel/img/tours/maldives1.jpg')}}" alt="" />  </div>  <span class="category"><a href="#0">$2.500 </a></span>
                         <div class="con">
                             <div class="rating">  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star active"></i>  <i class="star"></i>
                                 <div class="reviews-count">(2 Reviews) </div>
                             </div>
                             <h5><a href="tour-details.html">Maldives Tour </a></h5>
                             <div class="line"></div>
                             <div class="row facilities">
                                 <div class="col col-md-12">
                                     <ul>
                                         <li><i class="ti-time"></i> 10 Days </li>
                                         <li><i class="ti-user"></i> 12+ </li>
                                         <li><i class="ti-location-pin"></i> Maldives </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="item">
                         <div class="position-re o-hidden"><img src="{{asset('travel/img/tours/italy1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$1.300 </a></span>
                         <div class="con">
                             <h5><a href="tour-details.html">Italy Tour </a>  </h5>
                             <div class="line"></div>
                             <div class="row facilities">
                                 <div class="col col-md-12">
                                     <ul>
                                         <li><i class="ti-time"></i> 6 Days </li>
                                         <li><i class="ti-user"></i> 10+ </li>
                                         <li><i class="ti-location-pin"></i> Italy </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="item">
                         <div class="position-re o-hidden"><img src="{{asset('travel/img/tours/france1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$400 </a></span>
                         <div class="con">
                             <h5><a href="tour-details.html">France Tour </a>  </h5>
                             <div class="line"></div>
                             <div class="row facilities">
                                 <div class="col col-md-12">
                                     <ul>
                                         <li><i class="ti-time"></i> 10 Days </li>
                                         <li><i class="ti-user"></i> 6+ </li>
                                         <li><i class="ti-location-pin"></i> France </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="item">
                         <div class="position-re o-hidden"><img src="{{asset('travel/img/tours/greece1.jpg')}}" alt="" /></div>  <span class="category"><a href="#">$500 </a></span>
                         <div class="con">
                             <h5><a href="tour-details.html">Greece Tour </a>  </h5>
                             <div class="line"></div>
                             <div class="row facilities">
                                 <div class="col col-md-12">
                                     <ul>
                                         <li><i class="ti-time"></i> 10 Days </li>
                                         <li><i class="ti-user"></i> 12+ </li>
                                         <li><i class="ti-location-pin"></i> Greece </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="item">
                         <div class="position-re o-hidden"><img src="{{asset('travel/img/tours/canada1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$300 </a></span>
                         <div class="con">
                             <h5><a href="tour-details.html">Canada Tour </a></h5>
                             <div class="line"></div>
                             <div class="row facilities">
                                 <div class="col col-md-12">
                                     <ul>
                                         <li><i class="ti-time"></i> 7 Days </li>
                                         <li><i class="ti-user"></i> 10+ </li>
                                         <li><i class="ti-location-pin"></i> Canada </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Numbers -->
     <section class="numbers">
         <div class="section-padding bg-img bg-fixed back-position-center" data-background="{{asset('travel/img/slider/15.jpg')}}" data-overlay-dark="6">
             <div class="container">
                 <div class="row">
                     <div class="col-md-3">
                         <div class="item text-center">   <span class="icon">
                                 <i class="front flaticon-air-freight"></i>
                                 <i class="back flaticon-air-freight"></i>
                             </span>
                             <h3 class="count">600 </h3>
                             <h6>Flight Booking </h6>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="item text-center">   <span class="icon">
                                 <i class="font flaticon-house"></i>
                                 <i class="back flaticon-house"></i>
                             </span>
                             <h3 class="count">250 </h3>
                             <h6>Amazing Tour </h6>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="item text-center">   <span class="icon">
                                 <i class="front flaticon-ship"></i>
                                 <i class="back flaticon-ship"></i>
                             </span>
                             <h3 class="count">100 </h3>
                             <h6>Cruises Booking </h6>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="item text-center">  <span class="icon">
                                 <i class="front flaticon-tag"></i>
                                 <i class="back flaticon-tag"></i>
                             </span>
                             <h3 class="count">100 </h3>
                             <h6>Ticket Booking </h6>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Destination 1 -->
     <section class="destination1 section-padding bg-lightnav">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-subtitle">Top Destination </div>
                     <div class="section-title">Popular  <span>Destination </span></div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                     <div class="owl-carousel owl-theme">
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/maldives1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">New </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html"><i class="ti-location-pin"></i> Maldives </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-8">
                                         <p>4 Tour Packages </p>
                                     </div>
                                     <div class="col col-md-4 text-right">
                                         <div class="permalink"><a href="tour-details.html">Explore  <i class="ti-arrow-right"></i></a></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden">  <img src="{{asset('travel/img/destination/canada1.jpg')}}" alt="" />  </div>  <span class="category"><a href="#0">25% OFF </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html"><i class="ti-location-pin"></i> Canada </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-8">
                                         <p>3 Tour Packages </p>
                                     </div>
                                     <div class="col col-md-4 text-right">
                                         <div class="permalink"><a href="tour-details.html">Explore  <i class="ti-arrow-right"></i></a></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/italy1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">7 Tours </a></span>
                             <div class="con">
                                 <h5><a href="#0"><i class="ti-location-pin"></i> Italy </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-8">
                                         <p>7 Tour Packages </p>
                                     </div>
                                     <div class="col col-md-4 text-right">
                                         <div class="permalink"><a href="tour-details.html">Explore  <i class="ti-arrow-right"></i></a></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/greece1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">New </a></span>
                             <div class="con">
                                 <h5><a href="#0"><i class="ti-location-pin"></i> Greece </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-8">
                                         <p>6 Tour Packages </p>
                                     </div>
                                     <div class="col col-md-4 text-right">
                                         <div class="permalink"><a href="tour-details.html">Explore  <i class="ti-arrow-right"></i></a></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">15% OFF </a></span>
                             <div class="con">
                                 <h5><a href="#0"><i class="ti-location-pin"></i> France </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-8">
                                         <p>10 Tour Packages </p>
                                     </div>
                                     <div class="col col-md-4 text-right">
                                         <div class="permalink"><a href="tour-details.html">Explore  <i class="ti-arrow-right"></i></a></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden"><img src="{{asset('tarvel/img/destination/dubai1.jpg')}}" alt="" /></div>  <span class="category"><a href="tours2.html">7 Tours </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html"><i class="ti-location-pin"></i> Dubai </a></h5>
                                 <div class="line"></div>
                                 <div class="row facilities">
                                     <div class="col col-md-8">
                                         <p>7 Tour Packages </p>
                                     </div>
                                     <div class="col col-md-4 text-right">
                                         <div class="permalink"><a href="tour-details.html">Explore  <i class="ti-arrow-right"></i></a></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Banner Tour Video -->
     <section class="dynamic-video-wrapper" data-overlay-dark="3">
         <video width="100%" height="100%" autoplay="autoplay" muted="" preload="auto" loop="loop">
             <source src="{{asset('travel/videos/travel-video.mp4')}}" type="video/mp4">
             </source>
        </video>
         <div class="wrap-content v-middle">
             <div class="container">
                 <div class="row">
                     <div class="col-md-8 offset-md-2">
                         <h1><a href="tour-details.html">Costa Victoria Cochin </a></h1>
                         <h4><i class="ti-location-pin"></i> Maldives &nbsp;&nbsp;  <i class="ti-timer"></i> 4 Days + 3 Nights </h4>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Italy & France Tours 1 -->
     <section class="tours1 section-padding">
         <div class="container">
             <div class="row mb-30">
                 <div class="col-md-12">
                     <div class="section-subtitle">Most Popular </div>
                     <div class="section-title"><span>Travel </span> Countries </div>
                 </div>
             </div>
             <!-- Italy Tours -->
             <div class="row mb-90">
                 <div class="col-md-5">
                     <div class="country country1 mt-30">
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
                             <div class="position-re o-hidden"><img src="{{asset('tarvel/img/destination/rome1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$1.500 </a></span>
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
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/venice1.jpg')}}" alt="" /></div>  <span class="category"><a href="#">$1.300 </a></span>
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
                             <div class="position-re o-hidden"><img src="{{asset('tarvel/img/destination/milano.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$1.500 </a></span>
                             <div class="con">
                                 <h5><a href="tour-details.html">Milano </a>  </h5>
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
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/perugia1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$1.750 </a></span>
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
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/parma1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$1.200 </a></span>
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
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/aosta1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$3.000 </a></span>
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
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-paris1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$1.250 </a></span>
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
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-lyon1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$1.500 </a></span>
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
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-cannes1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$1.750 </a></span>
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
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-normandiya1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$2.500 </a></span>
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
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-bordeaux1.jpg')}}" alt="" /></div>  <span class="category"><a href="tours2.html">$1.500 </a></span>
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
                             <div class="position-re o-hidden"><img src="{{asset('travel/img/destination/france-marsielle1.jpg')}}" alt="" /></div>  <span class="category"><a href="#0">$1.750 </a></span>
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
                     <div class="country country2 mt-30">
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
     <!-- Blog -->
     <section class="blog section-padding bg-navy">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-subtitle"><span>Travel Blog </span></div>
                     <div class="section-title"><span>Travel </span> Experience </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                     <div class="owl-carousel owl-theme">
                         <div class="item">
                             <div class="position-re o-hidden">  <img src="{{asset('travel/img/blog/1.jpg')}}" alt="" />
                                 <div class="date">
                                     <a href="post.html">  <span>Dec </span>  <i>02 </i>  </a>
                                 </div>
                             </div>
                             <div class="con">  <span class="category">
                                     <a href="blog.html">Travel </a>
                                 </span>
                                 <h5><a href="post.html">Practical information for traveling __ Egypt </a></h5>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden">  <img src="{{asset('travel/img/blog/2.jpg')}}" alt="" />
                                 <div class="date">
                                     <a href="post.html">  <span>Dec </span>  <i>04 </i>  </a>
                                 </div>
                             </div>
                             <div class="con">  <span class="category">
                                     <a href="blog.html">Tours </a>
                                 </span>
                                 <h5><a href="post.html">Most Popular Yacht Charter ______ </a></h5>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden">  <img src="{{asset('travel/img/blog/3.jpg')}}" alt="" />
                                 <div class="date">
                                     <a href="post.html">  <span>Dec </span>  <i>06 </i>  </a>
                                 </div>
                             </div>
                             <div class="con">  <span class="category">
                                     <a href="blog.html">Travel </a>
                                 </span>
                                 <h5><a href="post.html">Tips Towards a Flawless _________ </a></h5>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden">  <img src="{{asset('travel/img/blog/4.jpg')}}" alt="" />
                                 <div class="date">
                                     <a href="post.html">  <span>Dec </span>  <i>10 </i>  </a>
                                 </div>
                             </div>
                             <div class="con">  <span class="category">
                                     <a href="blog.html">Travel </a>
                                 </span>
                                 <h5><a href="post.html">5 things you can ___ miss in Miami </a></h5>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden">  <img src="{{asset('travel/img/blog/5.jpg')}}" alt="" />
                                 <div class="date">
                                     <a href="post.html">  <span>Dec </span>  <i>15 </i>  </a>
                                 </div>
                             </div>
                             <div class="con">  <span class="category">
                                     <a href="blog.html">Tours </a>
                                 </span>
                                 <h5><a href="post.html">Family Adventure Tours for _____ & Kids </a></h5>
                             </div>
                         </div>
                         <div class="item">
                             <div class="position-re o-hidden">  <img src="{{asset('travel/img/blog/6.jpg')}}" alt="" />
                                 <div class="date">
                                     <a href="post.html">  <span>Dec </span>  <i>18 </i>  </a>
                                 </div>
                             </div>
                             <div class="con">  <span class="category">
                                     <a href="blog.html">Tours </a>
                                 </span>
                                 <h5><a href="post.html">Small group tours with _______ from the USA </a></h5>
                             </div>
                         </div>
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
                         <h5>We Provide Top Destinations __________ For You Book Now ___ Enjoy! </h5>
                         <div class="phone-call mb-10">
                             <div class="icon color-1"><span class="flaticon-phone-call"></span></div>
                             <div class="text">
                                 <p class="color-1">Call Now </p>  <a class="color-1" href="tel:855-333-4444">855 333 4444 </a>
                             </div>
                         </div>
                         <p><i class="ti-check"></i><small>Call us, it's toll-free. </small></p>
                     </div>
                     <!-- Testimonials -->
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
     <!-- Footer -->
   @endsection
