@extends('travels.warehouse')
@section('content')
     <!-- Header Banner -->
     <div class="banner-header section-padding valign bg-img bg-fixed back-position-center" data-overlay-dark="5" data-background="{{asset('travel/img/slider/15.jpg')}}">
         <div class="container">
             <div class="row">
                 <div class="col-md-7 caption mt-90">
                     <h5>The best travel agency </h5>
                     <h1>We helping you find  <span>your dream </span> vacation </h1>
                 </div>
             </div>
         </div>
     </div>
     <!-- About -->
     <section class="about cover section-padding">
         <div class="container">

             <div class="row">
                 <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                     <p>You can choose any _______ with good tourism. Agency _________ sesue the aucan vestibulum _______ justo in sapien rutrum ________. Donec in quis the ____________ velit. Donec id velit __ arcu posuere blane. </p>
                     <p>Agency elementum sesue the _____ vestibulum aliquam justo in ______ rutin volutpat. Donec in ____ the pellentesque veliten. </p>
                     <p>Hotel ut nisl quam __________ ac quam nec odio _________ sceisue the duru ligula. ____ varius natoque penatibus et ______ dis parturient monte nascete _________ mus nellentesque habitant morbine. </p>
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
     <!-- Team -->
     <section class="team section-padding bg-navy">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-subtitle">Travel Experts </div>
                     <div class="section-title">Meet Our  <span>Guides </span></div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-4">
                     <div class="team-card mb-30">
                         <div class="team-img"><img src="{{asset('travel/img/team/01.jpg')}}" alt="" class="w-100" /></div>
                         <div class="team-content">
                             <h3 class="team-title">Emily Norman <span>Switzerland Guide </span></h3>
                             <p class="team-text">Nulla quis efficitur lacus ________ suere ausue in eduis ____ vesatien arcuman ontese auctor __ aleuam aretra. </p>
                             <div class="social">
								 <div class="full-width">
								     <a href="#"><i class="ti-linkedin"></i></a>
									 <a href="#"><i class="ti-facebook"></i></a>
									 <a href="#"><i class="ti-twitter"></i></a>
									 <a href="#"><i class="ti-instagram"></i></a>
								 </div>
							 </div>
                         </div>
                         <div class="title-box">
                             <h3 class="mb-0">Leonie Norman <span>Switzerland Guide </span></h3>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="team-card mb-30">
                         <div class="team-img"><img src="{{asset('travel/img/team/02.jpg')}}" alt="" class="w-100" /></div>
                         <div class="team-content">
                             <h3 class="team-title">Andreas Brown <span>Maldives Guide </span></h3>
                             <p class="team-text">Nulla quis efficitur lacus ________ suere ausue in eduis ____ vesatien arcuman ontese auctor __ aleuam aretra. </p>
                             <div class="social">
								 <div class="full-width">
								     <a href="#"><i class="ti-linkedin"></i></a>
									 <a href="#"><i class="ti-facebook"></i></a>
									 <a href="#"><i class="ti-twitter"></i></a>
									 <a href="#"><i class="ti-instagram"></i></a>
								 </div>
							 </div>
                         </div>
                         <div class="title-box">
                             <h3 class="mb-0">Andreas Brown <span>Maldives Guide </span></h3>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="team-card mb-30">
                         <div class="team-img"><img src="{{asset('travel/img/team/03.jpg')}}" alt="" class="w-100" /></div>
                         <div class="team-content">
                             <h3 class="team-title">Angelina White <span>Greece Guide </span></h3>
                             <p class="team-text">Nulla quis efficitur lacus ________ suere ausue in eduis ____ vesatien arcuman ontese auctor __ aleuam aretra. </p>
                             <div class="social">
								 <div class="full-width">
								     <a href="#"><i class="ti-linkedin"></i></a>
									 <a href="#"><i class="ti-facebook"></i></a>
									 <a href="#"><i class="ti-twitter"></i></a>
									 <a href="#"><i class="ti-instagram"></i></a>
								 </div>
							 </div>
                         </div>
                         <div class="title-box">
                             <h3 class="mb-0">Angelina White <span>Greece Guide </span></h3>
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